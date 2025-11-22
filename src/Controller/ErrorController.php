<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\I18n;
use App\Core\View;

final class ErrorController
{
    /**
     * @return array{status:int,body:string}
     */
    public function notFound(): array
    {
        return [
            'status' => 404,
            'body' => View::render('errors/404', [
                'title' => I18n::t('error_404_title'),
                'lang' => I18n::getLocale(),
            ]),
        ];
    }

    /**
     * @return array{status:int,body:string}
     */
    public function forbidden(): array
    {
        return [
            'status' => 403,
            'body' => View::render('errors/403', [
                'title' => I18n::t('error_403_title'),
                'lang' => I18n::getLocale(),
            ]),
        ];
    }

    /**
     * @return array{status:int,body:string}
     */
    public function serverError(): array
    {
        return [
            'status' => 500,
            'body' => View::render('errors/500', [
                'title' => I18n::t('error_500_title'),
                'lang' => I18n::getLocale(),
            ]),
        ];
    }
}

