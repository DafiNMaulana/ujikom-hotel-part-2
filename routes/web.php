<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('admin.manage-kamar');
// });
Route::get('/', 'tamu\tamuController@index');
Route::get('/chart', 'admin\statistikController@data_chart');
Route::get('/ruang', 'tamu\ruangController@index');
Route::get('/about', 'tamu\tamuController@about')->name('about.index');
Route::get('/detail/{kamar}', 'tamu\detailController@index')->name('detail.index');

Route::get('/reservation', 'tamu\tamuController@reservation')->name('reservation.index');
Route::get('/reservation/{id}/invoice', 'tamu\tamuController@invoice')->name('invoice');

Route::resource('tamu', 'tamu\tamuController');
Route::resource('ruang', 'tamu\ruangController');
// Route::resource('details.kamar', 'tamu\detailController');

Route::get('admin/login', 'admin\authController@index')->name('login');
Route::get('admin/', 'admin\authController@index');
Route::post('admin/login-post', 'admin\authController@post')->name('login.post');

Route::group(['middleware' => ['auth', 'authLevel:admin, resepsionis']], function() {
    Route::get('admin/login-logout', 'admin\authController@logout')->name('login.out');
    Route::resource('admin/manage-kamar', 'admin\KamarController');
    Route::resource('admin/kamar.fasilitas', 'admin\FasilitasKamarController');
    Route::resource('admin/manage-admin', 'admin\adminController');
    Route::resource('admin/manage-fasilitas-hotel', 'admin\fasilitasHotelController');
    Route::resource('admin/manage-pemesanan', 'admin\pemesananController');
    Route::resource('admin/statistik', 'admin\statistikController');
    Route::get('/search', 'admin\PemesananController@search')->name('search');
});

