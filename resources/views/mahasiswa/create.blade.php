@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TAMBAH DATA MAHASISWA</div>

                <div class="card-body">
                   <form action="{{ route('simpan.mahasiswa') }}" method="post">
                    @csrf
                   <div class="form-group row">
                        <label class="col-md-4 text-md-right">No ID</label>
                        <div class="col-md-6">
                        <input type="text" name="user_id" class="form-control" placeholder= "Masukan No ID" required="required">
                        </div>
                    </div>

                   <div class="form-group row">
                        <label class="col-md-4 text-md-right">NPM</label>
                        <div class="col-md-6">
                        <input type="text" name="npm" class="form-control" placeholder= "Masukan NPM" required="required">
                        </div>
                   </div>

                   <div class="form-group row">
                        <label class="col-md-4 text-md-right">Tempat & Tanggal Lahir</label>
                        <div class="col-md-3">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder= "Masukan Tempat" required="required">
                        </div>
                        <div class="col-md-3">
                        <input type="date" name="tgl_lahir" class="form-control" required="required">
                        </div>
                   </div>

                   <div class="form-group row">
                        <label class="col-md-4 text-md-right">Alamat</label>
                        <div class="col-md-6">
                        <input type="text" name="alamat" class="form-control" placeholder= "Masukan Alamat" required="required">
                        </div>
                   </div>

                   <div class="form-group row">
                        <label class="col-md-4 text-md-right">Telepon</label>
                        <div class="col-md-6">
                        <input type="number" name="telepon" class="form-control" placeholder= "Masukan Telepon" required="required">
                        </div>
                   </div>

                   <div class="form-group row">
                        <label class="col-md-4 text-md-right">Jenis Kelamin</label>
                        <div class="col-md-6">
                        <select name="gender" class="form-control" required="required">
                         <option value="0" selected disabled>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        </div>
                   </div>

                   <div class="form-group row">
                        <label class="col-md-4 text-md-right"></label>
                        <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                        <a href="{{ route('mahasiswa') }}" class="btn btn-danger">BATAL</a>
                        </div>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
