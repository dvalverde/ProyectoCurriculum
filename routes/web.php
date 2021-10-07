<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', function () {
    return view('ExperienciasView');
});

Route::post('/habilidades', 'HabilidadController@store')->name('habilidad.store');
Route::get('/habilidades/crear', 'HabilidadController@create')->name('habilidad.create');
Route::get('/habilidades/{id}/editar', 'HabilidadController@edit')->name('habilidad.edit');
Route::patch('/habilidades/{id}', 'HabilidadController@update')->name('habilidad.update');

Route::post('/referencias', 'ReferenciaController@store')->name('referencia.store');
Route::get('/referencias/crear', 'ReferenciaController@create')->name('referencia.create');

Route::get('/info-experiencias',[UsuarioController::class, 'showExperiencias']);
Route::post('/crear-experiencias', [UsuarioController::class, 'crearExperiencia']);
Route::get('/crear-experiencias', [UsuarioController::class, 'showCrearExperiencias'])->name('crearExp');
Route::get('/editar-experiencias', [UsuarioController::class, 'showEditExperiencias'])->name('editExp');
Route::post('/editar-experiencias', [UsuarioController::class, 'actualizarExperiencia']);
Route::post('/borrar-experiencias', [UsuarioController::class, 'borrarExperiencia']);
Route::get('/buscar-experiencias', [UsuarioController::class, 'buscarExperiencias'])->name('buscarExp');
