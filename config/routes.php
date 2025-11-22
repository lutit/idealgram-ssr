<?php

declare(strict_types=1);

use App\Controller\HomeController;
use App\Controller\ErrorController;
use App\Controller\PrivacyController;

return [
    'GET' => [
        '/' => [HomeController::class, 'index'],
        '/privacy' => [PrivacyController::class, 'index'],
        // Optional demo routes to view error pages directly
        '/forbidden' => [ErrorController::class, 'forbidden'],
        '/error' => [ErrorController::class, 'serverError'],
    ],
];
