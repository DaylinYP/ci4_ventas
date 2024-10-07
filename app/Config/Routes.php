<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('productos','Productos::index');
$routes->post('agregarProducto','Productos::agregarProducto');
$routes->get('verCarrito','Productos::verCarrito');
$routes->post('modificarCarrito/(:num)','Productos::modificarCarrito/$1');
$routes->get('eliminarProducto/(:num)','Productos::eliminarProducto/$1');

