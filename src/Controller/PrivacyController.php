<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\I18n;
use App\Core\View;

final class PrivacyController
{
    public function index(): string
    {
        return View::render('privacy', [
            'title' => I18n::t('privacy_title'),
            'lang' => I18n::getLocale(),
        ]);
    }
}

