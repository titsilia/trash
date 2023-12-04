<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/register', function () {
    return view('register');
});

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



Route::get('/admin/applications', function () {
    return view('admin.applications');
});

Route::get('/admin/adminArticle', function () {
    return view('admin.adminArticle');
});


