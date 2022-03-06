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
    return view('ogrencianasayfa');
});
Route::get('/danismananasayfa', function () {
    return view('danismananasayfa');
});
Route::get('/danismankyt', function () {
    return view('danismankyt');
});
Route::get('/yonetici', function () {
    return view('yonetici');
});
Route::get('/sistemyont', function () {
    return view('yoneticigiris');
});
<<<<<<< HEAD
=======

Route::get('/dene', function () {
    return view('deneme');
});

>>>>>>> ec1f09b2397c3a452727270dcc150d624ff1306e
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
