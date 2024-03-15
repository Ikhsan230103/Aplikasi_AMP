<?php

use App\Controllers\karyawanController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// app/Config/Routes.php

$routes->get('/karyawan', 'karyawanController::index');

$routes->get('/create', 'karyawanController::addNew');
$routes->post('/addNew_save', 'karyawanController::addNew_save');
$routes->get('edit/(:num)', 'karyawanController::edit/$1');
$routes->post('/update', 'karyawanController::update');
$routes->get('/delete/(:num)', 'karyawanController::delete/$1');


$routes->get('/olahraga', 'olahragaController::index');

$routes->get('olahraga/create', 'olahragaController::addNew');
$routes->post('olahraga/addNew_save', 'olahragaController::addNew_save');
$routes->get('olahraga/edit/(:num)', 'olahragaController::edit/$1');
$routes->post('olahraga/update', 'olahragaController::update');
$routes->get('olahraga/delete/(:num)', 'olahragaController::delete/$1');


$routes->get('/makanan', 'makananController::index');

$routes->get('makanan/create', 'makananController::addNew');
$routes->post('makanan/addNew_save', 'makananController::addNew_save');
$routes->get('makanan/edit/(:num)', 'makananController::edit/$1');
$routes->post('makanan/update', 'makananController::update');
$routes->get('makanan/delete/(:num)', 'makananController::delete/$1');
