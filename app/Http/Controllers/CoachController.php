<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coach = Coach::all();
        return view("coach.index", compact("coach"));
    }

    public function indexAdmin(Request $request){

        $searchTerm = $request->input('search');

        if ($searchTerm) {
            // If there's a search term, filter players by name or another attribute
            $coachs = Coach::where('nama', 'LIKE', "%{$searchTerm}%")->orWhere('nomor_psad', 'LIKE', "%{$searchTerm}%")
                             ->get();
                             
        } else {
            $coachs = Coach::all();
        }
    
        return view("admin.coach", compact("coachs"));
        }

        
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("coach.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kewarganegaraan' => 'required|string',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $coach = Coach::create([
            'nama' => $request->nama,
            'kewarganegaraan' => $request->kewarganegaraan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'photo' => $photoPath,
        ]);
        return redirect()->route('admin.coach')->with('nomor_psad', $coach->nomor_psad);
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
        $coach = Coach::find($id);
        return view('coach.edit', compact('coach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kewarganegaraan' => 'required|string',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $coach = Coach::find($id);

        $photoPath = $coach->photo;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $coach->update([
            'nama' => $request->nama,
            'kewarganegaraan' => $request->kewarganegaraan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'photo' => $photoPath,
        ]);
        return redirect()->route('admin.coach')->with('success', 'Data coach berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coach = Coach::find($id);
        $coach->delete();
        return redirect()->route('admin.coach')->with('success', 'Data coach berhasil dihapus.');
    }
}
