<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = ['image', 'nama_galeri', 'kode_galeri', 'deskripsi'];
}
