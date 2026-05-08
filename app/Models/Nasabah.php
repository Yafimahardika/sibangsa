<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $fillable = ['no_rekening','nik','nama','alamat','no_hp','saldo'];
}
