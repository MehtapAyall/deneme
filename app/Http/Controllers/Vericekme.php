<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OgrencikayitBilgi;
use App\Models\Danisan_hoca;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\CollectionstdClass;

class Vericekme extends Controller
{
    public function goster(){
        $ogrenci = OgrencikayitBilgi::all();
        return view('yonetici', ['ogrencikayit_bilgis' => $ogrenci]);
    
}
}
