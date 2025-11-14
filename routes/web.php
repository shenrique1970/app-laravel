<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('site/contato');
});

// CRUD completo para supports
Route::resource('supports', SupportController::class);

// Página de contato
Route::get('/contato', [SiteController::class, 'contact'])->name('site.contact');

// Rota para salvar um novo suporte (método store do SupportController).
//Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

// Rota para exibir o formulário de criação de suporte.
//Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

// Rota para listar todos os suportes (método index).
//Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

// Rota para a página de contato (método contact do SiteController).
//Route::get('/contato', [SiteController::class, 'contact']);

