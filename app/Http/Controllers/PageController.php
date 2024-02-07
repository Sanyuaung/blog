<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $mostComment = Article::orderBy('view_count', 'desc')->first();
        $latest = Article::orderBy('id', 'desc')->withCount('comment')->take(4)->get();
        return view('home', compact('mostComment', 'latest'));
    }
}