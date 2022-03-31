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
Route::get('/danisanekle', function () {
    return view('danisanekle');
});
Route::get('/belgeler', function () {
    return view('belgeler');
}); 
Route::get('/danismanogr', function () {
    return view('danismanogr');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ogrencibilgileri',[App\Http\Controllers\verialmaislemleri::class, 'bilgileriyolla']);
Route::get('/ogrAnasayfa',[App\Http\Controllers\verialmaislemleri::class, 'abilgileriyolla']);
Route::post('/kayitol', [App\Http\Controllers\verialmaislemleri::class, 'verialma'])->name('kayitol');
Route::post('/belgeler', [App\Http\Controllers\kaydet::class, 'belgeler'])->name('belge');

Route::post('/ogrGiris',[App\Http\Controllers\verialmaislemleri::class,'kontrol'])->name('kayitkontrol');
Route::get('/yonetici',[App\Http\Controllers\Vericekme::class,'goster'])->name('goster');
Route::get('/danismananasayfa',[App\Http\Controllers\DanismanController::class,'ogrencileri'])->name('dogr');
Route::post('/dnmGiris',[App\Http\Controllers\DanismanController::class,'daniskontrol'])->name('daniskontrol');


Route::get('danisanekle','App\Http\Controllers\kaydet@ekle');
Route::post('danisanekle','App\Http\Controllers\kaydet@ekle_post');

Route::get('ogrencianasayfa','App\Http\Controllers\kaydet@proje');
Route::post('ogrencianasayfa','App\Http\Controllers\kaydet@proje_post');