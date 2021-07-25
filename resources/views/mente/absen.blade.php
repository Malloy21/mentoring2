@extends('layouts.app')

@section('content')

<div class=container>
    <h2>Absen Kehadiran</h2>
<div class="card">
    <div class="card-body">
    <a href="/mente/dataabsen" type="button" class="btn btn-warning">Kembali</a>
    <form action="{{url('/mente/absen/simpan')}}" method="post">
		{{ csrf_field() }}
    Pertemuan <input type="date" name="tgl_pertemuan" required="required"> <br/>

    <table id="example" class="table  table-hover table-sm" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Kehadiran</th>
                <th>Tilawah</th>
                <!-- <th>Ujian</th> -->
            </tr>
        </thead>
        <tbody> 
            @php
            $a=0;
            @endphp
            @foreach($data_mente as $p)
           
            <tr>
                <td hidden> <input class="form-control" type="text" aria-label="default input example" name="id_mente[{{$a++}}]" value="{{$p->id}}"></td>
                <td name='nama'>{{$p->nama}}</td>
                <td name='nim'>{{$p->nim}}</td>
                <td>
                <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1" name="kehadiran[{{$a++}}]">
                <option>-</option>
                <option value="hadir">Hadir</option>
                <option value="alpa">Tidak Hadir</option>
                <option value="sakit">Sakit</option>
                <option value="izin">Izin</option>
                </select>
                </div>
                </td>
                <td>
                <div class="form-group">
                <input class="form-control" type="text" name="tilawah[{{$a++}}]" placeholder="Masukkan Nilai" aria-label="default input example">
                </div>
                </td>
                <!-- <td>
                <div class="form-group">
                <input class="form-control" type="text" placeholder="Masukkan Nilai" aria-label="default input example">
                </div>
                </td> -->
                
            </tr>
            
            @endforeach
        </tbody>
        
    </table>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
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