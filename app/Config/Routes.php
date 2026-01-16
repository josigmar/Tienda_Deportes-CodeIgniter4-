<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\Products;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('tienda/products/all', [Products::class, 'showAll']);
$routes->get('tienda/products/(:segment)', [Products::class, 'showProduct']);