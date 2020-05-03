@extends('layout.main')

@section('title', 'Form Tambah Mata Kuliah')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h1 class="mt-3" >Form Tambah Mata Kuliah</h1>

                <form method="POST" action="/matakuliah">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $massage ?? 'Masukkan Nama Anda Dengan Benar' }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" class="form-control @error('semester') is-invalid @enderror" id="semester" placeholder="Masukkan Semester (GENAP/GANJIL)" name="semester" value="{{ old('semester') }}">
                        @error('semester')
                            <div class="invalid-feedback">{{ $massage ?? 'Masukkan Semester Anda Dengan Benar (GENAP/GANJIL)' }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection
