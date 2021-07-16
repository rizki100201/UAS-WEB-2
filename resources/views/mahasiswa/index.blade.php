@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">DATA MAHASISWA
                <a href="{{route('tambah.mahasiswa')}}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                   <table class="table table-bordered">
                   <tr>
                       <th>NO</th>
                       <th>NAMA LENGKAP</th>
                       <th><center>NPM</center></th>
                       <th>TEMPAT, TANGGAL LAHIR</th>
                       <th><center>ALAMAT</center></th>
                       <th><center>TELEPON</center></th>
                       <th>JENIS KELAMIN</th>
                       <th><center>AKSI</center></th>
                   </tr>
                   @foreach ($mahasiswa as $mhs)
                   <tr>
                       <td><center>{{ $mhs->id }}</center></td>
                       <td>{{ $mhs->user->name }}</td>
                       <td>{{ $mhs->npm }}</td>
                       <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir }}</td>
                       <td>{{ $mhs->alamat }}</td>
                       <td>{{ $mhs->telepon }}</td>
                       <td><center>{{ $mhs->gender }}</center></td>
                       <td>
                            <a href="{{ route('edit.mahasiswa', $mhs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('hapus.mahasiswa', $mhs->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                       </td>
                   </tr>
                   @endforeach
                   </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
