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
#userLogin
Route::get('user-login', [App\Http\Controllers\CustomerController::class, 'userlogin']);
Route::post('user-login', [App\Http\Controllers\CustomerController::class, 'loginUser']);
Route::get('user-reg', [App\Http\Controllers\CustomerController::class, 'userReg']);
Route::Post('user-reg', [App\Http\Controllers\CustomerController::class, 'userRegistraion']);
Route::get('user-logout', [App\Http\Controllers\CustomerController::class, 'Cuslogout']);


Route::get('/', [App\Http\Controllers\WebsiteController::class, 'indexUser']);
Route::get('blog/{id}', [App\Http\Controllers\WebsiteController::class, 'blogdata']);


#comment
Route::post('/commenting', [App\Http\Controllers\CommentController::class, 'postComment']);
