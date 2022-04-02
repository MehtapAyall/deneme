<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OgrencikayitBilgi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;
use Validator, Input, Redirect;
use App\Models\Atama;
use App\Models\proje_basvuru;
use App\Models\Danısmen;
use Illuminate\Support\Facades\DB;

class verialmaislemleri extends Controller
{
    public function verialma (Request $req)
    {
      $ogrenci = new OgrencikayitBilgi();
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
      $atama = new Atama();
        $atama->ogrno=$req->ogrencino;
        $atama->ograd=$req->ogrenciadi;
        $atama->save();

        
        DB::transaction(function(){
            
            $ids=DB::table('ogrencikayit_bilgis')->get();
            foreach ($ids as $key => $id) {#foreach gereksiz olabilir
                try {
                    for ($i=1; $i < 5; $i++) { 
                        $ad = DB::table('danısmens')->find(1);#id si 1 olan danışmanı değişkene atama
                        DB::table('atamas')->where('id','=',$i)->update(['danisman' => $ad->ad]);
                        DB::table('ogrencikayit_bilgis')->where('ogrencino','=',session('no'))->update(['danisman' => $ad->ad]);
                        #atama tablosuna id si 1 olan danışmanı id si 1 den 5 e kadar olan öğrencilere yazdırma
                    }
                } catch (\Throwable $th) {
                    
                }
                   
                    try {
                        for ($i=5; $i < 10; $i++) { 
                        $ad = DB::table('danısmens')->find(2);
                        DB::table('atamas')->where('id','=',$i)->update(['danisman' => $ad->ad]); 
                        DB::table('ogrencikayit_bilgis')->where('ogrencino','=',session('no'))->update(['danisman' => $ad->ad]);
                    }
                    } catch (\Throwable $th) {
                       
                    }
                    
                   
                    try {
                        for ($i=10; $i < 15; $i++) { 
                        $ad = DB::table('danısmens')->find(3);
                        DB::table('atamas')->where('id','=',$i)->update(['danisman' => $ad->ad]);
                        DB::table('ogrencikayit_bilgis')->where('ogrencino','=',session('no'))->update(['danisman' => $ad->ad]);
                    }
                    } catch (\Throwable $th) {
                        
                    }
                    try {
                        for ($i=15; $i < 20; $i++) { 
                        $ad = DB::table('danısmens')->find(4);
                        DB::table('atamas')->where('id','=',$i)->update(['danisman' => $ad->ad]);
                        DB::table('ogrencikayit_bilgis')->where('ogrencino','=',session('no'))->update(['danisman' => $ad->ad]);
                    }
                    } catch (\Throwable $th) {
                        
                    }
                    try {
                        for ($i=20; $i < 25; $i++) { 
                        $ad = DB::table('danısmens')->find(5);
                        DB::table('atamas')->where('id','=',$i)->update(['danisman' => $ad->ad]);
                        DB::table('ogrencikayit_bilgis')->where('ogrencino','=',session('no'))->update(['danisman' => $ad->ad]);
                    }
                    } catch (\Throwable $th) {
                        
                    }
                    try {
                        for ($i=25; $i < 30; $i++) { 
                        $ad = DB::table('danısmens')->find(6);
                        DB::table('atamas')->where('id','=',$i)->update(['danisman' => $ad->ad]);
                        DB::table('ogrencikayit_bilgis')->where('ogrencino','=',session('no'))->update(['danisman' => $ad->ad]);
                    }
                    } catch (\Throwable $th) {
                        
                    }
                    try {
                        for ($i=30; $i < 35; $i++) { 
                        $ad = DB::table('danısmens')->find(7);
                        DB::table('atamas')->where('id','=',$i)->update(['danisman' => $ad->ad]);
                        DB::table('ogrencikayit_bilgis')->where('id','=',session('LoggedUser'))->update(['danisman' => $ad->ad]);

                    }
                    } catch (\Throwable $th) {
                        
                    }
                    

                
            }
                        
            });
                
        

      return redirect('ogrGiris');

    }
    function kontrol(Request $request){
        //Validate requests
    $validator = Validator::make($request->all(), [
          'ogrencino'=>'required|ogrencino|unique:ogrencikayit_bilgis',
          'ogrencisifre'=>'required|ogrencisifre|min:5|max:12',

        ]);

        $userInfo = OgrencikayitBilgi::where('ogrencino','=', $request->ogrencino)->first();

        if(!$userInfo){
            return back()->with('fail','Numaraya kayıtlı Ögrenci yok');
        }else{
            //check password
            if(Hash::check($request->ogrencisifre, $userInfo->ogrencisifre)){
                $request->session()->put('LoggedUser', $userInfo->id);
                $request->session()->put('no', $userInfo->ogrencino);
                $request->session()->put('danisman', $userInfo->danisman);
                return redirect('ogrAnasayfa');

            }else{
                return back()->with('fail','sifre Yanlıs');
            }
        }
    }

    function bilgileriyolla(){
        $data = ['LoggedUserInfo'=>OgrencikayitBilgi::where('id','=', session('LoggedUser'))->first()];
        return view('ogrencibilgilerim', $data);
 
    }
    function abilgileriyolla(){
        $data = ['LoggedUserInfo'=>OgrencikayitBilgi::where('id','=', session('LoggedUser'))->first()];
        return view('ogrencianasayfa', $data);
 
    }
    function bbilgileriyolla(){
        $data = ['LoggedUserInfo'=>OgrencikayitBilgi::where('id','=', session('LoggedUser'))->first()];
        return view('belgeler', $data);
 
    }
    
    public function onaylanmadurumu()
    {      
       $ogrenci=proje_basvuru::where('ogrno','=',session('no'))->get('durum');
       
       
          switch ($ogrenci) {
           case '[{"durum":"onay"}]':
            $data = ['LoggedUserInfo'=>OgrencikayitBilgi::where('id','=', session('LoggedUser'))->first()];
            return view('belgeler', $data);
            
               break;
           
           default:
           return back()->with('fail','Projeniz onaylanmadığı için rapor yükleyemezsiniz.');
               break;
       }
    
        
    
    }
    public function rpr($id)
    {

        $ogrenci=proje_basvuru::find($id);
        switch ($ogrenci->durum) {
            case '[{"durum":"onay"}]':
             $data = ['LoggedUserInfo'=>OgrencikayitBilgi::where('id','=', session('LoggedUser'))->first()];
             return view('belgeler', $data);
             
                break;
            
            default:
            return back()->with('fail','Projeniz onaylanmadığı için rapor yükleyemezsiniz.');
                break;
            }
    }
     public function ogrencileriprj()
    {
       
       $ogrencisi=DB::table('proje_basvurus')->where('ogrno','=',session('no'))->get();            
       return view('benimbasvurularim',['ogrencisi'=> $ogrencisi]);
        
    }
}
