@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Data Pegawai</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{route('pegawai.tambah')}}">Tambah Pegawai</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Aksi</th>
    </tr>
    @foreach($pegawai as $no=>$data)
    <tr>
        <td>{{$no+1}}</td>
        <td>{{$data->nik}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->no_hp}}</td>
        <td>
            <a href="{{route('pegawai.edit', $data->id)}}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{route('pegawai.delete', $data->id)}}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection