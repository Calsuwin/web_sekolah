<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $fillable = [
        'image',
        'nama_eskul',
        'kode_eskul',
        'deskripsi',
        'pembina',
        'ketua',
        'jadwal',
        'jumlah_anggota',
        'lokasi_latihan',
    ];
}
