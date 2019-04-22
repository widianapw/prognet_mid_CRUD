@extends('layouts.app')
@section('tittle','biodata')
@section('content')
	<form action="/prodi/{{$prodi->id}}" class="container" method="post" id="formulirku" name="formulir">
		@csrf
		@method("PUT")
	    <label for="nama">Nama :</label>
		<div class="form-group">
			<input type="input-text" class="form-control" name="prodi" value="{{$prodi->prodi}}" />
	    </div>
	    <br>

	    <div class="form-group">
			<input type="submit" class="btn btn-success btn-lg" value="Simpan" />
	    </div>
	    <br>		

	</form>

@endsection