<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OgrencikayitBilgi;
use App\Models\Danısmen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\CollectionstdClass;

class Vericekme extends Controller
{
    public function goster(){
        $ogrenci = OgrencikayitBilgi::all();
        return view('ogrliste', ['ogrencikayit_bilgis' => $ogrenci]);
    }

    public function goster2(){
        $ogrenci = Danısmen::all();
        return view('danisanliste', ['danısmen' => $ogrenci]);
    }
}
