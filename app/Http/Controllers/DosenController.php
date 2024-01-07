<?php

namespace App\Http\Controllers;

use App\Http\Requests\DosenRequest;
use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::get();
        $data = [
            'dosen' => $dosen
        ];

        return view('crud-dosen.dosen-index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = Dosen::get();
        $prodi = Prodi::get();

        $data = [
            'dosen' => $dosen,
            'prodi' => $prodi
        ];
        return view('crud-dosen.dosen-create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DosenRequest $request)
    {
        $data = $request->validated();

        $dosen = new Dosen($data);

        $dosen->save();

        return to_route('dosen.index')->with('success','Berhasil menambahkan data dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        $prodi = Prodi::get();

        $data = [
            'dosen' => $dosen,
            'prodi'     => $prodi
        ];

        return view('crud-dosen.dosen-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DosenRequest $request, Dosen $dosen)
    {
        $data =$request->validated();

        $dosen->update($data);

        return to_route('dosen.index')->with('success','Berhasil mengubah data dosen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Berhasil menghapus data dosen');
    }
}
