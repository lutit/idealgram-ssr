<?php
/** @var string $title */
/** @var string $content */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($title ?? 'Idealgram', ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="ig-header">
    <div class="ig-container ig-nav">
        <a href="/" class="ig-nav__brand">
            <span class="ig-logo-mark-wrap">
                <img src="/assets/images/logo_idealgram.png" alt="IdealGram logo" class="ig-logo-mark">
            </span>
            <span class="ig-nav__text">
                <span class="ig-nav__title">IdealGram</span>
                <span class="ig-nav__subtitle">Telegram, но по‑нашему</span>
            </span>
        </a>
        <div class="ig-nav__actions">
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
