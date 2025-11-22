<?php
/** @var string $title */

use App\Core\I18n;
?>
<section class="ig-hero" id="top">
    <div class="ig-hero__grid">
        <div class="ig-hero__primary">
            <div class="ig-pill ig-pill--accent">
                <span class="material-icons-round ig-pill__icon" aria-hidden="true">auto_awesome</span>
                <span><?= htmlspecialchars(I18n::t('hero_pill'), ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <h1 class="ig-hero__title">
                <?= htmlspecialchars(I18n::t('hero_title'), ENT_QUOTES, 'UTF-8') ?>
            </h1>
            <p class="ig-hero__subtitle">
                <?= htmlspecialchars(I18n::t('hero_description'), ENT_QUOTES, 'UTF-8') ?>
            </p>
            <div class="ig-hero__actions">
                <a href="https://t.me/Ideal_Gram" class="ig-button ig-button--primary" target="_blank" rel="noreferrer">
                    <span class="material-icons-round ig-button__icon" aria-hidden="true">arrow_outward</span>
                    <span><?= htmlspecialchars(I18n::t('hero_cta_primary'), ENT_QUOTES, 'UTF-8') ?></span>
                </a>
                <button class="ig-button ig-button--ghost" id="ig-cta" type="button">
                    <span class="material-icons-round ig-button__icon" aria-hidden="true">bolt</span>
                    <span><?= htmlspecialchars(I18n::t('hero_cta_secondary'), ENT_QUOTES, 'UTF-8') ?></span>
                </button>
            </div>
            <ul class="ig-hero__highlights">
                <li><?= htmlspecialchars(I18n::t('hero_highlight_1'), ENT_QUOTES, 'UTF-8') ?></li>
                <li><?= htmlspecialchars(I18n::t('hero_highlight_2'), ENT_QUOTES, 'UTF-8') ?></li>
                <li><?= htmlspecialchars(I18n::t('hero_highlight_3'), ENT_QUOTES, 'UTF-8') ?></li>
            </ul>
        </div>
        <div class="ig-hero__visual" aria-hidden="true">
            <div class="ig-device">
                <div class="ig-device__status">
                    <span class="ig-badge ig-badge--accent">
                        <span class="material-icons-round ig-badge__icon">psychology</span>
                        Shamala mode
                    </span>
                    <span class="ig-badge">
                        <span class="material-icons-round ig-badge__icon">smart_toy</span>
                        UzbekGPT inside
                    </span>
                </div>
                <div class="ig-device__screen">
                    <div class="ig-device__topbar">
                        <span class="ig-device__title"><?= htmlspecialchars(I18n::t('site_name'), ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="ig-device__dot"></span>
                    </div>
                    <div class="ig-device__chat ig-device__chat--legend">
                        <span class="ig-device__avatar">IG</span>
                        <div class="ig-device__text">
                            <span class="ig-device__label"><?= htmlspecialchars(I18n::t('device_legends_title'), ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="ig-device__sub"><?= htmlspecialchars(I18n::t('device_legends_sub'), ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                        <span class="material-icons-round ig-device__chevron">north_east</span>
                    </div>
                    <div class="ig-device__chat ig-device__chat--shamala">
                        <span class="ig-device__avatar ig-device__avatar--accent">SZ</span>
                        <div class="ig-device__text">
                            <span class="ig-device__label"><?= htmlspecialchars(I18n::t('device_shamala_title'), ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="ig-device__sub"><?= htmlspecialchars(I18n::t('device_shamala_sub'), ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                        <span class="material-icons-round ig-device__chevron">auto_awesome</span>
                    </div>
                    <div class="ig-device__chat ig-device__chat--calm">
                        <span class="ig-device__avatar ig-device__avatar--outline">TG</span>
                        <div class="ig-device__text">
                            <span class="ig-device__label"><?= htmlspecialchars(I18n::t('device_calm_title'), ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="ig-device__sub"><?= htmlspecialchars(I18n::t('device_calm_sub'), ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                        <span class="material-icons-round ig-device__chevron">check_circle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ig-section">
    <div class="ig-section__header">
        <h2 class="ig-section__title"><?= htmlspecialchars(I18n::t('section_why_title'), ENT_QUOTES, 'UTF-8') ?></h2>
        <p class="ig-section__subtitle"><?= htmlspecialchars(I18n::t('section_why_subtitle'), ENT_QUOTES, 'UTF-8') ?></p>
    </div>
    <div class="ig-section__grid">
        <article class="ig-feature">
            <span class="material-icons-round ig-feature__icon" aria-hidden="true">psychology</span>
            <h3 class="ig-feature__title"><?= htmlspecialchars(I18n::t('feature_ai_title'), ENT_QUOTES, 'UTF-8') ?></h3>
            <p class="ig-feature__text"><?= htmlspecialchars(I18n::t('feature_ai_text'), ENT_QUOTES, 'UTF-8') ?></p>
        </article>
        <article class="ig-feature">
            <span class="material-icons-round ig-feature__icon" aria-hidden="true">groups</span>
            <h3 class="ig-feature__title"><?= htmlspecialchars(I18n::t('feature_community_title'), ENT_QUOTES, 'UTF-8') ?></h3>
            <p class="ig-feature__text"><?= htmlspecialchars(I18n::t('feature_community_text'), ENT_QUOTES, 'UTF-8') ?></p>
        </article>
        <article class="ig-feature">
            <span class="material-icons-round ig-feature__icon" aria-hidden="true">verified_user</span>
            <h3 class="ig-feature__title"><?= htmlspecialchars(I18n::t('feature_privacy_title'), ENT_QUOTES, 'UTF-8') ?></h3>
            <p class="ig-feature__text"><?= htmlspecialchars(I18n::t('feature_privacy_text'), ENT_QUOTES, 'UTF-8') ?></p>
        </article>
    </div>
</section>

<section class="ig-section ig-section--subtle">
    <div class="ig-section__footer">
        <div class="ig-section__footer-main">
            <h2 class="ig-section__title"><?= htmlspecialchars(I18n::t('footer_title'), ENT_QUOTES, 'UTF-8') ?></h2>
            <p class="ig-section__subtitle"><?= htmlspecialchars(I18n::t('footer_subtitle'), ENT_QUOTES, 'UTF-8') ?></p>
        </div>
        <div class="ig-section__footer-cta">
            <a href="https://t.me/Ideal_Gram" class="ig-link-underline" target="_blank" rel="noreferrer">
                <?= htmlspecialchars(I18n::t('footer_link'), ENT_QUOTES, 'UTF-8') ?>
                <span class="material-icons-round ig-link-underline__icon" aria-hidden="true">open_in_new</span>
            </a>
        </div>
    </div>
</section>
