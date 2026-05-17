<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nasabah = Nasabah::all();
        return view('nasabah', ['nasabah' => $nasabah]);
    }

    public function tambah(){
        return view('nasabah_tambah');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required'
        ]);

        Nasabah::create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp
        ]);

        return redirect('/nasabah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
