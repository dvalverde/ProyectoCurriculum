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

/*Route::get('/', function () {
    return view('welcome');

});*/

Route::view('/', 'welcome')-> name('welcome');
Route::view('/login', 'login')-> name('login');
Route::view('/register', 'register')-> name('register');

Route::post('login', 'loginController@store');
Route::post('register', 'registerController@store');

Route::post('/habilidades', 'HabilidadController@store')->name('habilidad.store');
Route::get('/habilidades/crear', 'HabilidadController@create')->name('habilidad.create');
Route::get('/habilidades/{id}/editar', 'HabilidadController@edit')->name('habilidad.edit');
Route::patch('/habilidades/{id}', 'HabilidadController@update')->name('habilidad.update');

Route::post('/referencias', 'ReferenciaController@store')->name('referencia.store');
Route::get('/referencias/crear', 'ReferenciaController@create')->name('referencia.create');



/*Route::get('/', function () {
    return view('welcome');
});*/

//GET
//Route::get('register', 'registerController@create');

//POST

Route::view('/login', 'login')-> name('login');
Route::view('/register', 'register')-> name('register');
/*Route::get('/', function () {
    return view('welcome');
});*/

//GET
//Route::get('register', 'registerController@create');

//POST
Route::post('login', 'loginController@store');

Route::post('register', 'registerController@store');
