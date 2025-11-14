<?php
use Modules\Tracking\Core\Http\Controllers\HomeController;
use Ivi\Http\JsonResponse;

/** @var \Ivi\Core\Router\Router $router */
$router->get('/tracking', [HomeController::class, 'index']);
$router->get('/tracking/ping', fn() => new JsonResponse([
    'ok' => true,
    'module' => 'Tracking/Core'
]));