<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = ['image', 'nama_jurusan', 'kode_jurusan', 'deskripsi', 'kaprog', 'akreditasi', 'jumlah_siswa'];
}
