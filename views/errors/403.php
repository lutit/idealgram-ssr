<?php

use App\Core\I18n;
?>
<section class="ig-error">
    <div class="ig-error__card ig-error__card--403">
        <div class="ig-error__code-row">
            <span class="ig-error__badge">403</span>
            <span class="ig-error__chip">
                <span class="material-icons-round ig-error__chip-icon" aria-hidden="true">lock</span>
                <span>Access is gated</span>
            </span>
        </div>
        <h1 class="ig-error__title">
            <?= htmlspecialchars(I18n::t('error_403_title'), ENT_QUOTES, 'UTF-8') ?>
        </h1>
        <p class="ig-error__subtitle">
            <?= htmlspecialchars(I18n::t('error_403_message'), ENT_QUOTES, 'UTF-8') ?>
        </p>
        <div class="ig-error__actions">
            <a href="/" class="ig-button ig-button--ghost">
                <span class="material-icons-round ig-button__icon" aria-hidden="true">arrow_back</span>
                <span><?= htmlspecialchars(I18n::t('error_back_home'), ENT_QUOTES, 'UTF-8') ?></span>
            </a>
        </div>
    </div>
</section>

