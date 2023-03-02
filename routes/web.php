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
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "Faradisha 2141720159";
});

Route::get('/article/1', function ($id) {
    echo "Halaman artikel dengan id 1";
});
Route::get('/article/2', function () {
    echo "Halaman artikel dengan id 2";
});

Route::get('/', function ($id) {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "Faradisha 2141720159";
});
    

Route::get('article/{id}', function ($id=1) {
    echo "Halaman artikel dengan id 1";
});

Route::get('article/{id}', function ($id=2) {
    echo "Halaman artikel dengan id 2";
});