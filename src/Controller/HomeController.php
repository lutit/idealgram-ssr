<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\I18n;
use App\Core\View;

final class HomeController
{
    public function index(): string
    {
        return View::render('home', [
            'title' => I18n::t('site_name'),
            'lang' => I18n::getLocale(),
        ]);
    }
}
