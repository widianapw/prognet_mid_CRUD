@extends('layouts.app')
@section('tittle','Program Studi')
@section('content')
	<form action="/prodi" class="container" method="post" id="formulirku" name="formulir">
		@csrf
	    <label for="nama">Nama Prodi :</label>
		<div class="form-group">
			<input type="input-text" class="form-control {{ $errors->has('prodi') ? ' is-invalid' : '' }}" value="{{ old('prodi') }}" name="prodi" />
            @if ($errors->has('prodi'))
	            <span class="invalid-feedback" role="alert">
	            	<strong>{{ $errors->first('prodi') }}</strong>
	            </span>
            @endif
	    </div>
	    <br>

	    <div class="form-group">
			<input type="submit" class="btn btn-success btn-lg" value="Tambahkan"/>
	    </div>
	    <br>		

	</form>

@endsection