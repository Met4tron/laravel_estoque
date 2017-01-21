<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    
});
Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id','[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@produtoNovo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listJson');

//Metodo Match
// Faz com que se aceite mais de um tipo de verbo http em uma rota

// Route::match(array('GET','POST'), '/produtos/adiciona', 'ProdutoController@adiciona');