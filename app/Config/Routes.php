<?php

use CodeIgniter\Router\RouteCollection;


$routes->setAutoRoute(true);
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Inicio::index');
