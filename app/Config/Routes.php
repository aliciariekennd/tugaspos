<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/home/editpaket/(:num)','Home::editpaket/$1');
$routes->get('/home/list/(:any)', 'Home::list/$1');
$routes->get('/home/create', 'Home::create');
$routes->get('/home/editpenghuni/(:num)','Home::editpenghuni/$1');
// $routes->get('/', 'Menu::index');
// $routes->get('/public/about', 'Menu::about');
// $routes->get('/public/menu', 'Menu::menu');
// $routes->get('/public/artikel','Menu::artikel');
// $routes->get('/public/makanpagi','Menu::makanpagi');
// $routes->get('/public/makansiang','Menu::makansiang');
// $routes->get('/public/makanmalam','Menu::makanmalam');
// $routes->get('/public/detail/(:any)','Menu::detail/$1');



// // routes indexadmin-pagi
// $routes->get('/admin/index', 'Admin::index');
// $routes->get('/admin/create', 'Admin::create');
// $routes->get('/admin/edit/(:segment)','Admin::edit/$1');
// $routes->delete('/admin/menupagi/(:num)','Admin::delete/$1');
// $routes->get('/admin/menupagi/(:any)', 'Admin::detail/$1');

// // routes siang
// $routes->get('/admin/create1', 'Admin::create1');
// $routes->get('/admin/edit1/(:segment)','Admin::edit1/$1');
// $routes->delete('/admin/menusiang/(:num)','Admin::deletesiang/$1');
// $routes->get('/admin/menusiang/(:any)', 'Admin::detailsiang/$1');

// // routes malam
// $routes->get('/admin/create2', 'Admin::create2');
// $routes->get('/admin/edit2/(:segment)','Admin::edit2/$1');
// $routes->delete('/admin/menumalam/(:num)','Admin::deletemalam/$1');
// $routes->get('/admin/menumalam/(:any)', 'Admin::detailmalam/$1');

// // routes artikel
// $routes->get('/admin/tambahartikel', 'Admin::tambahartikel');
// $routes->get('/admin/editartikel/(:segment)','Admin::editartikel/$1');
// $routes->delete('/admin/artikel/(:num)','Admin::deleteartikel/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
