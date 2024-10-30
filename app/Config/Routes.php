<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'DashboardController::index');
// Dashboard
$routes->get('/dashboard', 'DashboardController::index');

// Informasi Ormas
$routes->get('/sisteminformasi', 'SisteminformasiController::index');

// Pencatatan Keberadaan
$routes->get('/kelola/skt', 'KelolaController::skt');
$routes->post('/kelola/skt', 'KelolaController::insertsktData');
$routes->get('/kelola/skhu', 'KelolaController::skhu');
$routes->post('/kelola/skhu', 'KelolaController::insertskhuData');

// Pengajuan SKT
$routes->get('/pengajuanskt/skt', 'PengajuansktController::skt');
$routes->post('/pengajuanskt/skt', 'PengajuansktController::insertsktData');
// ubah
$routes->get('/pengajuanskt/ubah/(:any)', 'PengajuansktController::ubah');
$routes->post('/pengajuanskt/ubah', 'PengajuansktController::updateData');
$routes->get('/pengajuanskt/ubahormas/(:any)', 'PengajuansktController::ubahormas');
$routes->post('/pengajuanskt/ubahormas', 'PengajuansktController::updateDataormas');
$routes->get('/pengajuanskt/ubah1/(:any)', 'PengajuansktController::ubah1');
$routes->post('/pengajuanskt/ubah1', 'PengajuansktController::updateData1');
$routes->get('/pengajuanskt/ubah2/(:any)', 'PengajuansktController::ubah2');
$routes->post('/pengajuanskt/ubah2', 'PengajuansktController::updateData2');
$routes->get('/pengajuanskt/ubah3/(:any)', 'PengajuansktController::ubah3');
$routes->post('/pengajuanskt/ubah3', 'PengajuansktController::updateData3');
$routes->get('/pengajuanskt/ubah4/(:any)', 'PengajuansktController::ubah4');
$routes->post('/pengajuanskt/ubah4', 'PengajuansktController::updateData4');
$routes->get('/pengajuanskt/ubah5/(:any)', 'PengajuansktController::ubah5');
$routes->post('/pengajuanskt/ubah5', 'PengajuansktController::updateData5');
$routes->get('/pengajuanskt/ubah6/(:any)', 'PengajuansktController::ubah6');
$routes->post('/pengajuanskt/ubah6', 'PengajuansktController::updateData6');
// kirim
$routes->get('/pengajuanskt/kirim/(:any)', 'PengajuansktController::kirim');
$routes->post('/pengajuanskt/kirim', 'PengajuansktController::updateKirim');
// index
$routes->get('/pengajuanskt/index', 'PengajuansktController::index');
$routes->get('/pengajuanskt/index1', 'PengajuansktController::index1');
$routes->get('/pengajuanskt/index2', 'PengajuansktController::index2');
$routes->get('/pengajuanskt/index3', 'PengajuansktController::index3');
$routes->get('/pengajuanskt/index4', 'PengajuansktController::index4');
$routes->get('/pengajuanskt/index5', 'PengajuansktController::index5');
$routes->get('/pengajuanskt/index6', 'PengajuansktController::index6');
// detail
$routes->get('/pengajuanskt/detail/(:any)', 'PengajuansktController::detail');
$routes->get('/pengajuanskt/detailormas/(:any)', 'PengajuansktController::detailormas');
$routes->get('/pengajuanskt/detail1/(:any)', 'PengajuansktController::detail1');
$routes->get('/pengajuanskt/detail2/(:any)', 'PengajuansktController::detail2');
$routes->get('/pengajuanskt/detail3/(:any)', 'PengajuansktController::detail3');
$routes->get('/pengajuanskt/detail4/(:any)', 'PengajuansktController::detail4');
$routes->get('/pengajuanskt/detail5/(:any)', 'PengajuansktController::detail5');
$routes->get('/pengajuanskt/detail6/(:any)', 'PengajuansktController::detail6');
// verify
$routes->get('/pengajuanskt/verify/(:any)', 'PengajuansktController::verify');
$routes->get('/pengajuanskt/verify1/(:any)', 'PengajuansktController::verify1');
$routes->get('/pengajuanskt/verify2/(:any)', 'PengajuansktController::verify2');
$routes->get('/pengajuanskt/verify3/(:any)', 'PengajuansktController::verify3');
$routes->get('/pengajuanskt/verify4/(:any)', 'PengajuansktController::verify4');
$routes->get('/pengajuanskt/verify5/(:any)', 'PengajuansktController::verify5');
$routes->get('/pengajuanskt/verify6/(:any)', 'PengajuansktController::verify6');
// delete
$routes->get('/pengajuanskt/hapus/(:any)', 'PengajuansktController::delete');
$routes->get('/pengajuanskt/hapus1/(:any)', 'PengajuansktController::delete1');
$routes->get('/pengajuanskt/hapus2/(:any)', 'PengajuansktController::delete2');
$routes->get('/pengajuanskt/hapus3/(:any)', 'PengajuansktController::delete3');
$routes->get('/pengajuanskt/hapus4/(:any)', 'PengajuansktController::delete4');
$routes->get('/pengajuanskt/hapus5/(:any)', 'PengajuansktController::delete5');
$routes->get('/pengajuanskt/hapus6/(:any)', 'PengajuansktController::delete6');

