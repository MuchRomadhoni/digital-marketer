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

Route::get('/jasa-iklan-digital', function () {
    return view('products.jasaiklan');
});

Route::get('/social-media-all-in', function () {
    return view('products.social-media-all-in');
});

Route::get('/manajemen-marketplace', function () {
    return view('products.manajemen-marketplace');
});

Route::get('/endorse-influencer', function () {
    return view('products.endorse-influencer');
});

Route::get('/conversion-umkm', function () {
    return view('products.conversion-umkm');
});