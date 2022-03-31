<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danısmen;
use App\Models\OgrencikayitBilgi;
use App\Models\Belgeler;
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
               
        $deger=$req->input('baslik');
        $sonuc = str_word_count($deger);
        $deger2=$req->input('meteryal');
        $sonuc2 = str_word_count($deger);

        if((int)$sonuc < 200 && (int)$sonuc2 < 300)
        {
            return  back()->with('fail','Amac, önem, kapsam 200 kelimeden, meteryal yöntem olanak 300 kelimeden fazla olmalıdır');
            
        }
        else
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

    public function belgeler(Request $req)
    {

        $belge = new Belgeler();
        $belge->ogrno = $req->input('num');
        if($req->hasfile('bel1'))
        {
            $file = $req->file('bel1');
            $extenstion = $file->getClientOriginalExtension();
            $filename = $req->input('num').'.'.$extenstion;
            $file->move('public/begeler/', $filename);
            $belge->belge1 = $filename;
        }
        if($req->hasfile('bel2'))
        {
            $file = $req->file('bel2');
            $extenstion = $file->getClientOriginalExtension();
            $filename = $req->input('num').'.'.$extenstion;
            $file->move('public/begeler/', $filename);
            $belge->belge2 = $filename;
        }
        if($req->hasfile('bel3'))
        {
            $file = $req->file('bel3');
            $extenstion = $file->getClientOriginalExtension();
            $filename = $req->input('num').'.'.$extenstion;
            $file->move('public/begeler/', $filename);
            $belge->belge3 = $filename;
        }
        if($req->hasfile('pdf1'))
        {
            $file = $req->file('pdf1');
            $extenstion = $file->getClientOriginalExtension();
            $filename = $req->input('num').'.'.$extenstion;
            $file->move('public/begeler/', $filename);
            $belge->pdf1 = $filename;
        }
        if($req->hasfile('pdf2'))
        {
            $file = $req->file('pdf2');
            $extenstion = $file->getClientOriginalExtension();
            $filename = $req->input('num').'.'.$extenstion;
            $file->move('public/begeler/', $filename);
            $belge->pdf2 = $filename;
        }
        if($req->hasfile('pdf3'))
        {
            $file = $req->file('pdf3');
            $extenstion = $file->getClientOriginalExtension();
            $filename = $req->input('num').'.'.$extenstion;
            $file->move('public/begeler/', $filename);
            $belge->pdf3 = $filename;
        }
      $belge->save();
      return redirect('ogrAnasayfa');
    }

}