// Informasi Pencatatan Keberadaan
$routes->get('/informasikelolaskt', 'InformasikelolasktController::index');
$routes->get('/informasikelolaskt/detail/(:any)', 'InformasikelolasktController::detail');
$routes->get('/informasikelolaskt/detailhistory/(:any)', 'InformasikelolasktController::detailhistory');
$routes->get('/informasikelolaskt/cetak/(:any)', 'InformasikelolasktController::cetak');
$routes->get('/informasikelolaskt/cetakdetail/', 'InformasikelolasktController::cetakdetail');
$routes->get('/informasikelolaskt/ubah/(:any)', 'InformasikelolasktController::ubah');
$routes->post('/informasikelolaskt/ubah', 'InformasikelolasktController::ubahData');
$routes->get('/informasikelolaskt/hapus/(:any)', 'InformasikelolasktController::delete');
$routes->get('/informasikelolaskt/history/(:any)', 'InformasikelolasktController::history');
$routes->get('/informasikelolaskt/history1/(:any)', 'InformasikelolasktController::history1');

// User
$routes->get('/user', 'UserController::index');
$routes->get('/user/tambah', 'UserController::tambah');
$routes->post('/user/tambah', 'UserController::insertData');
$routes->get('/user/ubah/(:any)', 'UserController::ubah');
$routes->post('/user/ubah', 'UserController::updateData');
$routes->get('/user/hapus/(:any)', 'UserController::delete');

// Login
$routes->get('/login', 'LoginController::index');
$routes->get('/login/logout(:any)', 'LoginController::logout');
// $routes->get('/shop/logout', 'UserController::logoutUser');
$routes->post('/login/submit', 'LoginController::submit');

// Riwayat Login
$routes->get('/riwayatlogin', 'RiwayatloginController::index');

// Forgot Password
$routes->get('/forgot', 'LoginController::forgot');
$routes->post('/forgot', 'LoginController::forgotsubmit');
$routes->post('/newpassword', 'LoginController::newpassword');

// Akses
$routes->get('/akses', 'AksesController::index');
$routes->get('/akses/tambah', 'AksesController::tambah');
$routes->post('/akses/tambah', 'AksesController::insertData');
$routes->get('/akses/ubah/(:any)', 'AksesController::ubah');
$routes->post('/akses/ubah', 'AksesController::ubahData');
$routes->get('/akses/delete/(:any)', 'AksesController::delete');

// Pendaftaran Akun Baru Ormas
$routes->get('/daftar', 'DaftarController::index');
$routes->get('login_daftar', 'DaftarController::login_daftar');
$routes->post('submit_daftar', 'DaftarController::submit_daftar');
$routes->post('insertData', 'DaftarController::insertData');

