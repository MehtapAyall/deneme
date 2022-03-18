<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OgrencikayitBilgi;
use App\Models\Danısman;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\CollectionstdClass;

class kaydet extends Controller
{
    public function goster(){
            $ogrenci = DB::table('ogrencikayit_bilgis') ->get();
            return view('yonetici', ['ogrencikayit_bilgis' => $ogrenci]);
        
    }

    public function danisan(){
        $danisan = Danısman::all();

        return view('yonetici',array('danisan_hocas'=>$danisan));
    }
}
