@extends('layouts.app')

@section('content')

<div class=container>
    <h2>Absen Kehadiran</h2>
<div class="card">
    <div class="card-body">
    <a href="/mente/absen" type="button" class="btn btn-primary">Tambah Absensi</a>
    <table id="example" class="table  table-hover table-sm" style="width:100%">
        <thead>
            <tr>
                <th>Tanggal Pertemuan</th>
                <th>Hadir</th>
                <th>Tidak Hadir</th>
                <th>Izin</th>
                <th>Sakit</th>
                <th>Tindakan</th>
                
            </tr>
        </thead>
        <tbody> 
            
            @foreach($kehadiran as $p)
           
            <tr>
                
                <td name='tgl_pertemuan'>{{$p->tgl_pertemuan}}</td>
                @php
                $jumlahhadir=DB::table('kehadiran')->where('tgl_pertemuan',$p->tgl_pertemuan)->where('kehadiran', 'hadir')->count();
                $jumlahalpa=DB::table('kehadiran')->where('tgl_pertemuan',$p->tgl_pertemuan)->where('kehadiran', 'alpa')->count();
                $jumlahizin=DB::table('kehadiran')->where('tgl_pertemuan',$p->tgl_pertemuan)->where('kehadiran', 'izin')->count();
                $jumlahsakit=DB::table('kehadiran')->where('tgl_pertemuan',$p->tgl_pertemuan)->where('kehadiran', 'sakit')->count(); 
                @endphp
                <td>{{$jumlahhadir}}</td>
                <td>{{$jumlahalpa}}</td>
                <td>{{$jumlahizin}}</td>
                <td>{{$jumlahsakit}}</td>

                <td>
                <!-- <a href="/mente/edit/{{$p->tgl_pertemuan}}" type="button" class="btn btn-warning">Edit</a> -->
                <a href="/mente/hapus/{{$p->tgl_pertemuan}}" type="button" class="btn btn-danger">Hapus</a>
                
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