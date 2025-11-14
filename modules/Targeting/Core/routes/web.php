<?php
use Modules\Targeting\Core\Http\Controllers\HomeController;
use Ivi\Http\JsonResponse;

/** @var \Ivi\Core\Router\Router $router */
$router->get('/targeting', [HomeController::class, 'index']);
$router->get('/targeting/ping', fn() => new JsonResponse([
    'ok' => true,
    'module' => 'Targeting/Core'
]));