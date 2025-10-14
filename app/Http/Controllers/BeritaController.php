<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class BeritaController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('berita', compact('articles'));
    }
}
