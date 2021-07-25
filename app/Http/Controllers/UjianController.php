<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class UjianController extends Controller
{
    public function ujian(){
        $data=[
            'data_mente'=>DB::table('data_mente')->get(),
            'data_user'=>Auth::user()->id
        ];
        return view('ujian.ujian',$data);
    }
    public function save(Request $request){
        $a=0;
        foreach($request->id_mente as $r){
            $ujian=DB::table('ujian')->insert([
                'tgl_ujian'=>$request->tgl_ujian,
                'id_mente'=>$request->id_mente[$a++],
                'id_user'=>Auth::user()->id,
                'ujian'=>$request->ujian[$a++],
             ]);
            
        }
        
        $data=[
            'data_mente'=>DB::table('data_mente')->get(),
            'data_user'=>Auth::user()->id
        ];
        return view('ujian.ujian',$data);
    }
}
