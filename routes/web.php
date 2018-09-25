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

Route::get('/', 'ProdutoController@lista');



Route::get('/produtos', 'ProdutoController@lista');
Route::get('/info', 'ProdutoController@info');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/exclui/{id}', 'ProdutoController@exclui');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');
Route::get('/produtos/atualiza/{id}', 'ProdutoController@atualiza');
Route::post('/produtos/altera/{id}', 'ProdutoController@altera');


//Route::get('/home', 'HomeController@index')->name('home');
