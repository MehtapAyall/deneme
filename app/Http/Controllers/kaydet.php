<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OgrencikayitBilgi;
use App\Models\Danisan_hoca;

class kaydet extends Controller
{
    public function goster(){
        $ogrenci = OgrencikayitBilgi::all();

        return view('yonetici',array('ogrencikayit_bilgis'=>$ogrenci));
    }

    public function danisan(){
        $danisan = Danisan_hoca::all();

        return view('yonetici',array('danisan_hocas'=>$danisan));
    }
}
