<?php

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

/* Route::get('/', function () {
     return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

// GURU
Route::get('/guru/{guru}',[ 
    'as'   => 'show.guru.details',
    'uses' => 'GuruController@index'
]);

Route::get('/guru/edit_bio/{id}','GuruController@edit_bio');
Route::post('/guru/perbaharui_bio','GuruController@perbaharui_bio');

Route::get('/guru/mapel','GuruController@mapel');
Route::get('/guru/tambah_mapel','GuruController@tambah_mapel');
Route::post('/guru/simpan_mapel','GuruController@simpan_mapel');
Route::get('/guru/edit_mapel/{id}','GuruController@edit_mapel');
Route::post('/guru/perbaharui_mapel','GuruController@perbaharui_mapel');
Route::get('/guru/hapus_mapel/{id}','GuruController@hapus_mapel');

// SISWA
Route::get('/siswa', 'SiswaController@index')->name('pageSiswa');

//MAPEL
Route::get('/mapel/index/{id}', 'MapelController@index');
// Route::get('following/{id}', 'FollowingController@following')->name('following');
Route::get('mapel/{id}', 'MapelController@following')->name('following');

// ------------------------------------------------------------

// MULTI AUTH AND REGISTER
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// GURU
Route::get('guru-login','Auth\GuruLoginController@showLoginForm');
Route::post('guru-login', ['as' => 'guru-login', 'uses' => 'Auth\GuruLoginController@login']);

Route::get('guru-register','Auth\GuruLoginController@showRegisterPage');
Route::post('guru-register', 'Auth\GuruLoginController@register')->name('guru.register');

// SISWA
Route::get('siswa-login','Auth\SiswaLoginController@showLoginForm');
Route::post('siswa-login', ['as' => 'siswa-login', 'uses' => 'Auth\SiswaLoginController@login']);

Route::get('siswa-register','Auth\SiswaLoginController@showRegisterPage');
Route::post('siswa-register', 'Auth\SiswaLoginController@register')->name('siswa.register');
