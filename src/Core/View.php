<?php

declare(strict_types=1);

namespace App\Core;

final class View
{
    /**
     * @param string $template
     * @param array<string,mixed> $params
     */
    public static function render(string $template, array $params = []): string
    {
        $viewPath = dirname(__DIR__, 2) . '/views/' . $template . '.php';
        $layoutPath = dirname(__DIR__, 2) . '/views/layout.php';

        if (!is_file($viewPath)) {
            return '<h1>View not found</h1>';
        }

        extract($params, EXTR_SKIP);

        ob_start();
        require $viewPath;
        $content = ob_get_clean() ?: '';

        if (is_file($layoutPath)) {
            ob_start();
            require $layoutPath;
            return ob_get_clean() ?: $content;
        }

        return $content;
    }
}

