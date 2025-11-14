<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CRUD completo para supports
Route::resource('supports', SupportController::class);

// Página de contato
Route::get('/contato', [SiteController::class, 'contact'])->name('site.contact');


