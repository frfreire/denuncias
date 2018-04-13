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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teste', 'AjusteCondutaController@index');


Route::get('/ajuste/cadastrar', 'AjusteCondutaController@create');

Route::get('/ajuste/atualizar', 'AjusteCondutaController@update');

Route::get('/ajuste/remover', 'AjusteCondutaController@delete');

Route::get('/ajuste/ver', 'AjusteCondutaController@read');


Route::get('/entidade/cadastrar', 'EntidadeController@create');

Route::get('/entidade/atualizar', 'EntidadeController@update');

Route::get('/entidade/remover', 'EntidadeController@delete');

Route::get('/entidade/ver', 'EntidadeController@read');