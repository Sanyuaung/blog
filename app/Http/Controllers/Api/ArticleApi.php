<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleComment;
use Illuminate\Http\Request;

class ArticleApi extends Controller
{
    public function makeComment()
    {
        $comment = request()->comment;
        $article_id = request()->article_id;
        $created = ArticleComment::create([
            'article_id' => $article_id,
            'user_id' => auth()->user()->id,
            'comment' => $comment
        ]);
        $data = ArticleComment::where('id', $created->id)->with('user')->first();
        return response()->json($data);
    }
    public function Like()
    {
        $slug = request()->slug;
        $findArticle = Article::where('slug', $slug)->first();
        $findArticle->update([
            'like_count' => $findArticle->like_count + 1
        ]);
        return 'success';
    }
}