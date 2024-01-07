<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::get();
        $data = [
            'mahasiswa' => $mahasiswa
        ];

        return view('crud-mahasiswa.mahasiswa-index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::get();
        $prodi = Prodi::get();

        $data = [
            'mahasiswa' => $mahasiswa,
            'prodi'     => $prodi
        ];
        return view('crud-mahasiswa.mahasiswa-create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MahasiswaRequest $request)
    {
        $data = $request->validated();

        $mahasiswa = new Mahasiswa($data);

        $mahasiswa->save();

        return to_route('mahasiswa.index')->with('success','Berhasil menambahkan data mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $prodi = Prodi::get();

        $data = [
            'mahasiswa' => $mahasiswa,
            'prodi'     => $prodi
        ];

        return view('crud-mahasiswa.mahasiswa-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $data =$request->validated();

        $mahasiswa->update($data);

        return to_route('mahasiswa.index')->with('success','Berhasil mengubah data mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Berhasil menghapus data mahasiswa');
    }
}
