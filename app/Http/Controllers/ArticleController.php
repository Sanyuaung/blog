<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Programming;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function all()
    {
        $programming = request()->programming;
        $tag = request()->tag;
        $data = Article::withCount('comment');
        //Programming filter
        if ($programming) {
            $findProgramming = Programming::where('slug', $programming)->first();
            $data->whereHas('programming', function ($query) use ($findProgramming) {
                $query->where('programming_id', $findProgramming->id);
            });
        };
        //Tag filter
        if ($tag) {
            $findTag = Tag::where('slug', $tag)->first();
            $data->whereHas('tag', function ($query) use ($findTag) {
                $query->where('tag_id', $findTag->id);
            });
        }
        //Search
        if ($searchName = request()->name) {
            $data->where('name', 'like', "%$searchName%");
        }
        $data = $data->orderBy('id', 'desc')->paginate(2);
        return view('article.all', compact('data'));
    }
    public function detail($slug)
    {
        $data = Article::where('slug', $slug)->with('tag', 'programming')->firstOrfail();
        // return $data;
        return view('article.detail', ['data' => $data]);
    }
}