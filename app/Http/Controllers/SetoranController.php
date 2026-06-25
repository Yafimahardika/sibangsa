<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nasabah;
use App\Models\Setoran;
use App\Models\JenisSampah;

class SetoranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setorans = Setoran::with(['nasabah','jenisSampah'])->latest()->paginate(10);
        return view('setoran.index', compact('setorans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nasabahs = Nasabah::all();
        $jenisSampahs = JenisSampah::all();
        return view('setoran.create', compact('nasabahs','jenisSampahs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nasabah_id' => 'required|exists:nasabahs,id',
            'jenis_sampah_id' => 'required|exists:jenis_sampahs,id',
            'berat' => 'required|numeric|min:0.1',
        ]);

        DB::transaction(function () use ($request) {
            $jenis = JenisSampah::findOrFail($request->jenis_sampah_id);
            $total = $request->berat * $jenis->harga_satuan;

            $setoran = Setoran::create([
                'nasabah_id' => $request->nasabah_id,
                'jenis_sampah_id' => $request->jenis_sampah_id,
                'berat' => $request->berat,
                'total' => $total,
            ]);

            $nasabah = Nasabah::findOrFail($request->nasabah_id);
            $nasabah->saldo += $total;
            $nasabah->save();
        });

        return redirect()->route('setoran.index')->with('success', 'Setoran berhasil dicatat');
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
