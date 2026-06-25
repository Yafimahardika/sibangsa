<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $fillable = ['no_rekening', 'nik', 'nama', 'alamat', 'no_hp', 'saldo'];

    // Relasi: Nasabah punya banyak Setoran
    public function setoran()
    {
        return $this->hasMany(Setoran::class);
    }

    // Relasi: Nasabah punya banyak Penarikan
    public function penarikan()
    {
        return $this->hasMany(Penarikan::class);
    }
}
