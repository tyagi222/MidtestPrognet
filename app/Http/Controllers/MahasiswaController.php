<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'email:rfc,dns',
            'jurusan' => 'required'
        ]);

        mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mhs)
    {
        return view('mahasiswa.show', compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mhs)
    {
        return view('mahasiswa.edit', compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mhs)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'email:rfc,dns',
            'jurusan' => 'required'
        ]);

        mahasiswa::where('id', $mhs->id)
                    ->update([
                       'nama' => $request->nama,
                       'nim' => $request->nim,
                       'email' => $request->email,
                       'jurusan' => $request->jurusan
                    ]);
        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mhs)
    {
        mahasiswa::destroy($mhs->id);
        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Dihapus');
    }
}
