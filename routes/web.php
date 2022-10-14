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
    return view ('menuUtamaLogin');
});

Route::get('/menu', function () {
    return view ('menuUtama');
});

Route::get('/login', function () {
    return view ('login');
});

Route::get('/registration', function () {
    return view ('registration');
});

Route::get('/forgot', function () {
    return view ('login_forgot');
});

Route::get('/produk', function () {
    return view ('produk');
});

Route::get('/jasa', function () {
    return view ('jasa');
});

Route::get('/admin', function () {
    return view('login_admin');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/dashboard', function () {
    return view('dashboardAdmin');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/produkLogin', function () {
    return view ('produkLogin');
});

Route::get('/jasaLogin', function () {
    return view ('jasaLogin');
});