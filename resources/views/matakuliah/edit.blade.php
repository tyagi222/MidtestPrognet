@extends('layout.main')

@section('title', 'Form Edit Tambah Mata Kuliah')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h1 class="mt-3" >Form Edit Tambah Mata Kuliah</h1>

                <form method="POST" action="/matakuliah/{{ $mataKuliah->id }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $mataKuliah->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $massage ?? 'Masukkan Nama Anda Dengan Benar' }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" class="form-control @error('semester') is-invalid @enderror" id="semester" placeholder="Masukkan Semester (GENAP/GANJIL)" name="semester" value="{{ $mataKuliah->semester }}">
                        @error('semester')
                            <div class="invalid-feedback">{{ $massage ?? 'Masukkan Semester Dengan Benar (GENAP/GANJIL)' }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection
