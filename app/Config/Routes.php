<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\UserController;
use App\Controllers\KelasController;
use App\Models\UserModel;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('/user', [UserController::class, 'index']);
$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);
$routes->get('/user/(:any)', [UserController::class, 'show']);



$routes->get('/kls/create', [KelasController::class, 'create']);
$routes->post('/kls/store', [KelasController::class, 'store']);
$routes->get('/kls', [KelasController::class, 'index']);
$routes->get('/kls/(:any)/edit', [KelasController::class, 'edit']);
$routes->put('/kls/(:any)', [KelasController::class, 'update']);
$routes->delete('/kls/(:any)', [KelasController::class, 'destroy']);
$routes->get('/kls/(:any)', [KelasController::class, 'show']);