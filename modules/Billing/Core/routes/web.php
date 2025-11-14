<?php
use Modules\Billing\Core\Http\Controllers\HomeController;
use Ivi\Http\JsonResponse;

/** @var \Ivi\Core\Router\Router $router */
$router->get('/billing', [HomeController::class, 'index']);
$router->get('/billing/ping', fn() => new JsonResponse([
    'ok' => true,
    'module' => 'Billing/Core'
]));