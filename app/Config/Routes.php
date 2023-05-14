<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override( function() {
    echo view('404');
});
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to ()) in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);


$routes->get('/', 'Home::index');

$routes->get('/katnasabah', 'Kategori::nasabah');

$routes->get('/katrx', 'Kategori::transaksi');

$routes->get('/datnasabah', 'Data::nasabah');

$routes->get('/datcol', 'Data::collector');


service('auth')->routes($routes);

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