// Pendaftaran Ormas
$routes->get('/pendaftaran/daftar', 'PendaftaranController::daftar');
$routes->post('/pendaftaran/daftar', 'PendaftaranController::insertData');
// Kirim
$routes->get('/pendaftaran/kirim/(:any)', 'PendaftaranController::kirim');
$routes->post('/pendaftaran/kirim', 'PendaftaranController::updateKirim');
// index
$routes->get('/pendaftaran/index', 'PendaftaranController::index');
$routes->get('/pendaftaran/index1', 'PendaftaranController::index1');
$routes->get('/pendaftaran/index2', 'PendaftaranController::index2');
$routes->get('/pendaftaran/index3', 'PendaftaranController::index3');
$routes->get('/pendaftaran/index4', 'PendaftaranController::index4');
$routes->get('/pendaftaran/index5', 'PendaftaranController::index5');
$routes->get('/pendaftaran/index6', 'PendaftaranController::index6');
// ubah
$routes->get('/pendaftaran/ubah/(:any)', 'PendaftaranController::ubah');
$routes->post('/pendaftaran/ubah', 'PendaftaranController::updateData');
$routes->get('/pendaftaran/ubahormas/(:any)', 'PendaftaranController::ubahormas');
$routes->post('/pendaftaran/ubahormas', 'PendaftaranController::updateDataormas');
$routes->get('/pendaftaran/ubah1/(:any)', 'PendaftaranController::ubah1');
$routes->post('/pendaftaran/ubah1', 'PendaftaranController::updateData1');
$routes->get('/pendaftaran/ubah2/(:any)', 'PendaftaranController::ubah2');
$routes->post('/pendaftaran/ubah2', 'PendaftaranController::updateData2');
$routes->get('/pendaftaran/ubah3/(:any)', 'PendaftaranController::ubah3');
$routes->post('/pendaftaran/ubah3', 'PendaftaranController::updateData3');
$routes->get('/pendaftaran/ubah4/(:any)', 'PendaftaranController::ubah4');
$routes->post('/pendaftaran/ubah4', 'PendaftaranController::updateData4');
$routes->get('/pendaftaran/ubah5/(:any)', 'PendaftaranController::ubah5');
$routes->post('/pendaftaran/ubah5', 'PendaftaranController::updateData5');
$routes->get('/pendaftaran/ubah6/(:any)', 'PendaftaranController::ubah6');
$routes->post('/pendaftaran/ubah6', 'PendaftaranController::updateData6');
// delete
$routes->get('/pendaftaran/hapus/(:any)', 'PendaftaranController::delete');
$routes->get('/pendaftaran/hapus1/(:any)', 'PendaftaranController::delete1');
$routes->get('/pendaftaran/hapus2/(:any)', 'PendaftaranController::delete2');
$routes->get('/pendaftaran/hapus3/(:any)', 'PendaftaranController::delete3');
$routes->get('/pendaftaran/hapus4/(:any)', 'PendaftaranController::delete4');
$routes->get('/pendaftaran/hapus5/(:any)', 'PendaftaranController::delete5');
$routes->get('/pendaftaran/hapus6/(:any)', 'PendaftaranController::delete6');
// detail
$routes->get('/pendaftaran/detailormas/(:any)', 'PendaftaranController::detailormas');
$routes->get('/pendaftaran/detail/(:any)', 'PendaftaranController::detail');
$routes->get('/pendaftaran/detail/(:any)', 'PendaftaranController::detail');
$routes->get('/pendaftaran/detail1/(:any)', 'PendaftaranController::detail1');
$routes->get('/pendaftaran/detail2/(:any)', 'PendaftaranController::detail2');
$routes->get('/pendaftaran/detail3/(:any)', 'PendaftaranController::detail3');
$routes->get('/pendaftaran/detail4/(:any)', 'PendaftaranController::detail4');
$routes->get('/pendaftaran/detail5/(:any)', 'PendaftaranController::detail5');
$routes->get('/pendaftaran/detail6/(:any)', 'PendaftaranController::detail6');
// verify
$routes->get('/pendaftaran/verify/(:any)', 'PendaftaranController::verify');
$routes->get('/pendaftaran/verify1/(:any)', 'PendaftaranController::verify1');
$routes->get('/pendaftaran/verify2/(:any)', 'PendaftaranController::verify2');
$routes->get('/pendaftaran/verify3/(:any)', 'PendaftaranController::verify3');
$routes->get('/pendaftaran/verify4/(:any)', 'PendaftaranController::verify4');
$routes->get('/pendaftaran/verify5/(:any)', 'PendaftaranController::verify5');
$routes->get('/pendaftaran/verify6/(:any)', 'PendaftaranController::verify6');

// Laporan Kerja
$routes->get('/laporankerja', 'LaporanKerjaController::index');
$routes->get('/laporankerja/tambah', 'LaporanKerjaController::tambah');
$routes->post('/laporankerja/tambah', 'LaporanKerjaController::insertData');
$routes->get('/laporankerja/ubah/(:any)', 'LaporanKerjaController::ubah');
$routes->post('/laporankerja/ubah', 'LaporanKerjaController::ubahData');
$routes->get('/laporankerja/delete/(:any)', 'LaporanKerjaController::delete');
$routes->get('/laporankerja/detail/(:any)', 'LaporanKerjaController::detail');
$routes->get('/laporankerja/ormas/(:any)', 'LaporanKerjaController::ormas');
$routes->get('/laporankerja/ormasdetail/(:any)', 'LaporanKerjaController::ormasdetail');

// Profil
$routes->get('/profil/ubah/(:any)', 'ProfilController::ubah');
$routes->post('/profil/ubah', 'ProfilController::updateData');

// faq
$routes->get('/faq', 'FaqController::index');
$routes->get('/faq/tambah', 'FaqController::tambah');
$routes->post('/faq/tambah', 'FaqController::insertData');
$routes->get('/faq/detail/(:any)', 'FaqController::detail');
$routes->get('/faq/ubah/(:any)', 'FaqController::ubah');
$routes->post('/faq/ubah', 'FaqController::ubahData');
$routes->get('/faq/delete/(:any)', 'FaqController::delete');

// Tracking
$routes->get('/proses/index/(:any)', 'ProsesController::index');
$routes->get('/proses/index1/(:any)', 'ProsesController::index1');

$routes->get('/coba/index/(:any)', 'CobaController::index');
$routes->get('/coba/tambah', 'CobaController::tambah');
$routes->post('/coba/tambah', 'CobaController::insertData');










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
