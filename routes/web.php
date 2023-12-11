<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/article', function () {
    return view('article');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/lk', function () {
    return view('lk');
});

Route::get('/order', function () {
    return view('order');
});


Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/admin/applications', function () {
        return view('admin.applications');
    });
    
    Route::get('/admin/adminArticle', function () {
        return view('admin.adminArticle');
    });
});




