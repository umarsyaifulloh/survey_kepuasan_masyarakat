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
$routes->get('createdb', function () {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('db_survey')) {
        echo 'Database created!';
    }
});

$routes->get('dropdb', function () {
    $forge = \Config\Database::forge();
    if ($forge->dropDatabase('db_survey')) {
        echo 'Database droped!';
    }
});
// $routes->get('/', 'Home::index');

/* Start Login Access */
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/cekLogin', 'Auth::cekLogin');
/* Finish Login Access */

/* Start Dashboard */
$routes->get('/dashboard', 'Dashboard::index');
/* End Dashboard */

/* Start Access Deskripsi Survey */
$routes->get('/survey', 'Survey::index');
$routes->get('/survey/detail/(:num)', 'Survey::detail/$1');
$routes->get('/survey/detailsuper/(:num)/(:num)/(:num)', 'Survey::detailsuper/$1/$2/$3');
$routes->get('/survey/add', 'Survey::add');
$routes->post('/survey/create', 'Survey::create');
$routes->get('/survey/edit/(:num)', 'Survey::edit/$1');
$routes->put('/survey/update/(:num)', 'Survey::update/$1');
$routes->delete('/survey/delete/(:num)', 'Survey::delete/$1');
/* Finish Access Deskripsi Survey */

/* Start Access Detail Survey & Pertanyaan */
$routes->post('/pertanyaan/create/(:num)', 'Pertanyaan::create/$1');
$routes->get('/pertanyaan/detail/(:num)/(:num)', 'Pertanyaan::detail/$1/$2');
$routes->get('/pertanyaan/detailsuper/(:num)/(:num)/(:num)', 'Pertanyaan::detailsuper/$1/$2/$3');
$routes->delete('/pertanyaan/delete/(:num)/(:num)', 'Pertanyaan::delete/$1/$2');
$routes->get('/pertanyaan/edit/(:num)/(:num)', 'Pertanyaan::edit/$1/$2');
$routes->put('/pertanyaan/update/(:num)/(:num)', 'Pertanyaan::update/$1/$2');
/* Finish Access Detail Survey & Pertanyaan */

/* Start Access Detail Pertanyaan & Opsi Pertanyaan */
$routes->post('/pertanyaanopsi/create/(:num)/(:num)', 'PertanyaanOpsi::create/$1/$2');
$routes->get('/pertanyaanopsi/edit/(:num)/(:num)/(:num)', 'PertanyaanOpsi::edit/$1/$2/$3');
$routes->put('/pertanyaanopsi/update/(:num)/(:num)/(:num)', 'PertanyaanOpsi::update/$1/$2/$3');
$routes->get('/pertanyaanopsi/delete/(:num)/(:num)/(:num)', 'PertanyaanOpsi::delete/$1/$2/$3');
/* Finish Access Detail Pertanyaan & Opsi Pertanyaan */

/* Start Add & Create Opsi Master [BY ADMIN] */
$routes->get('/opsi/add/(:num)/(:num)', 'Opsi::add/$1/$2');
$routes->post('/opsi/create/(:num)/(:num)', 'Opsi::create/$1/$2');
/* Finish Add & Create Opsi Master */

/* Start Add & Create Opsi Master [BY SUPERADMIN] */
$routes->get('/opsi', 'Opsi::index');
$routes->get('/opsi/addopsi', 'Opsi::addOpsi');
$routes->post('/opsi/createopsi', 'Opsi::createOpsi');
$routes->delete('/opsi/delete/(:num)', 'Opsi::delete/$1');
$routes->get('/opsi/edit/(:num)', 'Opsi::edit/$1');
$routes->post('/opsi/update', 'Opsi::update');
/* Finish Add & Create Opsi Master */

/* Start Access Profil dan Edit Profil OPD */
$routes->get('/opd/profil', 'OPD::profil');
$routes->get('/opd/editprofil', 'OPD::editProfil');
$routes->put('/opd/updateprofil', 'OPD::updateProfil');
/* Finish Access Profil dan Edit Profil OPD */

/* Start Access Profil dan Edit Profil Admin */
$routes->get('/users/profil', 'Users::profil');
$routes->get('/users/editprofil', 'Users::editProfil');
$routes->put('/users/updateprofil', 'Users::updateProfil');
/* Finish Access Profil dan Edit Profil Admin */

