<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setoran;
use App\Models\Penarikan;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        $setoran   = Setoran::all();
        $penarikan = Penarikan::all();

        return view('laporan.index', compact('setoran', 'penarikan'));
    }

    public function filter($bulan)
    {
        $setoran   = Setoran::whereMonth('created_at', $bulan)->get();
        $penarikan = Penarikan::whereMonth('created_at', $bulan)->get();

        return view('laporan.index', compact('setoran', 'penarikan', 'bulan'));
    }

    public function exportPdf($bulan)
{
    $setoran   = Setoran::whereMonth('created_at', $bulan)->get();
    $penarikan = Penarikan::whereMonth('created_at', $bulan)->get();

    $pdf = Pdf::loadView('laporan.pdf', compact('setoran', 'penarikan', 'bulan'));
    return $pdf->download("laporan-bulan-{$bulan}.pdf");
}
}
