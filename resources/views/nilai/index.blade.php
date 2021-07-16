@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA NILAI
                    <a href="{{route('tambah.nilai')}}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th><center>NO</center></th>
                                <th><center>NPM</center></th>
                                <th><center>NAMA</center></th>
                                <th><center>NAMA MAKUL</center></th>
                                <th><center>SKS</center></th>
                                <th><center>NILAI</center></th>
                                <th><center>AKSI</center></th>
                            </tr>
                            @foreach ($nilai as $nil)
                                <tr>
                                    <td><center>{{ $nil->id}}</center></td>
                                    <td><center>{{ $nil->mahasiswa->npm}}</center></td>
                                    <td><center>{{ $nil->mahasiswa->user->name}}</center></td>
                                    <td><center>{{ $nil->makul->nama_makul}}</center></td>
                                    <td><center>{{ $nil->makul->sks}}</center></td>
                                    <td><center>{{ $nil->nilai}}</center></td>
                                    <td><center>
                                        <a href="{{route('edit.nilai',$nil->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{route('hapus.nilai',$nil->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                                        </center>
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