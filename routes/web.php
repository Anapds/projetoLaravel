<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PrincipalController@Principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobreNos');

Route::get('/contato', 'contatoController@contato')->name('site.contato');

Route::get('/login', function() {return 'Login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function() {return 'clientes';})->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    
    Route::get('/produtos', function() {return 'produtos';})->name('app.produtos');
});



Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'"> clique aqui </a> para ir para a página inicial';
});