<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;

class NasabahController extends Controller
{
    // ✅ HALAMAN UTAMA (nasabah.blade.php)
    public function index()
    {
        $nasabah = Nasabah::all();
        return view('nasabah.index', compact('nasabah'));
    }

    // ✅ HALAMAN FORM TAMBAH (nasabah_tambah.blade.php)
    public function create()
    {
        return view('nasabah.create');
    }

    // ✅ SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        // MEMBUAT NOMOR REKENING
        $lastNasabah = Nasabah::orderBy('id', 'desc')->first();

        if ($lastNasabah) {
            $lastNumber = (int) substr($lastNasabah->no_rekening, 2);
            $newNumber = $lastNumber + 1;
        } else {

            $newNumber = 1;
        }

        $noRekening = 'BS' . str_pad($newNumber, 3, 0, STR_PAD_LEFT);

        Nasabah::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_rekening' => $noRekening, // NO REK
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('nasabah.index')
            ->with('success', 'Data berhasil dihapus!');
    }

    // ✅ EDIT
    public function edit($id)
    {
        $nasabah = Nasabah::findOrFail($id);
        return view('nasabah.edit', compact('nasabah'))
            ->with('success', 'Data berhasil diedit');
    }

    // ✅ UPDATE
    public function update(Request $request, $id)
    {
        $nasabah = Nasabah::findOrFail($id);

        $nasabah->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_rekening' => $request->no_rekening,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('nasabah.index')
            ->with('success', 'Data berhasil diupdate');
    }

    // ✅ HAPUS
    public function destroy($id)
    {
        $nasabah = Nasabah::findOrFail($id);
        $nasabah->delete();

        return redirect()->route('nasabah.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}