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

Route::post('/habilidades', 'HabilidadController@store')->name('habilidad.store');
Route::get('/habilidades/crear', 'HabilidadController@create')->name('habilidad.create');

Route::post('/referencias', 'ReferenciaController@store')->name('referencia.store');
Route::get('/referencias/crear', 'ReferenciaController@create')->name('referencia.create');
