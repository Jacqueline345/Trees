<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup','User::signup');
$routes->post('user/register','User::create');
$routes->get('/addTree', 'Tree::addTree');
$routes->post('arbol/register', 'Tree::create');
$routes->get('/compra','Compra::compra');
$routes->post('compra/register','Compra::create');
$routes->get('/trees','List::index');
$routes->get('/treeDetails','TreeDetails::index');
