<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danısmen;
use App\Models\OgrencikayitBilgi;

use App\Models\Projeler;
use App\Models\proje_basvuru;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\CollectionstdClass;
use Illuminate\Support\Facades\Hash;

class kaydet extends Controller
{
    public function ekle()
    {
        return view('danisanekle');
    }
    public function ekle_post(Request $req)
    {
        $deger = new Danısmen;
        $deger->ad = $req->input('ad');
        $deger->soyad = $req->input('soyad');
        $deger->unvan = $req->input('unvan');
        $deger->sifre=Hash::make($req->sifre);
        $deger->ePosta = $req->input('posta');
        $deger->save();
        return redirect('danisanekle');
    }


    public function proje()
    {
        return view('ogrAnasayfa');
    }
    public function proje_post(Request $req)
    {   
               


        $al = new Proje_basvuru;
        $al->baslik = $req->input('baslik');
        $al->amac = $req->input('amac');
        $al->meteryal = $req->input('meteryal');
        $al->anahtar1 = $req->input('anahtar1');
        $al->anahtar2 = $req->input('anahtar2');
        $al->anahtar3 = $req->input('anahtar3');
        $al->anahtar4 = $req->input('anahtar4');
        $al->anahtar5 = $req->input('anahtar5');
        $al->ogrno = $req->input('num');
        $al->danisman = $req->input('danisman');
        $al->durum = $req->input('durum');

        $al->save();       

        return redirect('ogrAnasayfa');
    }
}
