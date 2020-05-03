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

Route::get('/', 'PagesController@home');

// mata kuliah
Route::get('/matakuliah', 'MataKuliahController@index');
Route::get('/matakuliah/create', 'MataKuliahController@create');
Route::get('/matakuliah/{mataKuliah}', 'MataKuliahController@show');
Route::post('/matakuliah', 'MataKuliahController@store');
Route::delete('/matakuliah/{mataKuliah}', 'MataKuliahController@destroy');
Route::get('/matakuliah/{mataKuliah}/edit', 'MataKuliahController@edit');
Route::put('/matakuliah/{mataKuliah}', 'MataKuliahController@update');

// mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/create', 'MahasiswaController@create');
Route::get('/mahasiswa/{mhs}', 'MahasiswaController@show');
Route::post('/mahasiswa', 'MahasiswaController@store');
Route::delete('/mahasiswa/{mhs}', 'MahasiswaController@destroy');
Route::get('/mahasiswa/{mhs}/edit', 'MahasiswaController@edit');
Route::put('/mahasiswa/{mhs}', 'MahasiswaController@update');
