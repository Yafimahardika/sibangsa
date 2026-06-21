<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Nasabah</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>Tambah Data Nasabah</strong>
            </div>
            <div class="card-body">
                <a href="{{ route('nasabah.index') }}" class="btn btn-primary">Kembali</a>
                <br>
                <br>

                <form method="POST" action="{{ route('nasabah.store') }}">
                    @csrf 

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" name="nik" class="form-control" placeholder="00000000000000">

                        @error('nik')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama.." value="DikDika">

                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat.." value="Bakalan">

                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No. HP</label>
                        <input type="number" name="no_hp" class="form-control" placeholder="08xxxxxxxxxx" value="0888">

                        @error('no_hp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-5">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>