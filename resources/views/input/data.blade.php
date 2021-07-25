@extends('layouts.app')

@section('content')
<div class="container">
    
            
                

                <div class="card-body">
                <h2>Data Mente</h2>
                <a href="/input/tambah" type="button" class="btn btn-primary">Tambah Mente</a>
                <div class="card">
                    <div class="card-body">
        <table id="example" class="table  table-hover table-sm" style="width:100%">
                        <thead>
                    <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_mente as $p)
            <tr>
                <td>{{$p->nama}}</td>
                <td>{{$p->nim}}</td>
                <td>{{$p->prodi}}</td>
                <td>{{$p->tahun}}</td>
                
                <td>
                <a href="/input/edit/{{$p->id}}" type="button" class="btn btn-warning">Edit</a>
                <a href="/input/hapus/{{$p->id}}" type="button" class="btn btn-danger">Hapus</a>
                
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