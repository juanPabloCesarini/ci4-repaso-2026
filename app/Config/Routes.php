<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/productos/show/(:num)', 'Productos::show/$1');
$routes->get('/productos/(:alpha)/(:num)', 'Productos::cat/$1/$2');

$routes->group('admin', function($routes){
    $routes->get('productos/create', 'Productos::create');
});