<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use PDOException;

final class Database
{
    private static ?PDO $pdo = null;

    public static function getConnection(): PDO
    {
        if (self::$pdo instanceof PDO) {
            return self::$pdo;
        }

        /** @var array{dsn:string,user:string,password:string} $config */
        $config = require dirname(__DIR__, 2) . '/config/database.php';

        $dsn = $config['dsn'] ?? '';
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';

        try {
            $pdo = new PDO(
                $dsn,
                $user,
                $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        } catch (PDOException $e) {
            throw new \RuntimeException('Database connection failed', 0, $e);
        }

        self::$pdo = $pdo;

        return $pdo;
    }
}

