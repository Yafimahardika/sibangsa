<!DOCTYPE html>
<html>
<head>
    <title>Tambah Nasabah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3>Tambah Nasabah</h3>

    <a href="{{ route('nasabah.index') }}" class="btn btn-primary mb-3">Kembali</a>

    <form method="POST" action="{{ route('nasabah.store') }}">
        @csrf

        <input type="text" name="nik" class="form-control mb-2" placeholder="NIK">
        <input type="text" name="nama" class="form-control mb-2" placeholder="Nama">
        <input type="text" name="alamat" class="form-control mb-2" placeholder="Alamat">
        <input type="text" name="no_rekening" class="form-control mb-2" placeholder="No Rekening">
        <input type="text" name="no_hp" class="form-control mb-2" placeholder="No HP">

        <button class="btn btn-success">Simpan</button>
    </form>

</div>

</body>
</html>