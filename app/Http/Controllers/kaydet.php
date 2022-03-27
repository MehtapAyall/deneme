<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danısman;
use App\Models\Projeler;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\CollectionstdClass;

class kaydet extends Controller
{
    public function ekle()
    {
        return view('danisanekle');
    }
    public function ekle_post(Request $req)
    {
        $deger = new Danısman;
        $deger->ad = $req->input('ad');
        $deger->soyad = $req->input('soyad');
        $deger->unvan = $req->input('unvan');
        $deger->sifre = $req->input('sifre');
        $deger->ePosta = $req->input('posta');
        $deger->save();
        return redirect('danisanekle');
    }
}
