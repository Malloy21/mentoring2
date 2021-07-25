@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<div class="container">
<body>
 
	
	<h3>Tambah Mente</h3>
 
    <a href="/input/data" type="button" class="btn btn-warning">Kembali</a>
	<div class="card">
        <div class="card-body">
    
	<form action="/input/simpan" method="post">
		{{ csrf_field() }}
        
        Nama <input type="text" class="form-control" name="nama" required="required"> <br/>
		Nim <input type="text" class="form-control" name="nim" required="required"> <br/>
		Prodi <input type="text" class="form-control" name="prodi" required="required"> <br/>
		Angkatan <input type="text" class="form-control" name="angkatan" required="required"> <br/>
		
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</body>
</div>
</html>
@endsection
@section('script')