<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setoran;
use App\Models\Penarikan;
use App\Models\Nasabah;
use App\Models\JenisSampah;
use Carbon\Carbon;

class StatistikController extends Controller
{
    public function index(Request $request)
    {
        // Query dasar
        $querySetoran   = Setoran::query();
        $queryPenarikan = Penarikan::query();

        // Filter tanggal
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $querySetoran->whereBetween('created_at', [$request->start_date, $request->end_date]);
            $queryPenarikan->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }

        // Filter jenis sampah
        if ($request->filled('jenis_sampah_id')) {
            $querySetoran->where('jenis_sampah_id', $request->jenis_sampah_id);
        }

        // Ambil data
        $setoran   = $querySetoran->get();
        $penarikan = $queryPenarikan->get();

        // Hitung total
        $totalSetoran   = $setoran->sum('berat');
        $totalPenarikan = $penarikan->sum('jumlah');
        $jumlahNasabah  = Nasabah::count();

        // Data untuk grafik (per bulan)
        $labels = [];
        $setoranData = [];
        $penarikanData = [];

        for ($i = 1; $i <= 12; $i++) {
            $labels[] = Carbon::create()->month($i)->format('F');

            $setoranData[] = (clone $querySetoran)->whereMonth('created_at', $i)->sum('berat');
            $penarikanData[] = (clone $queryPenarikan)->whereMonth('created_at', $i)->sum('jumlah');
        }

        // Ambil semua jenis sampah untuk filter dropdown
        $jenisSampah = JenisSampah::all();
        // dd($setoranData, $penarikanData);

        return view('statistik.index', compact(
            'totalSetoran',
            'totalPenarikan',
            'jumlahNasabah',
            'labels',
            'setoranData',
            'penarikanData',
            'jenisSampah'
        ));
    }
}
