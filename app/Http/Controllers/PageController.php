<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Player;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view("index",compact('news'));
    }

    public function indexAdmin(Request $request){
        
       // Check if there's a search query
    $searchTerm = $request->input('search');

    if ($searchTerm) {
        // If there's a search term, filter players by name or another attribute
        $player = Player::where('name', 'LIKE', "%{$searchTerm}%")->orWhere('nomor_psad', 'LIKE', "%{$searchTerm}%")
                         ->get();
                         
    } else {
        $player = Player::all();
    }

    return view('admin.index', compact('player'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
