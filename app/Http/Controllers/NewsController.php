<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id){
        $news = News::find($id);
        return view('news.index', compact('news'));
    }
    public function indexAdmin(Request $request)
    {
        $searchTerm = $request->input('search');

        if ($searchTerm) {
            // If there's a search term, filter players by name or another attribute
            $news = News::where('title', 'LIKE', "%{$searchTerm}%")
                             ->get();
                             
        } else {
            $news = News::all();
        }
        return view('admin.news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
        }
        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);
        return redirect()->route('admin.news');
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
        $news = News::find($id);
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $news = News::find($id);
        $imagePath = $news->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
        }
        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);
        return redirect()->route('admin.news');
    }

    public function destroy(string $id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('admin.news');
    }
}
