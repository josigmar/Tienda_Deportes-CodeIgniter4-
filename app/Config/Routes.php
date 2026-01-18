<?php
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\Products;
use App\Controllers\Users;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);

$routes->get('admin', [Users::class, 'loginForm']);

$routes->post('login', [Users::class, 'checkUser']);

$routes->get('session', [Users::class, 'closeSession']);

$routes->get('tienda/products/all', [Products::class, 'showAll']);

$routes->get('tienda/products/category/(:segment)', [Products::class, 'showAll']);

$routes->get('tienda/products/(:segment)', [Products::class, 'showProduct']);