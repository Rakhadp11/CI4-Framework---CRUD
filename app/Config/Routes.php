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
$routes->setDefaultController('Page');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Page::index');
$routes->get('/about', 'Page::about');
$routes->get('/galery', 'Page::galery');
$routes->get('/contact', 'Contact::index');
$routes->get('/pesanan', 'Pesanan::index');
$routes->get('/create', 'Pesanan::create');
$routes->get('/edit/(:segment)', 'Pesanan::edit/$1');
$routes->get('/pesanan/(:any)', 'Pesanan::detail/$1');
$routes->post('/save', 'Pesanan::save');
$routes->delete('/(:num)', 'Pesanan::delete/$1');
$routes->get('/delete/(:num)', 'Contact::delete/$1');
$routes->get('/contact/delete', 'Contact::delete');
$routes->post('/update/(:segment)', 'Pesanan::update/$1');
// $routes->post('/contact', 'Contact::contact/$1');

// $routes->get('/edit', 'Pesanan::edit/$1');


// $routes->get('/Coba', 'Coba::index');
// $routes->get('/Coba/website', 'Coba::website');
// $routes->get('/Coba/(:any)', 'Coba::profil/$1');

// $routes->get('/Users', 'Admin\Users::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
