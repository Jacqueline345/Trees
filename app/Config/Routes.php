<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup','User::signup');
$routes->get('/trees','TreeList::trees');
$routes->get('/addTree', 'Tree::addTree');
$routes->get('/compra','Compra::compra');
$routes->get('/treeDetails','TreeDetails::treeDetails');
$routes->post('user/register','User::create');
$routes->post('compra/register','Compra::create');
$routes->post('arbol/register', 'Tree::create');
