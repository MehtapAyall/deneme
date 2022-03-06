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
    return view('anasayfa') ;
});

Route::get('/ogrGiris', function () {
    return view('orgenciGiris');
});

Route::get('/dnmGiris', function () {
    return view('danismanGiris');
});

Route::get('/kayitol', function () {
    return view('kayitOl');
});

Route::get('/ogrAnasayfa', function () {
    return view('ogrenciAnasayfa');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
