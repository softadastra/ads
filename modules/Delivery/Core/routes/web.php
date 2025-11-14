<?php
use Modules\Delivery\Core\Http\Controllers\HomeController;
use Ivi\Http\JsonResponse;

/** @var \Ivi\Core\Router\Router $router */
$router->get('/delivery', [HomeController::class, 'index']);
$router->get('/delivery/ping', fn() => new JsonResponse([
    'ok' => true,
    'module' => 'Delivery/Core'
]));