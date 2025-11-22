<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\Database;

final class ApiController
{
    /**
     * GET /api/update
     */
    public function update(): array
    {
        /** @var array{version?:string} $app */
        $app = require dirname(__DIR__, 2) . '/config/app.php';

        $version = $app['version'] ?? '0.0.0';

        return $this->json([
            'version' => $version,
        ]);
    }

    /**
     * POST /api/collect
     */
    public function collect(): array
    {
        $payload = $this->readJsonBody();

        $accountId = $this->stringOrNull($payload['id'] ?? ($_POST['id'] ?? null));
        $username = $this->stringOrNull($payload['username'] ?? ($_POST['username'] ?? null));
        $firstName = $this->stringOrNull($payload['first_name'] ?? ($_POST['first_name'] ?? null));
        $lastName = $this->stringOrNull($payload['last_name'] ?? ($_POST['last_name'] ?? null));

        if ($accountId === null || $accountId === '') {
            return $this->json(
                ['error' => 'id is required'],
                400
            );
        }

        $pdo = Database::getConnection();

        $sql = <<<SQL
INSERT INTO ig_clients (account_id, username, first_name, last_name, created_at, updated_at)
VALUES (:account_id, :username, :first_name, :last_name, NOW(), NOW())
ON DUPLICATE KEY UPDATE
    username = VALUES(username),
    first_name = VALUES(first_name),
    last_name = VALUES(last_name),
    updated_at = NOW()
SQL;

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':account_id', $accountId);
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':first_name', $firstName);
        $stmt->bindValue(':last_name', $lastName);

        $stmt->execute();

        return $this->json([
            'ok' => true,
        ]);
    }

    /**
     * POST /api/community
     */
    public function createCommunity(): array
    {
        $payload = $this->readJsonBody();

        $handle = $this->stringOrNull($payload['handle'] ?? ($_POST['handle'] ?? null));

        if ($handle === null || $handle === '') {
            return $this->json(
                ['error' => 'handle is required'],
                400
            );
        }

        if (mb_strlen($handle) > 64) {
            return $this->json(
                ['error' => 'handle is too long'],
                400
            );
        }

        $pdo = Database::getConnection();

        $sql = <<<SQL
INSERT INTO ig_community_handles (handle, created_at, updated_at)
VALUES (:handle, NOW(), NOW())
ON DUPLICATE KEY UPDATE
    updated_at = NOW()
SQL;

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':handle', $handle);
        $stmt->execute();

        return $this->json([
            'ok' => true,
            'handle' => $handle,
        ]);
    }

    /**
     * GET /api/community
     */
    public function listCommunity(): array
    {
        $page = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
        $limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 20;

        if ($limit < 1) {
            $limit = 1;
        } elseif ($limit > 50) {
            $limit = 50;
        }

        $offset = ($page - 1) * $limit;

        $pdo = Database::getConnection();

        $sql = <<<SQL
SELECT id, handle, created_at
FROM ig_community_handles
ORDER BY created_at DESC
LIMIT :limitPlusOne OFFSET :offset
SQL;

        $stmt = $pdo->prepare($sql);
        $limitPlusOne = $limit + 1;
        $stmt->bindValue(':limitPlusOne', $limitPlusOne, \PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, \PDO::PARAM_INT);
        $stmt->execute();

        $rows = $stmt->fetchAll();

        $hasNext = false;
        if (count($rows) > $limit) {
            $hasNext = true;
            $rows = array_slice($rows, 0, $limit);
        }

        return $this->json([
            'items' => $rows,
            'page' => $page,
            'limit' => $limit,
            'has_next' => $hasNext,
        ]);
    }

    /**
     * @param mixed $value
     */
    private function stringOrNull($value): ?string
    {
        if ($value === null) {
            return null;
        }

        $value = (string) $value;

        return $value === '' ? null : $value;
    }

    /**
     * @return array<string,mixed>
     */
    private function readJsonBody(): array
    {
        $raw = file_get_contents('php://input');
        if ($raw === false || $raw === '') {
            return [];
        }

        $data = json_decode($raw, true);

        if (!is_array($data)) {
            return [];
        }

        /** @var array<string,mixed> $data */
        return $data;
    }

    /**
     * @param array<string,mixed> $data
     * @return array{status:int,headers:array<string,string>,body:string}
     */
    private function json(array $data, int $status = 200): array
    {
        $json = json_encode($data, JSON_UNESCAPED_UNICODE);
        if ($json === false) {
            $json = '{}';
        }

        return [
            'status' => $status,
            'headers' => ['Content-Type' => 'application/json; charset=utf-8'],
            'body' => $json,
        ];
    }
}

