<?php
use Modules\Creative\Core\Http\Controllers\HomeController;
use Ivi\Http\JsonResponse;

/** @var \Ivi\Core\Router\Router $router */
$router->get('/creative', [HomeController::class, 'index']);
$router->get('/creative/ping', fn() => new JsonResponse([
    'ok' => true,
    'module' => 'Creative/Core'
]));