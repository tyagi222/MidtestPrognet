<?php

namespace App\Http\Controllers;

use App\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah = matakuliah::all();
        return view('matakuliah.index', ['matakuliah'=>$matakuliah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matakuliah.create');
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
            'semester' => 'required|starts_with:GENAP,GANJIL'
        ]);

        MataKuliah::create($request->all());
        return redirect('/matakuliah')->with('status', 'Data Mata Kuliah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliah $mataKuliah)
    {
        return view('matakuliah.show', compact('mataKuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(MataKuliah $mataKuliah)
    {
        return view('matakuliah.edit', compact('mataKuliah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MataKuliah $mataKuliah)
    {
        $request->validate([
            'nama' => 'required',
            'semester' => 'required|starts_with:GENAP,GANJIL'
        ]);

        MataKuliah::where('id', $mataKuliah->id)
                    ->update([
                        'nama' => $request->nama,
                        'semester' => $request->semester
                    ]);
        return redirect('/matakuliah')->with('status', 'Data Mata Kuliah Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataKuliah $mataKuliah)
    {
        matakuliah::destroy($mataKuliah->id);
        return redirect('/matakuliah')->with('status', 'Data Mata Kuliah Berhasil Dihapus');
    }
}
