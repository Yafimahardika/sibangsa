<?php

namespace App\Http\Controllers;

use App\Models\JenisSampah;
use Illuminate\Http\Request;

class JenisSampahController extends Controller
{
    /**
     * Tampilkan daftar jenis sampah.
     */
    public function index()
    {
        $jenis_sampah = JenisSampah::paginate(10);
        return view('jenis_sampah.index', compact('jenis_sampah'));
    }

    /**
     * Form tambah jenis sampah.
     */
    public function create()
    {
        return view('jenis_sampah.create');
    }

    /**
     * Simpan data baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'satuan' => 'required|string|max:50',
            'harga_satuan' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        JenisSampah::create($request->all());

        return redirect()->route('jenis-sampah.index')
                         ->with('success', 'Jenis sampah berhasil ditambahkan.');
    }

    /**
     * Form edit jenis sampah.
     */
    public function edit(JenisSampah $jenis_sampah)
    {
        return view('jenis_sampah.edit', compact('jenis_sampah'));
    }

    /**
     * Update data.
     */
    public function update(Request $request, JenisSampah $jenis_sampah)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'satuan' => 'required|string|max:50',
            'harga_satuan' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $jenis_sampah->update($request->all());

        return redirect()->route('jenis-sampah.index')
                         ->with('success', 'Jenis sampah berhasil diperbarui.');
    }

    /**
     * Hapus data.
     */
    public function destroy(JenisSampah $jenis_sampah)
    {
        $jenis_sampah->delete();

        return redirect()->route('jenis-sampah.index')
                         ->with('success', 'Jenis sampah berhasil dihapus.');
    }
}
