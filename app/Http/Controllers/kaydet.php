<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danısmen;
use App\Models\Projeler;
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
        $deger->sifre = $req->input('sifre');
        $deger->ePosta = $req->input('posta');
        $deger->save();
        return redirect('danisanekle');
    }
}
