<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminAuthController;

Route::get('/sanctum/csrf-cookie', function () {
    return response()->json(['message' => 'CSRF cookie set']);
});

Route::prefix('admin')->group(function () {
    Route::get('/check-auth', [AdminAuthController::class, 'checkAuth']);
    Route::post('/login', [AdminAuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout']);
        Route::get('/dashboard', [AdminController::class, 'dashboard']);

        // CRUD Blog
        Route::get('/blogs', [AdminController::class, 'listBlogs']);
        Route::post('/blogs', [AdminController::class, 'createBlog']);
        Route::put('/blogs/{blog}', [AdminController::class, 'updateBlog']);
        Route::delete('/blogs/{blog}', [AdminController::class, 'deleteBlog']);

        // Gestão de Usuários
        Route::get('/users', [AdminController::class, 'listUsers']);
        Route::post('/users', [AdminController::class, 'createUser']);
        Route::put('/users/{user}', [AdminController::class, 'updateUser']);
        Route::delete('/users/{user}', [AdminController::class, 'deleteUser']);
    });
});
