<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nasabah;
use App\Models\penarikan;
use Illuminate\Validation\ValidationException;

class PenarikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penarikans = Penarikan::with('nasabah')->latest()->paginate(10);
        return view('penarikan.index', compact('penarikans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nasabahs = Nasabah::all();
        return view('penarikan.create', compact('nasabahs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nasabah_id' => 'required|exists:nasabahs,id',
            'jumlah' => 'required|numeric|min:1000',
        ]);

        DB::transaction(function () use ($request) {
            $nasabah = Nasabah::findOrFail($request->nasabah_id);

            if ($nasabah->saldo < $request->jumlah) {
                throw ValidationException::withMessages([
                    'jumlah' => 'Saldo tidak mencukupi untuk penarikan',
                ]);
            }

            Penarikan::create([
                'nasabah_id' => $request->nasabah_id,
                'jumlah' => $request->jumlah,
            ]);

            $nasabah->saldo -= $request->jumlah;
            $nasabah->save();
        });

        return redirect()->route('penarikan.index')->with('success', 'Penarikan berhasil dicatat');
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
