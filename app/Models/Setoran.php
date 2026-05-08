<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setoran extends Model
{
    protected $fillable = ['nasabah_id','jenis_sampah_id','berat','harga','total','tanggal'];
}
