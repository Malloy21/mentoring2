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
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/mente/absen', 'MenteController@absen');
    Route::get('/mente/dataabsen', 'MenteController@dataabsen');
    Route::get('/mente/tambah', 'MenteController@tambah');
    Route::post('/mente/absen/simpan', 'MenteController@simpan');
    Route::get('/mente/edit/{id}', 'MenteController@edit');
    Route::post('/mente/update', 'MenteController@update');
    Route::get('/mente/hapus/{id}', 'MenteController@hapus');


    Route::get('/ujian/ujian', 'UjianController@ujian');
    Route::post('/ujian/ujian/save', 'UjianController@save');
    
    
    Route::get('/input/data', 'InputController@data');
    Route::get('/input/tambah', 'InputController@tambah');
    Route::post('/input/simpan', 'InputController@simpan');
    Route::get('/input/edit/{id}', 'InputController@edit');
    Route::post('/input/update', 'InputController@update');
    Route::get('/input/hapus/{id}', 'InputController@hapus');
    
    
    Route::get('/laporan/report', 'LaporanController@report');

});


