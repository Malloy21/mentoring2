@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<div class='container'>
<body>
 
	<h3>Edit Data Mente</h3>
 
	<a href="/input/data" type="button" class="btn btn-warning">Kembali</a>
    <div class="card">
        <div class="card-body">
 
	@foreach($data_mente as $p)
	<form action="/input/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" class="form-control" name="nama" value="{{ $p->nama }}"> <br/>
		Nim <input type="text" required="required" class="form-control" name="nim" value="{{ $p->nim }}"> <br/>
		Prodi <input type="text" required="required" class="form-control" name="prodi" value="{{ $p->prodi }}"> <br/>
		Angkatan <input type="text" required="required" class="form-control" name="angkatan" value="{{ $p->tahun }}"> <br/>
		
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	@endforeach
		
</div>
</div>
</body>
</div>
</html>

@endsection
@section('script')