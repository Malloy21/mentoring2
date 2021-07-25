@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<div class='container'>
<body>
 
	<h3>Edit Absensi</h3>
 
	<a href="/mente/dataabsen" type="button" class="btn btn-warning">Kembali</a>
    <div class="card">
        <div class="card-body">
 

	<form action="/mente/update" method="post">
		{{ csrf_field() }}
    <table id="example" class="table  table-hover table-sm" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Kehadiran</th>
                <th>Tilawah</th>
                
            </tr>
        </thead>
        <tbody> 
            @php
            $a=0;
            $option=['hadir', 'alpa', 'sakit', 'izin'];
            @endphp
            
            @foreach($kehadiran as $o)
           
            <tr>
                
                <td><input type="text" required="required" class="form-control" name="id[{{$a}}]" value="{{ $o->id_mente }}" hidden>{{ $o->nama }}</td>
                <td><input type="text" required="required" class="form-control" name="nim[{{$a}}]" value="{{ $o->nim }}" hidden>{{ $o->nim }}</td>
                <td>
                    
   
                <select class="form-control" required="required" id="exampleFormControlSelect1" name="kehadiran[{{$a}}]">
                @if($o->kehadiran == 'hadir')
                <option required="required" class="form-control" name="kehadiran[{{$a}}]" value="{{$o->kehadiran}}" selected>Hadir</option>
                @else
                <option required="required" class="form-control" name="hadir" value="hadir">Hadir</option>
                @endif

                @if($o->kehadiran == 'alpa')
                <option required="required" class="form-control" name="kehadiran[{{$a}}]" value="{{$o->kehadiran}}" selected>Tidak Hadir</option>
                @else
                <option required="required" class="form-control" name="alpa" value="alpa">Tidak Hadir</option>
                @endif

                @if($o->kehadiran == 'izin')
                <option required="required" class="form-control" name="kehadiran[{{$a}}]" value="{{$o->kehadiran}}" selected>{{$o->kehadiran}}</option>
                @else
                <option required="required" class="form-control" name="izin" value="izin">izin</option>
                @endif

                @if($o->kehadiran == 'sakit')
                <option required="required" class="form-control" name="kehadiran[{{$a}}]" value="{{$o->kehadiran}}" selected>{{$o->kehadiran}}</option>
                @else
                <option required="required" class="form-control" name="sakit" value="sakit">sakit</option>
                @endif
                
                {{$a++}}
                
               
            </select>
               
               
            <td>
            <div class="form-group">
            <input type="text" required="required" class="form-control" name="tilawah" value="{{ $o->tilawah }}"> {{ $o->tilawah }}
            </div>
            </td>
                
            </tr>
            
            
            
            
           
            @endforeach
        </tbody>
        
    </table>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

		
</div>
</div>
</body>
</div>
</html>

@endsection
@section('script')