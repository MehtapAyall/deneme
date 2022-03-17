<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ogrencikayitBilgi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Validator, Input, Redirect;

class verialmaislemleri extends Controller
{
    public function verialma (Request $req)
    {
      $ogrenci = new ogrencikayitBilgi();
      $ogrenci->ogrenciadi=$req->ogrenciadi;
      $ogrenci->ogrencino=$req->ogrencino;
      $ogrenci->ogrencisoyad=$req->ogrencisoyad;
      $ogrenci->ogrenciemail=$req->ogrenciemail;
      $ogrenci->ogrencisifre=Hash::make($req->ogrencisifre);
      $ogrenci->ogrencitelefon=$req->ogrencitelefon;
      $ogrenci->ogrencifakulte=$req->ogrencifakulte;
      $ogrenci->ogrencibolum=$req->ogrencibolum;
      $ogrenci->ogrencisinif=$req->ogrencisinif;
      if($req->hasfile('image'))
              {
                  $file = $req->file('image');
                  $extenstion = $file->getClientOriginalExtension();
                  $filename = time().'.'.$extenstion;
                  $file->move('uploads/ogrenci/', $filename);
                  $ogrenci->image = $filename;
              }
      $ogrenci->save();
      return redirect('ogrGiris');

    }
    function kontrol(Request $request){
        //Validate requests
    $validator = Validator::make($request->all(), [
          'ogrencino'=>'required|ogrencino|unique:ogrencikayit_bilgis',
          'ogrencisifre'=>'required|ogrencisifre|min:5|max:12',

        ]);

        $userInfo = ogrencikayitBilgi::where('ogrencino','=', $request->ogrencino)->first();

        if(!$userInfo){
            return back()->with('fail','Numaraya kayıtlı Ögrenci yok');
        }else{
            //check password
            if(Hash::check($request->ogrencisifre, $userInfo->ogrencisifre)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('ogrAnasayfa');

            }else{
                return back()->with('fail','sifre Yanlıs');
            }
        }
    }

    function bilgileriyolla(){
        $data = ['LoggedUserInfo'=>ogrencikayitBilgi::where('id','=', session('LoggedUser'))->first()];
        return view('ogrencibilgilerim', $data);
 
    }
}
