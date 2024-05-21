<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article')->with([
            'articles' => Article::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);
        $article = Article::create($validated);
        return view('article')->with([
            'articles' => $article,
        ]);
    }
}
