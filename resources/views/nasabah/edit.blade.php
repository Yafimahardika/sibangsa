<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Nasabah</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                Edit Data
            </div>
            <div class="card-body">
                <a href="{{ route('nasabah.index') }}" class="btn btn-primary mb-3">Kembali</a>

                <form method="POST" action="{{ route('nasabah.update', $nasabah->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="number" class="form-label">NIK</label>
                        <input type="number" name="nik" id="nik" 
                           class="form-control @error('nik') is-invalid @enderror" 
                           value="{{ old('nik', $nasabah->nik) }}" 
                           placeholder="NIK">
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" 
                           class="form-control @error('nama') is-invalid @enderror" 
                           value="{{ old('nama', $nasabah->nama) }}" 
                           placeholder="Nama Nasabah ..">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat"
                                class="form-control @error('alamat') is-invalid @enderror"
                                value="{{ old('alamat', $nasabah->alamat) }}"
                                placeholder="Alamat ..">
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_rekening" class="form-label">No. Rekening</label>
                        <input type="text" name="no_rekening" id="no_rekening"
                                class="form-control @error('no_rekening') is-invalid @enderror"
                                value="{{ old('no_rekening', $nasabah->no_rekening) }}"
                                placeholder="BSXX ..">
                        @error('no_rekening')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No. HP</label>
                        <input type="number" name="no_hp" id="no_hp"
                                class="form-control @error('no_hp') is-invalid @enderror"
                                value="{{ old('no_hp', $nasabah->no_hp) }}"
                                placeholder="08XX ..">
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>