<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Auth::routes();
Route::get('/all-blogs', [PostController::class, 'blogs']);
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'admin_dashboard']);
    Route::get('/posts/view', [PostController::class, 'index']);
    Route::get('/create-posts/{id?}', [PostController::class, 'create']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::post('/posts/{id}', [PostController::class, 'update']);
    Route::get('/posts-delete/{id}', [PostController::class, 'destroy']);
});
