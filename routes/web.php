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
Route::get('/ogrencibilgileri', function () {
    return view('ogrencibilgilerim');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ogrencibilgileri',[App\Http\Controllers\verialmaislemleri::class, 'bilgileriyolla']);
Route::post('/kayitol', [App\Http\Controllers\verialmaislemleri::class, 'verialma'])->name('kayitol');
Route::post('/ogrGiris',[App\Http\Controllers\verialmaislemleri::class,'kontrol'])->name('kayitkontrol');
Route::get('/yonetici',[App\Http\Controllers\kaydet::class,'goster'])->name('goster');
Route::get('/yonetici',[App\Http\Controllers\kaydet::class,'danisan'])->name('danisan');