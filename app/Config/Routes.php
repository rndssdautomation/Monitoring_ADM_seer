<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Monitor::index');
$routes->get('/task', 'Task::task');
$routes->match(['get','post'],'/get_api_list_task',   'Monitor::get_api_list_task');
$routes->match(['get','post'],'/get_api_data_delivery_success',   'Monitor::get_api_data_delivery_success');
$routes->match(['get','post'],'/get_api_data_delivery_failed',   'Monitor::get_api_data_delivery_failed');