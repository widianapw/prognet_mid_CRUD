@extends('layouts.app')
@section('tittle','biodata')
@section('content')
	<form action="/mahasiswa/{{$mahasiswa->id}}" class="container" method="post" id="formulirku" name="formulir">
		@csrf
		@method("PUT")
	    <label for="nama">Nama :</label>
		<div class="form-group">
			<input type="input-text" class="form-control" name="nama" required="" autofocus="" value="{{$mahasiswa->nama}}" />
	    </div>
	    <br>

	    <label for="telpon">No Telpon :</label>
		<div class="form-group">
			<input type="input-text" class="form-control" name="telpon" required="" value="{{$mahasiswa->telpon}}"/>
	    </div>
	    <br>

	    <label for="email">Email :</label>
		<div class="form-group">
			<input type="email" class="form-control" name="email" required="" value="{{$mahasiswa->email}}"/>
	    </div>
	    <br>

	    <div class="form-grup">
        <label for="gender">Jenis Kelamin:</label>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Laki - Laki" @if($mahasiswa->gender==='L') checked="" @endif>Laki - laki
          </label> 
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Perempuan"@if($mahasiswa->gender==='P') checked="" @endif>Perempuan
          </label>
        </div>
      </div><br>

	    <label for="Program Studi">Program Studi :</label>
		<div class="form-group">
			<select class="form-control" required="" name="prodi" required="">
				<option value="">Pilih Prodi</option>
				@foreach($prodi as $prodi)
					<option value="{{$prodi->id}}" @if($mahasiswa->id_prodi === $prodi->id) {{"selected"}} @endif >{{$prodi->prodi}}</option>
				@endforeach
			</select>
	    </div>
	    <br>

	    <div class="form-group">
			<input type="submit" class="btn btn-success btn-lg" value="Simpan" />
	    </div>
	    <br>		

	</form>

@endsection