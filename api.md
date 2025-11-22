# IdealGram SSR HTTP API Documentation

This document describes the small HTTP API surface exposed by the IdealGram SSR PHP backend.  
All endpoints are JSON‑based and intended to be called by trusted clients (e.g. the IdealGram app or tooling around it).

---

## Base URL

In development (PHP built‑in server):

```text
http://localhost:8000
```

Assuming your web server is configured to use `public/` as the document root, all endpoints below are relative to that base.

---

## Conventions

- **Content type**: All responses are JSON with:
  ```http
  Content-Type: application/json; charset=utf-8
  ```
- **Request bodies**:
  - Prefer `application/json` with a JSON body.
  - As a fallback, some endpoints also accept `application/x-www-form-urlencoded` form fields.
- **Error handling**:
  - On validation / client errors, endpoints return HTTP `400` with a JSON body:
    ```json
    { "error": "human readable message" }
    ```
  - On internal errors (e.g. DB connectivity) you will get HTTP `500`.
- **Authentication**:
  - No authentication layer is implemented yet.  
    These endpoints are expected to live behind your own infra / firewall or be wrapped by another gateway.

---

## 1. Get current app version

Returns the current public IdealGram version as configured in `config/app.php`.

- **Route**: `GET /api/update`
- **Request body**: none

### Response

```json
{
  "version": "1.0.0"
}
```

The value is read from:

```php
// config/app.php
return [
    'version' => '1.0.0',
];
```

### Example

```bash
curl -X GET "http://localhost:8000/api/update"
```

---

## 2. Collect client account metadata

Upserts minimal, non‑content metadata about a client account into the `ig_clients` table.

- **Route**: `POST /api/collect`
- **Preferred input**: JSON
- **Fallback input**: form fields

### Request body (JSON)

```json
{
  "id": "123456789",
  "username": "some_user",
  "first_name": "John",
  "last_name": "Doe"
}
```

Fields:

- `id` (string, **required**)  
  Internal numeric or Telegram account identifier. Used as the primary logical key.
- `username` (string, optional)  
  Telegram `@username` of the account, if any.
- `first_name` (string, optional)
- `last_name` (string, optional)

If you cannot or do not want to send JSON, you may send the same fields as form data:

```bash
curl -X POST "http://localhost:8000/api/collect" \
  -F "id=123456789" \
  -F "username=some_user" \
  -F "first_name=John" \
  -F "last_name=Doe"
```

### Success response

```json
{
  "ok": true
}
```

Semantics:

- The server will `INSERT ... ON DUPLICATE KEY UPDATE` into:

  ```sql
  ig_clients(account_id, username, first_name, last_name, created_at, updated_at)
  ```

- This means calling `/api/collect` multiple times with the same `id` will update the existing record.

### Error responses

- Missing `id`:

  - HTTP `400`
  - Body:
    ```json
    { "error": "id is required" }
    ```

---

## 3. Community handles – create / update

Registers a community handle (nickname) in the `ig_community_handles` table.  
This is meant for simple community surfacing features (lists of interesting handles, “Legends”, etc.).

- **Route**: `POST /api/community`
- **Preferred input**: JSON
- **Fallback input**: form field

### Request body (JSON)

```json
{
  "handle": "@my_nickname"
}
```

Fields:

- `handle` (string, **required**)  
  Any short nickname or `@username` string. Maximum length: **64** characters.

Alternatively, via form:

```bash
curl -X POST "http://localhost:8000/api/community" \
  -H "Content-Type: application/json" \
  -d '{ "handle": "@my_nickname" }'
```

### Success response

```json
{
  "ok": true,
  "handle": "@my_nickname"
}
```

Semantics:

- The server will upsert into:

  ```sql
  ig_community_handles(handle, created_at, updated_at)
  ```

- If the handle already exists, only `updated_at` will be refreshed.

### Error responses

- Missing handle:

  - HTTP `400`
  - Body:
    ```json
    { "error": "handle is required" }
    ```

- Handle too long (> 64 characters):

  - HTTP `400`
  - Body:
    ```json
    { "error": "handle is too long" }
    ```

---

## 4. Community handles – paginated listing

Returns a **windowed** list of community handles with simple pagination.  
This is intentionally limited to avoid dumping the full dataset in one call.

- **Route**: `GET /api/community`

### Query parameters

- `page` (integer, optional, default: `1`)
  - 1‑based page index, minimum value: 1.
- `limit` (integer, optional, default: `20`)
  - Number of items per page.
  - Clamped to the range `1..50`.

### Example

```bash
curl -X GET "http://localhost:8000/api/community?page=1&limit=20"
```

### Success response

```json
{
  "items": [
    {
      "id": 42,
      "handle": "@my_nickname",
      "created_at": "2025-11-22 03:00:00"
    }
    // ...
  ],
  "page": 1,
  "limit": 20,
  "has_next": true
}
```

Fields:

- `items`: array of handles for the current window.
  - `id` – internal numeric identifier (auto‑increment).
  - `handle` – nickname string as provided to `/api/community`.
  - `created_at` – timestamp in MySQL `TIMESTAMP` string format.
- `page`: the current page number (echoes your request, clamped to at least 1).
- `limit`: the effective limit used after clamping (1..50).
- `has_next`: `true` if there is at least one more page after this window; `false` otherwise.

Implementation detail:

- The backend fetches `limit + 1` rows and trims to `limit`, so `has_next` is reliable without needing a full `COUNT(*)`.

---

## 5. Data model expectations

The API expects the following minimal schema (names can be adjusted as long as SQL in `ApiController` matches):

```sql
CREATE TABLE ig_clients (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  account_id VARCHAR(64) NOT NULL UNIQUE,
  username VARCHAR(64) NULL,
  first_name VARCHAR(128) NULL,
  last_name VARCHAR(128) NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE ig_community_handles (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  handle VARCHAR(64) NOT NULL UNIQUE,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

---

## 6. Environment & configuration

- **Database config**: `config/database.php`

  ```php
  return [
      'dsn' => 'mysql:host=127.0.0.1;dbname=idealgram;charset=utf8mb4',
      'user' => 'idealgram',
      'password' => 'change-me',
  ];
  ```

- **App version**: `config/app.php`

  ```php
  return [
      'version' => '1.0.0',
  ];
  ```

Make sure the PHP runtime has the `pdo_mysql` driver enabled; otherwise the API endpoints that talk to MySQL will fail with `500` and the logger will record `could not find driver` in `var/log/app.log`.

---

## 7. Logging

All requests and server‑side errors are logged to:

```text
var/log/app.log
```

Each line contains:

- Timestamp
- Level (`INFO` / `ERROR`)
- Message
- Context, including:
  - `request.ip`
  - `request.user_agent`
  - `request.method`
  - `request.uri`

Use this file to debug DB issues, routing problems, or API misuse from clients.  
The log directory is ignored by git via `.gitignore` (`/var/log/`).  
