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
        $ogrenci = DB::table('OgrencikayitBilgi') ->get();
        return view('yonetici', ['OgrencikayitBilgi' => $ogrenci]);
    
}
}
