@extends('layouts.app')
@section('tittle','biodata')
@section('content')
<a href="/mahasiswa/create"><button class="btn btn-primary"> <i class="fa fa-plus"> </i> Tambah data</button></a><br><br>
<div class="table-responsive-sm">
<table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No Telpon</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Prodi</th>
      </tr>
    </thead>
    <tbody>
 
      @foreach($mahasiswa as $mahasiswa)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$mahasiswa['nama']}}</td>
        <td>{{$mahasiswa['telpon']}}</td>
        <td>{{$mahasiswa['email']}}</td>
        <td>{{$mahasiswa['gender']}}</td>
        <td>{{$mahasiswa['prodi']}}</td>
 
      <td align="right"><a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning">Edit</a></td>
        <td align="left">
          <form action="/mahasiswa/{{$mahasiswa->id}}" method="post">
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