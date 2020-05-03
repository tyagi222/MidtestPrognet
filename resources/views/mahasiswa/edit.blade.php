@extends('layout.main')

@section('title', 'Form Edit Tambah Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h1 class="mt-3" >Form Edit Tambah Mahasiswa</h1>

                <form method="POST" action="/mahasiswa/{{ $mhs->id }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $mhs->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $massage ?? 'Masukkan Nama Anda Dengan Benar' }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM (Total : 10 digit)" name="nim" value="{{ $mhs->nim }}">
                        @error('nim')
                            <div class="invalid-feedback">{{ $massage ?? 'Masukkan NIM Anda Dengan Benar' }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ $mhs->email }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $massage ?? 'Masukkan Email Anda Dengan Benar' }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $mhs->jurusan }}">
                        @error('jurusan')
                            <div class="invalid-feedback">{{ $massage ?? 'Masukkan Jurusan Anda Dengan Benar' }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection
