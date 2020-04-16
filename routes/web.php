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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pelayanan', 'PengaduanController@pelayanan');
Route::post('/pelayanan', 'PengaduanController@storepelayanan');

Route::get('/transportasi', 'PengaduanController@transportasi');
Route::post('/transportasi', 'PengaduanController@storetransportasi');

Route::get('/bencana', 'PengaduanController@bencana');
Route::post('/bencana', 'PengaduanController@storebencana');



    Route::prefix('petugas')->group(function() {
        Route::get('/login', 'Auth\PetugasLoginController@showLoginForm')->name('petugas.login');
        Route::post('/login', 'Auth\PetugasLoginController@login')->name('petugas.login.submit');
        Route::post('/', 'PengaduanController@store');
        Route::delete('/{id}', 'PetugasController@destroy')->name('petugas.delete');
        Route::get('/tanggapan/{id}', 'TanggapanController@create')->name('petugas.tanggapan');
        Route::post('/tanggapan/{id}', 'TanggapanController@store')->name('petugas.tanggapan.submit');
        Route::get('/', 'PetugasController@index')->name('petugas.dashboard');
    });
