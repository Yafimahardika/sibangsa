<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penarikan extends Model
{
    protected $fillable = ['nasabah_id', 'jumlah'];

    // Relasi: Penarikan milik satu Nasabah
    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }
}
