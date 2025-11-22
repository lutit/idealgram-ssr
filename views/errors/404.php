<?php

use App\Core\I18n;
?>
<section class="ig-error">
    <div class="ig-error__card ig-error__card--404">
        <div class="ig-error__code-row">
            <span class="ig-error__badge">404</span>
            <span class="ig-error__chip">
                <span class="material-icons-round ig-error__chip-icon" aria-hidden="true">travel_explore</span>
                <span>Lost in chats</span>
            </span>
        </div>
        <h1 class="ig-error__title">
            <?= htmlspecialchars(I18n::t('error_404_title'), ENT_QUOTES, 'UTF-8') ?>
        </h1>
        <p class="ig-error__subtitle">
            <?= htmlspecialchars(I18n::t('error_404_message'), ENT_QUOTES, 'UTF-8') ?>
        </p>
        <div class="ig-error__actions">
            <a href="/" class="ig-button ig-button--primary">
                <span class="material-icons-round ig-button__icon" aria-hidden="true">home</span>
                <span><?= htmlspecialchars(I18n::t('error_back_home'), ENT_QUOTES, 'UTF-8') ?></span>
            </a>
            <a href="https://t.me/Ideal_Gram" class="ig-button ig-button--ghost" target="_blank" rel="noreferrer">
                <span class="material-icons-round ig-button__icon" aria-hidden="true">send</span>
                <span>@Ideal_Gram</span>
            </a>
        </div>
    </div>
</section>

