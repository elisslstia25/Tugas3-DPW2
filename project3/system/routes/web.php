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
    return view('welcome');
});

Route::get('template', function () {
    return view('admin.template.base');
});

Route::get('admin/produk', function () {
    return view('admin.produk.index');
});

Route::get('admin/kategori', function () {
    return view('admin.kategori.index');
});

Route::get('admin/user', function () {
    return view('admin.user.index');
});

Route::get('admin/beranda', function () {
    return view('admin.beranda');
});

Route::get('login', function () {
    return view('login');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/fruits', function () {
    return view('fruits');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});


