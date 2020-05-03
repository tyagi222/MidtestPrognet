@extends('layout.main')

@section('title', 'Web Midtest')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3" >WEB MAHASISWA</h1>

                <a href="/mahasiswa" class="btn btn-primary">Mahasiswa</a>
                <a href="/matakuliah" class="btn btn-primary">Mata Kuliah</a>
            </div>
        </div>
    </div>
@endsection
