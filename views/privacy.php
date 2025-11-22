<?php

use App\Core\I18n;
?>
<section class="ig-section ig-section--legal">
    <div class="ig-section__header">
        <h1 class="ig-section__title"><?= htmlspecialchars(I18n::t('privacy_title'), ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="ig-section__subtitle"><?= htmlspecialchars(I18n::t('privacy_intro'), ENT_QUOTES, 'UTF-8') ?></p>
    </div>
    <div class="ig-legal">
        <section class="ig-legal__block">
            <h2 class="ig-legal__heading"><?= htmlspecialchars(I18n::t('privacy_what_title'), ENT_QUOTES, 'UTF-8') ?></h2>
            <p class="ig-legal__text"><?= htmlspecialchars(I18n::t('privacy_what_intro'), ENT_QUOTES, 'UTF-8') ?></p>
            <ul class="ig-legal__list">
                <li><strong><?= htmlspecialchars(I18n::t('privacy_field_id_title'), ENT_QUOTES, 'UTF-8') ?>.</strong> <?= htmlspecialchars(I18n::t('privacy_field_id_desc'), ENT_QUOTES, 'UTF-8') ?></li>
                <li><strong><?= htmlspecialchars(I18n::t('privacy_field_username_title'), ENT_QUOTES, 'UTF-8') ?>.</strong> <?= htmlspecialchars(I18n::t('privacy_field_username_desc'), ENT_QUOTES, 'UTF-8') ?></li>
                <li><strong><?= htmlspecialchars(I18n::t('privacy_field_meta_title'), ENT_QUOTES, 'UTF-8') ?>.</strong> <?= htmlspecialchars(I18n::t('privacy_field_meta_desc'), ENT_QUOTES, 'UTF-8') ?></li>
            </ul>
            <p class="ig-legal__note"><?= htmlspecialchars(I18n::t('privacy_what_note'), ENT_QUOTES, 'UTF-8') ?></p>
        </section>

        <section class="ig-legal__block">
            <h2 class="ig-legal__heading"><?= htmlspecialchars(I18n::t('privacy_consent_title'), ENT_QUOTES, 'UTF-8') ?></h2>
            <p class="ig-legal__text"><?= htmlspecialchars(I18n::t('privacy_consent_intro'), ENT_QUOTES, 'UTF-8') ?></p>
            <ul class="ig-legal__list">
                <li><?= htmlspecialchars(I18n::t('privacy_consent_point_1'), ENT_QUOTES, 'UTF-8') ?></li>
                <li><?= htmlspecialchars(I18n::t('privacy_consent_point_2'), ENT_QUOTES, 'UTF-8') ?></li>
                <li><?= htmlspecialchars(I18n::t('privacy_consent_point_3'), ENT_QUOTES, 'UTF-8') ?></li>
            </ul>
        </section>

        <section class="ig-legal__block">
            <h2 class="ig-legal__heading"><?= htmlspecialchars(I18n::t('privacy_why_title'), ENT_QUOTES, 'UTF-8') ?></h2>
            <p class="ig-legal__text"><?= htmlspecialchars(I18n::t('privacy_why_intro'), ENT_QUOTES, 'UTF-8') ?></p>
            <ul class="ig-legal__list">
                <li><?= htmlspecialchars(I18n::t('privacy_why_point_1'), ENT_QUOTES, 'UTF-8') ?></li>
                <li><?= htmlspecialchars(I18n::t('privacy_why_point_2'), ENT_QUOTES, 'UTF-8') ?></li>
                <li><?= htmlspecialchars(I18n::t('privacy_why_point_3'), ENT_QUOTES, 'UTF-8') ?></li>
            </ul>
        </section>

        <section class="ig-legal__block">
            <h2 class="ig-legal__heading"><?= htmlspecialchars(I18n::t('privacy_optout_title'), ENT_QUOTES, 'UTF-8') ?></h2>
            <p class="ig-legal__text"><?= htmlspecialchars(I18n::t('privacy_optout_intro'), ENT_QUOTES, 'UTF-8') ?></p>
            <ul class="ig-legal__list">
                <li><?= htmlspecialchars(I18n::t('privacy_optout_point_1'), ENT_QUOTES, 'UTF-8') ?></li>
                <li><?= htmlspecialchars(I18n::t('privacy_optout_point_2'), ENT_QUOTES, 'UTF-8') ?></li>
            </ul>
            <p class="ig-legal__note"><?= htmlspecialchars(I18n::t('privacy_optout_note'), ENT_QUOTES, 'UTF-8') ?></p>
        </section>

        <section class="ig-legal__block">
            <h2 class="ig-legal__heading"><?= htmlspecialchars(I18n::t('privacy_storage_title'), ENT_QUOTES, 'UTF-8') ?></h2>
            <p class="ig-legal__text"><?= htmlspecialchars(I18n::t('privacy_storage_intro'), ENT_QUOTES, 'UTF-8') ?></p>
        </section>
    </div>
</section>

