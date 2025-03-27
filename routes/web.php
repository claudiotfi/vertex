<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// Rotas Públicas
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'sendContactForm'])->name('contact.send');

// Rota para CSRF cookie
Route::get('/sanctum/csrf-cookie', function () {
    return response()->json(['message' => 'CSRF cookie set']);
});

// Rotas de Admin
Route::get('/admin/login', function () {
    return view('admin.admin');
})->name('admin.login');

// Rota coringa para o painel administrativo, protegida por autenticação Sanctum.
// Captura qualquer URL começando com '/admin/' e retorna a view 'admin.admin'.
// Ideal para uma SPA onde o front-end gerencia a navegação dinâmica.
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/admin/{any}', function () {
        return view('admin.admin');
    })->where('any', '.*')->name('admin.dashboard');
});
