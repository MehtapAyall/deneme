<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Atama;

use App\Models\OgrencikayitBilgi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

use Validator, Input, Redirect;

use App\Models\Danısmen;


class DanismanController extends Controller
{
    public function ogrencileri()
    {
       
       $ogrencisi=DB::table('proje_basvurus')->where('danisman','=',session('dUser'))->get();            
       return view('danismananasayfa',['ogrencisi'=> $ogrencisi]);
        
    }
    
        
 
    
    function daniskontrol(Request $request){
        $validator = Validator::make($request->all(), [
                'ad'=>'required|dad|unique:danısmens',
                'sifre'=>'required|dsifre|min:1|max:12',

                ]);

        $userInfo=DB::table('danısmens')->where('ad','=',$request->dad)->first();


        //Validate requests
    

       

        if(!$userInfo){
            return back()->with('fail','Ada sahip danışman yok');
        }else{
            //check password
            if(Hash::check($request->dsifre, $userInfo->sifre)){
                $request->session()->put('dUser', $userInfo->ad);
                return redirect('danismananasayfa');

            }else{
                return back()->with('fail','sifre Yanlıs');
            }
        }
    }
}
