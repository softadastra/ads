<?php
use Modules\Promotion\Core\Http\Controllers\HomeController;
use Ivi\Http\JsonResponse;

/** @var \Ivi\Core\Router\Router $router */
$router->get('/promotion', [HomeController::class, 'index']);
$router->get('/promotion/ping', fn() => new JsonResponse([
    'ok' => true,
    'module' => 'Promotion/Core'
]));