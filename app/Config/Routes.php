<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/addTree', 'Tree::addTree');
$routes->post('arbol/register', 'Tree::create');
$routes->get('/compra','Compra::compra');
$routes->post('compra/register','Compra::create');
$routes->get('/trees','List::index');