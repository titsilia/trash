<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/auth', [AuthController::class, 'auth']);

Route::post('/auth_user', [AuthController::class, 'auth_user']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register_user', [AuthController::class, 'register_user']);

Route::get('/exit', [AuthController::class, 'exit']);

Route::get('/lk', [ProfileController::class, 'lk']);

Route::post('/lk_update', [ProfileController::class, 'lk_update']);

Route::get('/articles', [ArticlesController::class, 'articles']);

Route::get('/articles/{id}', [ArticlesController::class, 'article']);

Route::get('/order', [ApplicationController::class, 'order']);

Route::post('/order_create', [ApplicationController::class, 'order_create']);

Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/admin_applications', [AdminController::class, 'admin_applications']);

    Route::get('/admin_applications/{id_app}/confirm', [AdminController::class, 'confirm']);
    Route::get('/admin_applications/{id_app}/deny', [AdminController::class, 'deny']);
    
    Route::get('/admin_articles', [AdminController::class, 'admin_articles']);
    Route::post('/articles_create', [AdminController::class, 'articles_create']);

    Route::post('/articles_update/{id}', [AdminController::class, 'articles_update']);
    Route::get('/articles_delete/{id}', [AdminController::class, 'articles_delete']);
});




