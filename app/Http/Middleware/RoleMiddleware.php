<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role): Response{
        // Cek apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }
    
        // Cek apakah role pengguna tidak sama dengan role yang diminta
        if (Auth::user()->role !== $role) {
            abort(403, "Unauthorized");
        }
    
        // Lanjutkan ke rute berikutnya jika role cocok
        return $next($request);
    }
    
}