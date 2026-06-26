<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Transaksi</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        h2 { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 6px; text-align: left; }
    </style>
</head>
<body>
    <h2>Laporan Transaksi Bulan {{ $bulan }}</h2>

    <h3>Setoran</h3>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nasabah</th>
                <th>Jenis Sampah</th>
                <th>Berat</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($setoran as $s)
            <tr>
                <td>{{ $s->created_at->format('d-m-Y') }}</td>
                <td>{{ $s->nasabah->nama }}</td>
                <td>{{ $s->jenisSampah->nama }}</td>
                <td>{{ $s->berat }}</td>
                <td>{{ $s->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Penarikan</h3>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nasabah</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penarikan as $p)
            <tr>
                <td>{{ $p->created_at->format('d-m-Y') }}</td>
                <td>{{ $p->nasabah->nama }}</td>
                <td>{{ $p->jumlah }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
