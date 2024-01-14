<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tag::orderBy('id', 'desc')->paginate(5);
        return view('admin.tag.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required"
        ], ['name.required' => 'Tag အမည် ထည့်ပေးပါ။']);
        Tag::create([
            'slug' => Str::slug($request->name),
            'name' => $request->name,
        ]);
        return redirect('/admin/tag')->with('success', 'Created');
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
        $data = Tag::where('id', $id)->first();
        return view('admin.tag.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Tag::where('id', $id)->update([
            'slug' => Str::slug($request->name),
            'name' => $request->name,
        ]);
        return redirect('/admin/tag')->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tag::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}