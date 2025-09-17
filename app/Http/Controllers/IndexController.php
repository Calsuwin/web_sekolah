<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Article;
use App\Models\Statistic;
use App\Models\Greeting;

class IndexController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        $articles = Article::latest()->take(4)->get();
        $statistics = Statistic::take(4)->get(); // ambil 4 data aja
        $greetings = Greeting::first();

        return view('index', compact('carousels', 'articles', 'statistics', 'greetings'));
    }
}
