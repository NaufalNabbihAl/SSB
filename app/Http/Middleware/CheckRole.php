<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth; 


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();
        dd($user);
        if (!in_array($user->roles, ['user'])) {
            return redirect('{{route(admin.index)}}'); 
        }else if (!in_array($user->roles, ['admin'])) {
            return redirect('{{route(admin.index)}}'); 
        }else{
            return redirect('/');
        }

        return $next($request);
    
    }
}
