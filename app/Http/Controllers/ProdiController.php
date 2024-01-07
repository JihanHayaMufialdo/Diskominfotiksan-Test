<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdiRequest;
use App\Models\Prodi;
use Database\Seeders\ProdiSeeder;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::get();
        $data = [
            'prodi' => $prodi
        ];

        return view('crud-prodi.prodi-index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::get();
        $data = [
            'prodi' => $prodi
        ];
        return view('crud-prodi.prodi-create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdiRequest $request)
    {
        $data = $request->validated();

        $prodi = new Prodi($data);

        $prodi->save();

        return to_route('prodi.index')->with('success','Berhasil menambahkan data program studi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        $data = [
            'prodi' => $prodi
        ];

        return view('crud-prodi.prodi-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProdiRequest $request, Prodi $prodi)
    {
        $data =$request->validated();

        $prodi->update($data);

        return to_route('prodi.index')->with('success','Berhasil mengubah data program studi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();

        return redirect()->route('prodi.index')->with('success', 'Berhasil menghapus data program studi');
    }
}
