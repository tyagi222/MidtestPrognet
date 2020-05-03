@extends('layout.main')

@section('title', 'Detail Mata Kuliah')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h1 class="mt-3" >Detail Mata Kuliah</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mataKuliah->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $mataKuliah->semester }}</h6>

                        <a href="{{ $mataKuliah->id }}/edit" class="btn btn-primary">Edit</a>

                        <form action="/matakuliah/{{ $mataKuliah->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/matakuliah" class="card-link">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
