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


Route::get('/entidade', 'EntidadeController@index') ->name('entidade');
Route::get('/entidade/show', 'EntidadeController@show') ;

Route::get('/ajuste/cadastrar', 'AjusteCondutaController@create');

Route::get('/ajuste/atualizar', 'AjusteCondutaController@update');

Route::get('/ajuste/remover', 'AjusteCondutaController@delete');

Route::get('/ajuste/ver', 'AjusteCondutaController@read');


Route::get('/entidade/cadastrar', 'EntidadeController@cadastrar');

Route::post('/entidade/atualizar', 'EntidadeController@update');

Route::post('/entidade/gravar', 'EntidadeController@create');

Route::get('/entidade/editar/{id}', 'EntidadeController@editar');

Route::get('/entidade/deletar/{id}', 'EntidadeController@delete');

Route::get('/entidade/visualizar/{id}', 'EntidadeController@read');


Route::get('/processo/cadastrar', 'ProcessoController@create');

Route::get('/processo/atualizar', 'ProcessoController@update');

Route::get('/processo/remover', 'ProcessoController@delete');

Route::get('/processo/ver', 'ProcessoController@read');


Route::get('/andamento/cadastrar', 'AndamentoController@create');

Route::get('/andamento/atualizar', 'AndamentoController@update');

Route::get('/andamento/remover', 'AndamentoController@delete');

Route::get('/andamento/ver', 'AndamentoController@read');


Route::get('/tipoandamento/cadastrar', 'TipoAndamentoController@create');

Route::get('/tipoandamento/atualizar', 'TipoAndamentoController@update');

Route::get('/tipoandamento/remover', 'TipoAndamentoController@delete');

Route::get('/tipoandamento/ver', 'TipoAndamentoController@read');







