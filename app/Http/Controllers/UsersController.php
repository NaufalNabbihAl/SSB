<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->roles = 'user';
        $user->save();
        return redirect()->route('login')->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('user.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email'=> 'required|email|max:255',
            'username' => 'required|string|max:255',
        ]);
    
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
    
        // Update informasi pengguna sesuai data yang dikirimkan
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
    
        
        $user->save();   
    
        // Redirect ke halaman profil atau halaman lain yang sesuai
        return redirect()->route('profile.show', $user->id)->with('success','Profile updated successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePassword(Request $request)
    {
       // Validate the request
       $request->validate([
        'currentPassword' => 'required',
        'newPassword' => 'required|string|min:8|confirmed',
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Verify the current password
    if (!Hash::check($request->currentPassword, $user->password)) {
        return back()->withErrors(['currentPassword' => 'The current password is incorrect.']);
    }

    // Update the user's password
    $user->password = Hash::make($request->newPassword);
    $user->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Password updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
