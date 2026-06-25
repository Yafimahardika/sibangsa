<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisSampah extends Model
{
    protected $fillable = ['nama', 'harga_satuan', 'satuan', 'deskripsi', 'status'];

    // Relasi: Jenis Sampah bisa muncul di banyak Setoran
    public function setoran()
    {
        return $this->hasMany(Setoran::class);
    }
}

