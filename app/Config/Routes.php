<?php
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\Products;
use App\Controllers\ProductsBackend;
use App\Controllers\CategoriesBackend;
use App\Controllers\Users;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);

$routes->get('tienda/products/all', [Products::class, 'showAll']);

$routes->get('tienda/products/category/(:segment)', [Products::class, 'showAll']);

$routes->get('tienda/products/(:segment)', [Products::class, 'showProduct']);

$routes->get('admin', [Users::class, 'loginForm']);

$routes->post('login', [Users::class, 'checkUser']);

$routes->get('session', [Users::class, 'closeSession']);

$routes->group('backend', function($routes) {
    $routes->get('', [ProductsBackend::class, 'showAll']);

    $routes->get('tienda/new', [ProductsBackend::class, 'new']);
    $routes->post('tienda/create', [ProductsBackend::class, 'create']);

    $routes->get('tienda/update/(:num)', [ProductsBackend::class, 'update']);
    $routes->post('tienda/updatedItem/(:num)', [ProductsBackend::class, 'updatedItem']);

    $routes->get('tienda/del/(:num)', [ProductsBackend::class, 'delete']);

    $routes->get('categorias', [CategoriesBackend::class, 'showAll']);

    $routes->get('categorias/new', [CategoriesBackend::class, 'newCat']);
    $routes->post('categorias/create', [CategoriesBackend::class, 'createCat']);
    
    $routes->get('categorias/edit/(:num)', [CategoriesBackend::class, 'editCat']);
    $routes->post('categorias/update/(:num)', [CategoriesBackend::class, 'updatedCat']);
    
    $routes->get('categorias/delete/(:num)', [CategoriesBackend::class, 'deleteCat']);

    $routes->get('tienda/products/(:segment)', [ProductsBackend::class, 'showProduct']);
});