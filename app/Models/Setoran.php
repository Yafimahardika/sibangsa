<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setoran extends Model
{
    protected $fillable = ['nasabah_id', 'jenis_sampah_id', 'berat', 'total'];

    // Relasi: Setoran milik satu Nasabah
    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }

    // Relasi: Setoran terkait dengan satu Jenis Sampah
    public function jenisSampah()
    {
        return $this->belongsTo(JenisSampah::class);
    }
}

