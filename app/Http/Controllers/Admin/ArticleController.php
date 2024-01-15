<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Programming;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Article::orderBy('id', 'desc')->with('tag', 'programming')->paginate(5);
        return view('admin.article.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tag = Tag::all();
        $programming = Programming::all();
        return view('admin.article.create', compact('tag', 'programming'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tag' => "required",
            'programming' => "required",
            'name' => "required",
            'image' => "required|max:2048",
            'description' => "required",
        ], [
            'tag.required' => 'Tag ရွေးပေးပါ။',
            'programming.required' => 'Programming ရွေးပေးပါ။',
            'name.required' => 'ခေါင်းစဉ် ထည့်ပေးပါ။',
            'image.required' => 'Image ထည့်ပေးပါ။',
            'description.required' => 'Description ထည့်ပေးပါ။',
        ]);
        //image upload
        $file = $request->file('image');
        $file_name = uniqid() . $file->getClientOriginalName();
        $file->move(public_path('/images'), $file_name);
        //article store
        $createdArticle = Article::create([
            'slug' => Str::slug($request->name),
            'name' => $request->name,
            'image' => $file_name,
            'description' => $request->description,
            'view_count' => 0,
            'like_count' => 0,
        ]);
        //tag & programming sync
        $article = Article::find($createdArticle->id);
        $article->tag()->sync($request->tag);
        $article->programming()->sync($request->programming);
        return redirect('/admin/article')->with('success', 'Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Article::where('id', $id)->first();
        return view('admin.article.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Article::where('id', $id)->update([
            'slug' => Str::slug($request->name),
            'name' => $request->name,
        ]);
        return redirect('/admin/article')->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Article::find($id);
        //image delete
        File::delete(public_path('/images/' . $data->image));
        //tag & programming remove
        $data->tag()->sync([]);
        $data->programming()->sync([]);
        //article delete
        $data->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}