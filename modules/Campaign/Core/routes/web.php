<?php
use Modules\Campaign\Core\Http\Controllers\HomeController;
use Ivi\Http\JsonResponse;

/** @var \Ivi\Core\Router\Router $router */
$router->get('/campaign', [HomeController::class, 'index']);
$router->get('/campaign/ping', fn() => new JsonResponse([
    'ok' => true,
    'module' => 'Campaign/Core'
]));