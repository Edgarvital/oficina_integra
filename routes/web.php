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
Route::get('/atividades', 'AtividadeController@index')->name('atividade.index');
Route::get('/atividade/{id}', 'AtividadeController@show')->name('atividade.show');
Route::get('/atividades/cadastrar', 'AtividadeController@create')->name('atividade.create');
Route::get('/atividades/remover/{id}', 'AtividadeController@remove')->name('atividade.remove');
Route::get('/atividades/edit/{id}', 'AtividadeController@edit')->name('atividade.edit');
Route::post('/atividades/atualizar', 'AtividadeController@update')->name('atividade.update');
Route::post('/atividades/criar', 'AtividadeController@store')->name('atividade.store');

