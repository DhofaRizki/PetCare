<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::dashboard');
$routes->get('/dashboard/pengguna', 'Home::pdashboard');
$routes->get('/dashboard/maintenance', 'Home::maintenance');

$routes->get('/admin', 'Admin::show');
$routes->get('/admin/form', 'Admin::form');
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->post('/admin/Save', 'Admin::create');
$routes->post('/admin/delete', 'Admin::delete');

$routes->get('/pengguna', 'Pengguna::show');
$routes->get('/pengguna/form', 'Pengguna::form');
$routes->get('/pengguna/edit/(:num)', 'Pengguna::edit/$1');
$routes->post('/pengguna/Save', 'Pengguna::create');
$routes->post('/pengguna/delete', 'Pengguna::delete');

$routes->get('/barang', 'Barang::show');
$routes->get('/barang/form', 'Barang::form');
$routes->get('/barang/edit/(:num)', 'Barang::edit/$1');
$routes->post('/barang/Save', 'Barang::create');
$routes->post('/barang/delete', 'Barang::delete');
$routes->get('/barang/foto/(:num).png', 'Barang::foto/$1');

$routes->get('/grooming', 'Grooming::show');
$routes->get('/grooming/form', 'Grooming::form');
$routes->get('/grooming/edit/(:num)', 'Grooming::edit/$1');
$routes->post('/grooming/Save', 'Grooming::create');
$routes->post('/grooming/delete', 'Grooming::delete');
$routes->get('/grooming/foto/(:num).png', 'Grooming::foto/$1');

$routes->get('/dokter', 'Dokter::show');
$routes->get('/dokter/form', 'Dokter::form');
$routes->get('/dokter/edit/(:num)', 'Dokter::edit/$1');
$routes->post('/dokter/Save', 'Dokter::create');
$routes->post('/dokter/delete', 'Dokter::delete');
$routes->get('/dokter/foto/(:num).png', 'Dokter::foto/$1');

$routes->get('/pbarang', 'Pbarang::show');
$routes->get('/pbarang/form', 'Pbarang::form');
$routes->get('/pbarang/edit/(:num)', 'Pbarang::edit/$1');
$routes->post('/pbarang/Save', 'Pbarang::create');
$routes->post('/pbarang/delete', 'Pbarang::delete');

$routes->get('/pgrooming', 'Pgrooming::show');
$routes->get('/pgrooming/form', 'Pgrooming::form');
$routes->get('/pgrooming/edit/(:num)', 'Pgrooming::edit/$1');
$routes->post('/pgrooming/Save', 'Pgrooming::create');
$routes->post('/pgrooming/delete', 'Pgrooming::delete');

$routes->get('/pdokter', 'Pdokter::show');
$routes->get('/pdokter/form', 'Pdokter::form');
$routes->get('/pdokter/edit/(:num)', 'Pdokter::edit/$1');
$routes->post('/pdokter/Save', 'Pdokter::create');
$routes->post('/pdokter/delete', 'Pdokter::delete');

$routes->get('/login','Login::form');
$routes->post('/login','Login::login');
$routes->get('/logout','Login::logout');
$routes->get('/signup/form','Login::signup');
$routes->post('/signup/Save','Signup::create');


$routes->get('/pgnbarang/tampildata', 'Pgnbarang::show');

$routes->get('/pgndokter/tampildata', 'Pgndokter::show');

$routes->get('/pgngrooming/tampildata', 'Pgngrooming::show');

$routes->get('/folio/barang', 'Portofolio::show');
$routes->get('/folio/dokter', 'Portofolio::shows');
$routes->get('/folio/grooming', 'Portofolio::showss');

$routes->get('/appointment/grooming', 'Pgrooming::form');
