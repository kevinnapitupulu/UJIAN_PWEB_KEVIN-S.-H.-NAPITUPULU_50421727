<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ujian', 'Ujian::index');
$routes->get('/add_data_ujian', 'Ujian::add_data_ujian');
$routes->post('/proses_add_ujian', 'Ujian::proses_add_ujian');
$routes->get('/edit_data_ujian/(:any)', 'Ujian::edit_data_ujian/$1');
$routes->post('/proses_edit_ujian', 'Ujian::proses_edit_ujian');
$routes->get('/delete_data_ujian/(:any)', 'Ujian::delete_data_ujian/$1');
