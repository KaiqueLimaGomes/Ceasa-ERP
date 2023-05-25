<?php

use Illuminate\Support\Facades\Route;

// Rotas para o usuário motorista
Route::group(['prefix' => 'motorista'], function () {
    // Rota para exibir a página de carregamento
    Route::get('/carregamento', 'MotoristaController@carregamento')->name('motorista.carregamento');
    
    // Rota para salvar um novo carregamento
    Route::post('/carregamento', 'MotoristaController@salvarCarregamento')->name('motorista.salvarCarregamento');
    
    // Rota para editar um carregamento existente
    Route::get('/carregamento/{id}/editar', 'MotoristaController@editarCarregamento')->name('motorista.editarCarregamento');
    
    // Rota para atualizar um carregamento existente
    Route::put('/carregamento/{id}', 'MotoristaController@atualizarCarregamento')->name('motorista.atualizarCarregamento');
    
    // Rota para excluir um carregamento existente
    Route::delete('/carregamento/{id}', 'MotoristaController@excluirCarregamento')->name('motorista.excluirCarregamento');
    
    // Rota para finalizar um carregamento
    Route::get('/carregamento/{id}/finalizar', 'MotoristaController@finalizarCarregamento')->name('motorista.finalizarCarregamento');
});

// Rotas para o usuário administrador
Route::group(['prefix' => 'admin'], function () {
    // Rota para exibir a página de gerenciamento de carregamentos
    Route::get('/carregamentos', 'AdminController@carregamentos')->name('admin.carregamentos');
    
    // Rota para exibir a página de gerenciamento de feiras
    Route::get('/feiras', 'AdminController@feiras')->name('admin.feiras');
    
    // Rota para exibir a página de gerenciamento de vendas
    Route::get('/vendas', 'AdminController@vendas')->name('admin.vendas');
    
    // Rota para exibir a página de relatório de vendas
    Route::get('/relatorio-vendas', 'AdminController@relatorioVendas')->name('admin.relatorioVendas');
});

// Rota para a página inicial
Route::get('/', function () {
    return view('home');
});