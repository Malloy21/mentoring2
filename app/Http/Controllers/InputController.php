<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
{
    public function data(){
        $data=[
            'data_mente'=>DB::table('data_mente')->get()
        ];
        return view('input.data',$data);
    }
    public function tambah(){
        return view('input.tambah');
    }
    public function simpan(Request $request){
        $data_mente=DB::table('data_mente')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'tahun' => $request->angkatan
        ]);
        $data=[
            'data_mente'=>DB::table('data_mente')->get()
        ];
        return view('input.data',$data);
    }
    public function edit($id)
    {
	$data=[
        'data_mente'=> DB::table('data_mente')->where('id',$id)->get()
    ];
	return view('input.edit', $data);
    }
    public function update(Request $request){
        $data_mente=DB::table('data_mente')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'tahun' => $request->angkatan
        ]);
        $data=[
            'data_mente'=>DB::table('data_mente')->get()
        ];
        return view('input.data',$data);
    }
    public function hapus($id)
    {
	DB::table('data_mente')->where('id',$id)->delete();
		
	return redirect('/input/data');
    }
}
