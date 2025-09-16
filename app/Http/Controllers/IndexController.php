<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Article;
use App\Models\Statistic;

class IndexController extends Controller {
    public function index() {
        $carousels = Carousel::all();
        $articles = Article::latest()->take(3)->get();
        $statistics = Statistic::all();

        return view('index', compact('carousels', 'articles', 'statistics'));
    }
}

