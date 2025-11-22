<?php

declare(strict_types=1);

// Basic front controller for Idealgram

// Simple autoloader for src classes (App\...)
spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';
    $baseDir = dirname(__DIR__) . '/src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (is_file($file)) {
        require $file;
    }
});

use App\Controller\ErrorController;
use App\Core\I18n;
use App\Core\Router;
use Throwable;

// Locale detection: query ?lang=, then cookie, fallback to en.
$requestedLocale = $_GET['lang'] ?? null;
$cookieLocale = $_COOKIE['ig_lang'] ?? null;
$locale = $requestedLocale ?: $cookieLocale ?: 'en';

I18n::setLocale($locale);

// Persist normalized locale in cookie for future requests.
if ($cookieLocale !== I18n::getLocale()) {
    setcookie('ig_lang', I18n::getLocale(), time() + 365 * 24 * 60 * 60, '/');
}

$router = new Router(require dirname(__DIR__) . '/config/routes.php');

try {
    $response = $router->dispatch($_SERVER['REQUEST_URI'] ?? '/');
} catch (Throwable $e) {
    $error = new ErrorController();
    $result = $error->serverError();
    $response = [
        'status' => $result['status'] ?? 500,
        'headers' => ['Content-Type' => 'text/html; charset=utf-8'],
        'body' => $result['body'] ?? '<h1>500 Internal Server Error</h1>',
    ];
}

http_response_code($response['status']);
foreach ($response['headers'] as $name => $value) {
    header($name . ': ' . $value);
}

echo $response['body'];
