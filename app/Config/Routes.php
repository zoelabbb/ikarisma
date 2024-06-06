<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

//url user
$routes->get('/', 'Pages::index');
$routes->get('/kaos', 'Kaos::kaos');
$routes->get('/detail_a/(:any)', 'Kaos_anak::detailA/$1');
$routes->get('/detail_d/(:any)', 'Kaos::detailD/$1');
$routes->get('/daftar/dewasa', 'Daftar::dewasa');
$routes->get('/kaos_anak', 'Kaos_anak::kaos_anak');
$routes->get('/daftar/anak', 'Daftar::anak');



$routes->get('/admin', 'Admin\User::index');
$routes->get('/admin/home_admin', 'Admin\Home_admin::home_admin');
$routes->get('/admin/logout', 'Admin\User::logout');

//url bayar akses admin
$routes->get('/admin/koreksi_dewasa', 'Admin\Koreksi::koreksi_dewasa');
$routes->get('/admin/koreksi_dewasa/(:any)', 'Admin\Koreksi::koreksi/$1');
$routes->get('/admin/bayar_dewasa/(:any)', 'Admin\Bayar::detail/$1');
$routes->get('/admin/bayar_anak/(:segment)', 'Admin\Bayar::rinci/$1');
$routes->get('/admin/bayar_dewasa', 'Admin\Bayar::bayar_dewasa');
$routes->get('/admin/bayar_anak', 'Admin\Bayar::bayar_anak');
//end url bayar

$routes->get('/admin/approve_dewasa', 'Admin\ApproveDewasa::approve_dewasa');
$routes->get('/admin/pengeluaran', 'Admin\Pengeluaran::pengeluaran');
$routes->get('/admin/pengeluaran', 'Admin\Pengeluaran::catatan');
$routes->get('/admin/approve_anak', 'Admin\ApproveAnak::approve_anak');
$routes->delete('/admin/approve_dewasa/(:any)', 'Admin\ApproveDewasa::approveD/$1'); //softdelete
$routes->delete('/admin/approve_anak/(:any)', 'Admin\ApproveAnak::approveA/$1'); //softdelete
$routes->get('/admin/approve_dewasa/(:any)', 'Admin\ApproveDewasa::detail/$1');
$routes->get('/admin/approve_anak/(:any)', 'Admin\ApproveAnak::detailA/$1');

$routes->get('/prediksi', 'Prediksi::index');
$routes->post('/prediksi/predict', 'Prediksi::predict');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
