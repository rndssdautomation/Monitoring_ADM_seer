<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Monitor::index');
$routes->get('/all', 'Alldata::index');
$routes->get('/task', 'Task::task');
// $routes->match(['get','post'],'/get_api_list_task',   'Monitor::get_api_list_task');
$routes->match(['get','post'],'/get_api_data_delivery_success',   'Monitor::get_api_data_delivery_success');
$routes->match(['get','post'],'/get_api_data_delivery_failed',   'Monitor::get_api_data_delivery_failed');
<<<<<<< HEAD
<<<<<<< HEAD
// $routes->match(['get','post'],'/get_api_data_history_task',   'Monitor::get_api_data_history_task');
// $routes->match(['get','post'],'/get_api_data_status_robot',   'Monitor::get_api_data_status_robot');
// $routes->match(['get','post'],'/get_api_data_queue_robot1',   'Monitor::get_api_data_queue_robot1');
// $routes->match(['get','post'],'/get_api_data_queue_robot2',   'Monitor::get_api_data_queue_robot2');
// $routes->match(['get','post'],'/get_api_data_queue_robot_all',   'Monitor::get_api_data_queue_robot_all');
=======
=======
>>>>>>> parent of e449e9d (1 hit)
$routes->match(['get','post'],'/get_api_data_history_task',   'Monitor::get_api_data_history_task');
$routes->match(['get','post'],'/get_api_data_status_robot',   'Monitor::get_api_data_status_robot');
$routes->match(['get','post'],'/get_api_data_queue_robot1',   'Monitor::get_api_data_queue_robot1');
$routes->match(['get','post'],'/get_api_data_queue_robot2',   'Monitor::get_api_data_queue_robot2');
<<<<<<< HEAD
$routes->match(['get','post'],'/get_api_data_queue_robot_all',   'Monitor::get_api_data_queue_robot_all');
$routes->match(['get','post'],'/get_api_data_queue_robot',   'Monitor::get_api_data_queue_robot');
>>>>>>> 9a425832fecd5004b596e564386157809014bc94
=======
$routes->match(['get','post'],'/get_api_data_queue_robot_all',   'Monitor::get_api_data_queue_robot_all');
>>>>>>> parent of e449e9d (1 hit)
