<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Programming;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgrammingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Programming::orderBy('id', 'desc')->paginate(5);
        return view('admin.programming.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.programming.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required"
        ], ['name.required' => 'Programming Language အမည် ထည့်ပေးပါ။']);
        Programming::create([
            'slug' => Str::slug($request->name),
            'name' => $request->name,
        ]);
        return redirect('/admin/programming')->with('success', 'Created');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Programming::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}