<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function report(){
        $jumlahhadir=

        $data=[
            'kehadiran'=>DB::table('kehadiran')-> join('data_mente', 'kehadiran.id_mente','data_mente.id')->get(),
            'data_mente'=>DB::table('data_mente')->get(),
            
        ];
        // dd($data);
        // die();
        return view('laporan.report',$data);
    }
}
