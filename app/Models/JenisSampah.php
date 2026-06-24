<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSampah extends Model
{
    use HasFactory;

    // Nama tabel (opsional, Laravel otomatis cocokkan plural)
    protected $table = 'jenis_sampahs';

    // Field yang bisa diisi mass-assignment
    protected $fillable = [
        'nama',
        'harga_satuan',
        'satuan',
        'deskripsi',
        'status',
    ];
}
