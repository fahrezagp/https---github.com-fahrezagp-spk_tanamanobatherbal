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
    return view('index');
});

Route::get('/penyakit','App\Http\Controllers\PenyakitController@index');
Route::post('/penyakit/tambah','App\Http\Controllers\PenyakitController@tambah');
Route::get('/penyakit/{id}/hapus','App\Http\Controllers\PenyakitController@hapus');

Route::get('/kriteria','App\Http\Controllers\KriteriaController@index');
Route::post('/kriteria/tambah','App\Http\Controllers\KriteriaController@tambah');
Route::get('/kriteria/{id}/hapus','App\Http\Controllers\KriteriaController@hapus');
Route::get('/kriteria/{id}/tambahsub','App\Http\Controllers\KriteriaController@tambahsub');
Route::post('/kriteria/{id}/tambahsubkriteria','App\Http\Controllers\KriteriaController@tambahsubkriteria');

Route::get('/subkriteria','App\Http\Controllers\SubkriteriaController@index');
Route::post('/subkriteria/{id}/tambah','App\Http\Controllers\SubkriteriaController@tambah');
Route::get('/subkriteria/{id}/hapus','App\Http\Controllers\SubkriteriaController@hapus');

Route::get('/tanaman','App\Http\Controllers\TanamanController@index');
Route::post('/tanaman/tambah','App\Http\Controllers\TanamanController@tambah');

Route::get('/hasil','App\Http\Controllers\HasilController@index');


