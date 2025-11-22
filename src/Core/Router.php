<?php

declare(strict_types=1);

namespace App\Core;

use App\Controller\ErrorController;

final class Router
{
    /**
     * @var array<string, array<string, array{0: class-string, 1: string}>>
     */
    private array $routes;

    /**
     * @param array<string, array<string, array{0: class-string, 1: string}>> $routes
     */
    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * @param string $uri
     * @return array{status:int,headers:array<string,string>,body:string}
     */
    public function dispatch(string $uri): array
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $path = parse_url($uri, PHP_URL_PATH) ?: '/';

        $controllerSpec = $this->routes[$method][$path] ?? null;

        if ($controllerSpec === null) {
            $error = new ErrorController();
            $result = $error->notFound();

            return [
                'status' => $result['status'],
                'headers' => ['Content-Type' => 'text/html; charset=utf-8'],
                'body' => $result['body'],
            ];
        }

        [$class, $action] = $controllerSpec;
        $controller = new $class();

        $body = $controller->$action();

        if (is_array($body) && isset($body['status'], $body['body'])) {
            return [
                'status' => (int) $body['status'],
                'headers' => ['Content-Type' => 'text/html; charset=utf-8'],
                'body' => (string) $body['body'],
            ];
        }

        return [
            'status' => 200,
            'headers' => ['Content-Type' => 'text/html; charset=utf-8'],
            'body' => $body,
        ];
    }
}
