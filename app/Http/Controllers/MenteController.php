<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class MenteController extends Controller
{
    public function dataabsen(){
        $data=[
            'kehadiran'=>DB::table('kehadiran')->groupBy('tgl_pertemuan')->get(),
        ];
        return view('mente.dataabsen',$data);
    }
    public function absen(){
        $data=[
            'data_mente'=>DB::table('data_mente')->get(),
            'data_user'=>Auth::user()->id
        ];
        return view('mente.absen',$data);
    }
    public function simpan(Request $request){
        $a=0;
        foreach($request->id_mente as $r){
            $kehadiran=DB::table('kehadiran')->insert([
                'tgl_pertemuan'=>$request->tgl_pertemuan,
                'id_mente'=>$request->id_mente[$a++],
                'id_user'=>Auth::user()->id,
                'kehadiran'=>$request->kehadiran[$a++],
                'tilawah'=>$request->tilawah[$a++],
             ]);
            
        }
        
        $data=[
            'data_mente'=>DB::table('data_mente')->get(),
            'data_user'=>Auth::user()->id,
            'kehadiran'=>DB::table('kehadiran')->groupBy('tgl_pertemuan')->get()
        ];
        return view('mente.dataabsen',$data);
    }
    public function edit($date)
    {
	$data=[
        
        'data_user'=>Auth::user()->id,
        'kehadiran'=>DB::table('kehadiran')->join('data_mente', 'data_mente.id', 'kehadiran.id_mente')->where('tgl_pertemuan',$date)->get()
    ];
    
	return view('mente.edit', $data);
    }
    public function update(Request $request){
    //        dd($request);
    // die();
        $kehadiran=DB::table('kehadiran')->where('id',$request->id)->update([
            'tgl_pertemuan' => $request->tgl_pertemuan,
            'hadir' => $request->hadir,
            'alpa' => $request->alpa,
            'izin' => $request->izin,
            'sakit' => $request->sakit,
            
        ]);
        $data=[
            'kehadiran'=>DB::table('kehadiran')->get(),
            'data_mente'=>DB::table('data_mente')->get(),
            'data_user'=>Auth::user()->id,
            'kehadiran'=>DB::table('kehadiran')->groupBy('tgl_pertemuan')->get()
        ];
        return view('mente.dataabsen',$data);
    }
    public function hapus($id)
    {
	DB::table('kehadiran')->where('tgl_pertemuan',$id)->delete();
		
	return redirect('/mente/dataabsen');
    }
    
    
    
}
