<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin/supir', 'Admin\Admins::supir');
$routes->get('/mobil', 'User\User::mobil');
$routes->get('/mobil/(:segment)', 'User\User::detail_mobil/$1');
$routes->get('/admin/haha', 'Admin\Admins::haha');
