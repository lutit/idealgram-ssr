<?php
/** @var string $title */
/** @var string $content */
/** @var string|null $lang */

use App\Core\I18n;

$currentLang = $lang ?? I18n::getLocale();
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
?>
<!doctype html>
<html lang="<?= htmlspecialchars($currentLang, ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($title ?? I18n::t('site_name'), ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon.png?v=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="ig-header no-select">
    <div class="ig-container ig-nav">
        <a href="/" class="ig-nav__brand">
            <span class="ig-logo-mark-wrap">
                <img src="/assets/images/logo_idealgram.png" alt="IdealGram logo" class="ig-logo-mark">
            </span>
            <span class="ig-nav__text">
                <span class="ig-nav__title"><?= htmlspecialchars(I18n::t('site_name'), ENT_QUOTES, 'UTF-8') ?></span>
                <span class="ig-nav__subtitle"><?= htmlspecialchars(I18n::t('nav_tagline'), ENT_QUOTES, 'UTF-8') ?></span>
            </span>
        </a>
        <div class="ig-nav__actions">
            <button class="ig-nav__pill ig-nav__pill--icon" id="ig-theme-toggle" type="button" aria-label="Toggle theme">
                <span class="material-icons-round ig-nav__icon" aria-hidden="true">dark_mode</span>
            </button>
            <div class="ig-nav__locale" aria-label="Language">
                <?php foreach (['en' => 'EN', 'ru' => 'RU', 'uz' => 'UZ'] as $code => $label): ?>
                    <?php
                    $href = htmlspecialchars($path . '?lang=' . $code, ENT_QUOTES, 'UTF-8');
                    $isActive = $code === $currentLang;
                    ?>
                    <a href="<?= $href ?>" class="ig-lang-pill<?= $isActive ? ' ig-lang-pill--active' : '' ?>">
                        <?= $label ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <a href="https://t.me/Ideal_Gram" class="ig-nav__pill" target="_blank" rel="noreferrer">
                <span class="material-icons-round ig-nav__icon" aria-hidden="true">send</span>
                <span class="ig-nav__pill-label">@Ideal_Gram</span>
            </a>
        </div>
    </div>
</header>
<main class="ig-main ig-container">
    <?= $content ?>
</main>
<script src="/assets/js/app.js"></script>
</body>
</html>
