@extends('layout.main')

@section('title', 'Daftar Mata Kuliah')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h1 class="mt-3" >Daftar Mata Kuliah</h1>

                <a href="/matakuliah/create" class="btn btn-primary my-3">Tambah Data Mata Kuliah</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach( $matakuliah as $mataKuliah)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $mataKuliah->nama }}
                            <a href="/matakuliah/{{ $mataKuliah->id }}" class="badge badge-info">detail</a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection
