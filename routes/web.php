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
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('paciente/index', 'PacienteController@index')->name('paciente/index');

Route::get('paciente/add', 'PacienteController@add');

Route::post('paciente/add', 'PacienteController@add');

Route::post('paciente/create', 'PacienteController@create');

Route::resource('profissional', 'ProfissionalController');

Route::resource('horario', 'HorarioController');

Route::get('paciente/edit/{id}', 'PacienteController@edit');
Route::post('paciente/edit/{id}', 'PacienteController@edit');

Route::get('paciente/delete/{id}', 'PacienteController@delete');
Route::post('paciente/delete/{id}', 'PacienteController@delete');

Route::post('paciente/update', 'PacienteController@update');

Route::get('paciente/view/{id}', 'PacienteController@view');

Route::get('horario/index', 'HorarioController@index');

