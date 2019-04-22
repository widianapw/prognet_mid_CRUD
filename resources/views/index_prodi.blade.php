@extends('layouts.app')
@section('tittle','Program Studi')
@section('content')
<a href="/prodi/create"><button class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah data</button></a><br><br>
<div class="table-responsive-sm">
<table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Prodi</th>
      </tr>
    </thead>
    <tbody>
 
      @foreach($prodi as $prodi)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$prodi['prodi']}}</td>
 
      <td align="right"><a href="/prodi/{{$prodi->id}}/edit" class="btn btn-warning">Edit</a></td>
        <td align="left">
          <form action="/prodi/{{$prodi->id}}" method="post">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  @endsection