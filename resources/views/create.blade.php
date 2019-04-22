@extends('layouts.app')
@section('tittle','mahasiswa')
@section('content')
	<form action="/mahasiswa" class="container" method="post" id="formulirku" name="formulir">
		@csrf
	    <label for="nama">Nama :</label>
		<div class="form-group">
			<input type="input-text" class="form-control {{ $errors->has('nama') ? ' is-invalid' : '' }}" value="{{old('nama')}}" name="nama" required="" autofocus="" />
			@if ($errors->has('nama'))
	            <span class="invalid-feedback" role="alert">
	            	<strong>{{ $errors->first('nama') }}</strong>
	            </span>
            @endif
	    </div>
	    <br>

	    <label for="telpon">No Telpon :</label>
		<div class="form-group">
			<input type="input-text" class="form-control {{ $errors->has('telpon') ? ' is-invalid' : '' }}" value="{{old('telpon')}}" name="telpon" required="" />
			@if ($errors->has('telpon'))
	            <span class="invalid-feedback" role="alert">
	            	<strong>{{ $errors->first('telpon') }}</strong>
	            </span>
            @endif
	    </div>
	    <br>

	    <label for="email">Email :</label>
		<div class="form-group">
			<input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{old('email')}}" name="email" required="" />
			@if ($errors->has('email'))
	            <span class="invalid-feedback" role="alert">
	            	<strong>{{ $errors->first('email') }}</strong>
	            </span>
            @endif
	    </div>
	    <br>

	    <div class="form-grup">
        <label for="gender">Jenis Kelamin:</label>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input {{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="L">Laki - laki
          </label> 
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input {{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="P">Perempuan
          </label>
        </div>
        @if ($errors->has('gender'))
	            <span class="invalid-feedback" role="alert">ss
	            	<strong>{{ $errors->first('gender') }}</strong>
	            </span>
            @endif
      </div><br>

	    <label for="Program Studi">Program Studi :</label>
		<div class="form-group">
			<select class="form-control {{ $errors->has('prodi') ? ' is-invalid' : '' }}" required="" name="prodi" required="">
				<option value="">Pilih Prodi</option>
				@foreach($prodi as $prodi)
					<option value="{{$prodi->id}}">{{$prodi->prodi}}</option>
				@endforeach
			</select>
			@if ($errors->has('prodi'))
	            <span class="invalid-feedback" role="alert">ss
	            	<strong>{{ $errors->first('prodi') }}</strong>
	            </span>
            @endif
	    </div>
	    <br>

	    <div class="form-group">
			<input type="submit" class="btn btn-success btn-lg" value="Tambahkan" />
	    </div>
	    <br>		

	</form>

@endsection