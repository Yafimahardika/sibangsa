<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Setoran;
use App\Models\Penarikan;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total nasabah
        $totalNasabah = Nasabah::count();

        // Hitung total saldo (misalnya field saldo di tabel nasabah)
        $totalSaldo = Nasabah::sum('saldo');

        // Hitung total setoran
        $totalSetoran = Setoran::sum('total');

        // Hitung total penarikan
        $totalPenarikan = Penarikan::sum('jumlah');

        // Data untuk chart bar (setoran per bulan)
        $setoranPerBulan = Setoran::select(
                DB::raw('MONTH(created_at) as bulan'),
                DB::raw('SUM(total) as total')
            )
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        // Data untuk pie chart (jenis sampah)
        $jenisSampah = Setoran::select(
                'jenis_sampah_id',
                DB::raw('SUM(berat) as total_berat')
            )
            ->groupBy('jenis_sampah_id')
            ->with('jenisSampah')
            ->get();
        $labelsJenis = $jenisSampah->map(fn($js) => $js->jenisSampah->nama);
        $dataJenis   = $jenisSampah->pluck('total_berat');

        return view('dashboard.index', compact(
            'totalNasabah',
            'totalSaldo',
            'totalSetoran',
            'totalPenarikan',
            'setoranPerBulan',
            'labelsJenis',
            'dataJenis'
        ));
    }
}
