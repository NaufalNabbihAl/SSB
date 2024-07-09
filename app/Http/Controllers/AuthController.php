<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
    $user = Auth::user();
    

    if ($user->roles == 'admin') {
        return redirect()->route('index');
    } else if ($user->roles == 'user'){
        return redirect()->route('index');
    } else {
        return redirect()->route('index');
    }
}


    return back()->withErrors([
        'username' => 'Username atau password salah.',
    ]);
}
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('index');
    }
}
