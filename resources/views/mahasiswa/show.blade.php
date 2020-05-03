@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h1 class="mt-3" >Detail Mahasiswa</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mhs->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $mhs->nim }}</h6>
                        <p class="card-text">{{ $mhs->email }}</p>
                        <p class="card-text">{{ $mhs->jurusan  }}</p>

                        <a href="{{ $mhs->id }}/edit" class="btn btn-primary">Edit</a>

                        <form action="/mahasiswa/{{ $mhs->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/mahasiswa" class="card-link">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
