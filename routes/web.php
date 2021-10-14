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

Route::post('/habilidades', 'HabilidadController@store')->name('habilidad.store');
Route::get('/habilidades/crear', 'HabilidadController@create')->name('habilidad.create');
Route::get('/habilidades/{id}/editar', 'HabilidadController@edit')->name('habilidad.edit');
Route::patch('/habilidades/{id}', 'HabilidadController@update')->name('habilidad.update');

Route::post('/referencias', 'ReferenciaController@store')->name('referencia.store');
Route::get('/referencias/crear', 'ReferenciaController@create')->name('referencia.create');


Route::get('/info-experiencias',[ExperienciaController::class, 'showExperiencias'])->name('infoExp');
Route::post('/crear-experiencias', [ExperienciaController::class, 'crearExperiencia']);
Route::get('/crear-experiencias', [ExperienciaController::class, 'showCrearExperiencias'])->name('crearExp');
Route::get('/editar-experiencias', [ExperienciaController::class, 'showEditExperiencias'])->name('editExp');
Route::post('/editar-experiencias', [ExperienciaController::class, 'actualizarExperiencia']);
Route::post('/borrar-experiencias', [ExperienciaController::class, 'borrarExperiencia']);
Route::get('/buscar-experiencias', [ExperienciaController::class, 'buscarExperiencias'])->name('buscarExp');
