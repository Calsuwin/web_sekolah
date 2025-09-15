<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.index'); // halaman utama profil
    }

    public function sejarah()
    {
        return view('profil.sejarah');
    }

    public function visiMisi()
    {
        return view('profil.visi-misi');
    }

    public function dataPokok()
    {
        return view('profil.data-pokok');
    }

    public function dataStatistik()
    {
        return view('profil.data-statistik');
    }
}
