@extends('layout')

@section('konten')

<h4>Edit Pegawai</h4>

<form action="{{ route('pegawai.update', $pegawai->id) }}" method="post">
    @csrf
    <label>NIK</label>
    <input type="number" name="nik" value="{{$pegawai->nik}}" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" value="{{$pegawai->nama}}" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" value="{{$pegawai->alamat}}" class="form-control mb-2">
    <label>No HP</label>
    <input type="text" name="no_hp" value="{{$pegawai->no_hp}}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection