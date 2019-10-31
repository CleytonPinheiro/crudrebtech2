<?php

    Route::get('usuarios','UsuariosController@index');

    Route::group(['middleware' => 'web'], function() {
    Route::get('/', 'HomeController@index');
    //Auth::routes();
    Route::auth();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('clientes','ClientesController@index');
    Route::get('clientes/novo','ClientesController@novo');
    Route::get('clientes/{cliente}/editar','ClientesController@editar');
    Route::post('clientes/salvar','ClientesController@salvar');
    Route::patch('clientes/{cliente}','ClientesController@atualizar');
    Route::delete('clientes/{cliente}','ClientesController@deletar');
});

