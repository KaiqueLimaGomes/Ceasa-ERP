<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Rotas de autenticação
Auth::routes();

// Rotas para usuários autenticados
Route::group(['middleware' => 'auth'], function () {
    // Rota inicial após o login
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Rotas de usuários
    Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);

    // Rotas de carregamentos
    Route::resource('carregamentos', App\Http\Controllers\CarregamentoController::class);
    Route::resource('carregamentos.caixas_verduras', App\Http\Controllers\CaixaVerduraCarregamentoController::class)->shallow();

    // Rota de estoque
    Route::get('estoque', [App\Http\Controllers\EstoqueController::class, 'index'])->name('estoque.index');
    Route::get('estoque/create/{id}', [App\Http\Controllers\EstoqueController::class, 'create'])->name('estoque.create');
    Route::post('estoque', [App\Http\Controllers\EstoqueController::class, 'store'])->name('estoque.store');
    Route::get('estoque/{id}/edit', [App\Http\Controllers\EstoqueController::class, 'edit'])->name('estoque.edit');
    Route::put('estoque/{id}', [App\Http\Controllers\EstoqueController::class, 'update'])->name('estoque.update');
    Route::delete('estoque/{id}', [App\Http\Controllers\EstoqueController::class, 'destroy'])->name('estoque.destroy');

    // Rotas de feiras
    Route::resource('feiras', App\Http\Controllers\FeiraController::class);

    // Rotas de vendas
    Route::resource('vendas', App\Http\Controllers\VendaController::class);

    // Rota de relatório de vendas
    Route::resource('relatorio-vendas', App\Http\Controllers\RelatorioVendasController::class);
});

