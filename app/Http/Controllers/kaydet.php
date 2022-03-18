<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ogrenci;
use App\Models\danisan_hoca;

class kaydet extends Controller
{
    public function goster(){
        $ogrenci = ogrenci::all();

        return view('yonetici',array('ogrenci'=>$ogrenci));
    }

    public function danisan(){
        $danisan = danisan_hoca::all();

        return view('yonetici',array('danisan_hoca'=>$danisan));
    }
}
