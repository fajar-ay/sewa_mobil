<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin/supir', 'Admin\Admins::supir');
$routes->get('/admin/haha', 'Admin\Admins::haha');
