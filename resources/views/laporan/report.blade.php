@extends('layouts.app')

@section('content')
<div class=container>
<h2>Laporan</h2>
<div class="card">
    <div class="card-body">
    <table id="example" class="table  table-hover table-sm" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Absensi</th>

                <th>Ujian</th>
                
            </tr>
        </thead>
        <tbody>
          
            @foreach($data_mente as $p)
            @php
            $jumlahhadir=DB::table('kehadiran')->where('id_mente','=',$p->id)->where('kehadiran','=','hadir')->count();
            $jumlahpertemuan=DB::table('kehadiran')->groupBy('tgl_pertemuan')->get()->count();
            $ujian=DB::table('ujian')->where('id_mente','=',$p->id)->select('ujian')->first();
           
            @endphp
            <tr>
                <td>{{$p->nama}}</td>
                <td>{{$p->nim}}</td>
                <td>{{$p->prodi}}</td>
                <td>{{$p->tahun}}</td>
                <td>{{$jumlahhadir}} dari {{$jumlahpertemuan}} pertemuan</td>
                
                <td>
                @if($ujian != null)
                {{$ujian->ujian}}
                @else
                <?php echo "data belum diisi" ?>
                @endif
                </td>
                
                
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>

@endsection
@section('scripts')






    <script>
        $(document).ready(function() {
    $('#example').DataTable();

    
} );
    </script>
@endsection