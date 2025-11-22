<?php

declare(strict_types=1);

namespace App\Core;

final class I18n
{
    private const FALLBACK_LOCALE = 'en';

    /**
     * @var array<string, array<string, string>>
     */
    private static array $translations = [];

    private static string $locale = self::FALLBACK_LOCALE;

    public static function setLocale(string $locale): void
    {
        $locale = strtolower($locale);

        if (self::$translations === []) {
            /** @var array<string, array<string, string>> $map */
            $map = require dirname(__DIR__, 2) . '/config/i18n.php';
            self::$translations = $map;
        }

        if (!isset(self::$translations[$locale])) {
            $locale = self::FALLBACK_LOCALE;
        }

        self::$locale = $locale;
    }

    public static function getLocale(): string
    {
        return self::$locale;
    }

    /**
     * @return string[]
     */
    public static function getAvailableLocales(): array
    {
        return array_keys(self::$translations ?: require dirname(__DIR__, 2) . '/config/i18n.php');
    }

    public static function t(string $key): string
    {
        $locale = self::$locale;

        if (isset(self::$translations[$locale][$key])) {
            return self::$translations[$locale][$key];
        }

        if (isset(self::$translations[self::FALLBACK_LOCALE][$key])) {
            return self::$translations[self::FALLBACK_LOCALE][$key];
        }

        return $key;
    }
}

