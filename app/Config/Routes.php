<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Monitor::index');
$routes->get('/all', 'Alldata::index');
$routes->get('/task', 'Task::task');
$routes->match(['get','post'],'/get_api_data_delivery',   'Monitor::get_api_data_delivery');
$routes->match(['get','post'],'/get_api_data_status_robot',   'Monitor::get_api_data_status_robot');