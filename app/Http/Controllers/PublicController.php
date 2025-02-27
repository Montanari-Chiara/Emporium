<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        // $articles = Article::take(6)->orderBy('created_at', 'desc')->get();
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('index', compact('articles'));
    }

    // search
    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(3);
        // $num_articles = Article::search($query)->where('is_accepted', true)->count();
        $num_articles = $articles->total();
        return view('article.searched', ['articles' => $articles, 'query' => $query, 'num_articles' => $num_articles]);
    }
}