/*Start Access Responden
/* Landing Page */
$routes->get('/', 'LandingPage::index');
/* List Survey by Responden */
$routes->get('/responden/surveyberitaresponden/(:num)', 'Responden::surveyBeritaResponden/$1');
/* Form Email Responden */
$routes->get('/reponden/addresponden/(:num)', 'Responden::addResponden/$1');
/* Create Email Responden */
$routes->post('/responden/checkemailresponden/(:num)', 'Responden::checkEmailResponden/$1');
/* Form Survey Responden */
$routes->get('/responden/formsurveyresponden/(:num)', 'Responden::formSurveyResponden/$1');
/* Create Responden ID dan Survey ID  + Create Respon Responden*/
$routes->post('/responden/createrespondensurvey/(:num)', 'Responden::createRespondenSurvey/$1');
/* List Berita by Responden */
$routes->get('/responden/listopd', 'Responden::listOPD');
/* Finish Access Responden */

/*Start Access Berita by Responden
/* List Berita Per OPD by Responden */
$routes->get('/responden/listberitaopd/(:num)', 'Responden::listBeritaOPD/$1');
/* List Berita by Responden */
$routes->get('/responden/listberita', 'Responden::listBerita');
/* List Detail Berita by Responden */
$routes->get('/responden/detailberita/(:num)', 'Responden::detailBerita/$1');
/* Finish Access Berita by Responden */

/*Start Eksport */
$routes->get('/export/listsurvey', 'Export::listSurvey');
$routes->get('/export/laporanpdf/(:num)/(:num)', 'Export::laporanPdf/$1/$2');
$routes->get('/export/laporanexcel/(:num)/(:num)', 'Export::laporanExcel/$1/$2');
$routes->get('/export/grafikpdf/(:num)', 'Export::grafikPdf/$1');
/*End Eksport */

/* Start Access OPD */
$routes->get('/opd/', 'OPD::index');
$routes->get('/opd/add', 'OPD::add');
$routes->post('/opd/create', 'OPD::create');
$routes->get('/opd/edit/(:num)', 'OPD::edit/$1');
$routes->post('/opd/update/(:num)', 'OPD::update/$1');
$routes->get('/opd/detail/(:num)', 'OPD::detail/$1');
$routes->delete('/opd/delete/(:num)', 'OPD::delete/$1');
/* End Access OPD */

/* Start Access Users */
$routes->get('/users', 'Users::index');
$routes->get('/users/add/(:num)', 'Users::add/$1');
$routes->post('/users/create/(:num)', 'Users::create/$1');
$routes->get('/users/edit/(:num)', 'Users::edit/$1');
$routes->post('/users/update/(:num)/(:num)', 'Users::update/$1/$2');
$routes->get('/users/detail/(:num)', 'Users::detail/$1');
$routes->delete('/users/delete/(:num)/(:num)', 'Users::delete/$1/$2');
/* End Access Users */

/* Start Access Berita*/
$routes->get('/berita/index', 'Berita::index/$1');
$routes->get('/berita/add', 'Berita::add');
$routes->post('/berita/create', 'Berita::create');
$routes->get('/berita/edit/(:num)', 'Berita::edit/$1');
$routes->post('/berita/update/(:num)', 'Berita::update/$1');
$routes->delete('/berita/delete/(:num)', 'Berita::delete/$1');
$routes->get('/berita/detail/(:num)/(:num)', 'Berita::detail/$1/$2');
$routes->get('/berita/listopd/(:num)', 'Berita::listOPD/$1');
/* Finish Access Opsi Master*/

/* Start Access Laporan */
$routes->get('/laporan/listtahun/(:num)', 'Laporan::listTahun/$1');
$routes->get('/laporan/listsurvey/(:num)/(:num)', 'Laporan::listSurvey/$1/$2');
$routes->get('/laporan/laporan/(:num)/(:num)', 'Laporan::laporan/$1/$2');
$routes->get('/laporan/listopd', 'Laporan::listOPD');
/* Finish Access Laporan */

/*Start Access Grafik */
$routes->get('/grafik/listtahun/(:num)', 'Grafik::listTahun/$1');
$routes->get('/grafik/listsurvey/(:num)/(:num)', 'Grafik::listSurvey/$1/$2');
$routes->get('/grafik/listopd', 'Grafik::listOPD');
$routes->get('/grafik/grafik/(:num)', 'Grafik::grafik/$1');

/*Finish Access Grafik */
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
