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
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="ig-header">
    <div class="ig-container">
        <div class="ig-logo">Idealgram</div>
    </div>
</header>
<main class="ig-main ig-container">
    <?= $content ?>
</main>
<script src="/assets/js/app.js"></script>
</body>
</html>

