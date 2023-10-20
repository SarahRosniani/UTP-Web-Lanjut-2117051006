<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\UserController;
use App\Models\UserModel;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/profile', [UserController::class, 'profile']);
$routes->get('/create', [UserController::class, 'create']);
$routes->post('/store', [UserController::class, 'store']);
