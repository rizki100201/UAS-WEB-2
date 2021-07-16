@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA MATA KULIAH
                <a href="{{ route('tambah.makul') }}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table  class="table table-bordered">
                        <tr>
                            <th><center>NO</center></th>
                            <th><center>KODE MAKUL</center></th>
                            <th><center>NAMA MAKUL</center></th>
                            <th><center>SKS</center></th>
                            <th><center>AKSI</center></th>
                        </tr>
                        @foreach ($makul as $mk)
                        <tr>
                            <td><center>{{ $mk->id }}</center></td>
                            <td><center>{{ $mk->kd_makul }}</center></td>
                            <td><center>{{ $mk->nama_makul }}</center></td>
                            <td><center>{{ $mk->sks }}</center></td>
                            <td><center>
                            <a href="{{ route('makul.edit', $mk->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                            <a href="{{ route('hapus.makul', $mk->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
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
