<?php

declare(strict_types=1);

namespace App\Core;

final class Logger
{
    private const CHANNEL_APP = 'app';

    public static function error(string $message, array $context = []): void
    {
        self::write(self::CHANNEL_APP, 'ERROR', $message, $context);
    }

    public static function info(string $message, array $context = []): void
    {
        self::write(self::CHANNEL_APP, 'INFO', $message, $context);
    }

    /**
     * @param array<string,mixed> $context
     */
    private static function write(string $channel, string $level, string $message, array $context): void
    {
        $requestMeta = [
            'ip' => $_SERVER['REMOTE_ADDR'] ?? null,
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
            'method' => $_SERVER['REQUEST_METHOD'] ?? null,
            'uri' => $_SERVER['REQUEST_URI'] ?? null,
        ];

        $requestMeta = array_filter(
            $requestMeta,
            static fn ($value) => $value !== null && $value !== ''
        );

        if ($requestMeta !== []) {
            $context['request'] = $requestMeta;
        }

        $baseDir = dirname(__DIR__, 2);
        $logDir = $baseDir . '/var/log';
        $file = $logDir . '/' . $channel . '.log';

        if (!is_dir($logDir)) {
            @mkdir($logDir, 0777, true);
        }

        $timestamp = (new \DateTimeImmutable())->format('Y-m-d H:i:s');

        $line = sprintf(
            "[%s] %s.%s: %s %s\n",
            $timestamp,
            $channel,
            $level,
            $message,
            $context ? json_encode($context, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) : ''
        );

        @file_put_contents($file, $line, FILE_APPEND);
    }
}
