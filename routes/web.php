<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// Site routes
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'sendContactForm'])->name('contact.send');

// Admin routes
Route::get('/admin/login', function () {
    return view('admin.admin');
})->name('admin.login');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/admin/{any}', function () {
        return view('admin.admin');
    })->where('any', '.*')->name('admin.dashboard');
});
