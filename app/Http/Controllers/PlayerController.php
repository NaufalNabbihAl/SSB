<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::where('status', 'lulus')->get();
        return view('players.index', compact('players'));
    }

    public function create()
    {
        return view('form_registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'place_birth' => 'required|string|max:255',
            'date_birth' => 'required|date',
            'nik' => 'required|string|max:20|unique:players,nik',
            'nis' => 'required|string|max:20',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $player = Player::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'place_birth' => $request->place_birth,
            'date_birth' => $request->date_birth,
            'nik' => Hash::make($request->nik),
            'nis' => $request->nis,
            'photo' => $photoPath,
        ]);

        return redirect()->route('players.create')->with('success', 'Pendaftaran berhasil.')->with('nomor_psad', $player->nomor_psad);
    }

    /**
     * Display the specified resource.
     */
    public function print($id)
    {

        $data = ['title' => 'Welcome to Laravel PDF Tutorial', 'date' => date('m/d/Y')];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $player = Player::find($id);
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required',
            'status' => 'required|in:lulus,tidak lulus,pending',
            'place_birth' => 'required|string|max:255',
            'nomor_psad' => 'string|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
    
        $player = Player::find($id);
        if (!$player) {
            return redirect()->back()->with('error', 'Player not found.');
        }
    
        $photoPath = $player->photo;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->storeAs('photos', time() . '_' . $request->file('photo')->getClientOriginalName(), 'public');
        }
        
        $player->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'place_birth' => $request->place_birth,
            'status' => $request->status,
            'nomor_psad' => $request->nomor_psad,
            'photo' => $photoPath,
        ]);

        $player->save();
    
        return redirect()->route('admin.index')->with('success', 'Data berhasil diubah.');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //destroy
        $player = Player::find($id);
        $player->delete();
        return redirect()->route('admin.index')->with('success', 'Data berhasil dihapus.');
    }
}
