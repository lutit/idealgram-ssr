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

use App\Core\Router;

$router = new Router(require dirname(__DIR__) . '/config/routes.php');

$response = $router->dispatch($_SERVER['REQUEST_URI'] ?? '/');

http_response_code($response['status']);
foreach ($response['headers'] as $name => $value) {
    header($name . ': ' . $value);
}

echo $response['body'];

