<?php

declare(strict_types=1);

use App\Controller\HomeController;
use App\Controller\ErrorController;
use App\Controller\PrivacyController;
use App\Controller\ApiController;

return [
    'GET' => [
        '/' => [HomeController::class, 'index'],
        '/privacy' => [PrivacyController::class, 'index'],
        '/api/update' => [ApiController::class, 'update'],
        '/api/community' => [ApiController::class, 'listCommunity'],
        // Optional demo routes to view error pages directly
        '/forbidden' => [ErrorController::class, 'forbidden'],
        '/error' => [ErrorController::class, 'serverError'],
    ],
    'POST' => [
        '/api/collect' => [ApiController::class, 'collect'],
        '/api/community' => [ApiController::class, 'createCommunity'],
    ],
];
