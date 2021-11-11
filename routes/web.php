<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExperienciaController;

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

Route::view('/menu', 'MainMenu')-> name('menu');

Route::post('/login', 'LoginController@authenticate');
Route::post('/register', 'RegisterController@register');

Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/habilidades', 'HabilidadController@index')->name('habilidad.index');
Route::post('/habilidades', 'HabilidadController@store')->name('habilidad.store');
Route::get('/habilidades/crear', 'HabilidadController@create')->name('habilidad.create');
Route::get('/habilidades/{id}/editar', 'HabilidadController@edit')->name('habilidad.edit');
Route::patch('/habilidades/{id}', 'HabilidadController@update')->name('habilidad.update');
Route::delete('/habilidades/{id}', 'HabilidadController@destroy')->name('habilidad.destroy');

Route::get('/referencias', 'ReferenciaController@index')->name('referencia.index');
Route::post('/referencias', 'ReferenciaController@store')->name('referencia.store');
Route::get('/referencias/crear', 'ReferenciaController@create')->name('referencia.create');
Route::get('/referencias/{id}/editar', 'ReferenciaController@edit')->name('referencia.edit');
Route::patch('/referencias/{id}', 'ReferenciaController@update')->name('referencia.update');
Route::delete('/referencias/{id}', 'ReferenciaController@destroy')->name('referencia.destroy');


Route::get('/info-experiencias',[ExperienciaController::class, 'showExperiencias'])->name('experiencia.index');
Route::post('/crear-experiencias', [ExperienciaController::class, 'crearExperiencia'])->name('experiencia.store');
Route::get('/crear-experiencias', [ExperienciaController::class, 'showCrearExperiencias'])->name('experiencia.create');
Route::get('/editar-experiencias', [ExperienciaController::class, 'showEditExperiencias'])->name('experiencia.edit');
Route::post('/editar-experiencias', [ExperienciaController::class, 'actualizarExperiencia'])->name('experiencia.update');
Route::post('/borrar-experiencias', [ExperienciaController::class, 'borrarExperiencia'])->name('experiencia.destroy');
Route::get('/buscar-experiencias', [ExperienciaController::class, 'buscarExperiencias'])->name('experiencia.search');
