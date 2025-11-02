<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->role !== $role) {
            // Kalau role-nya beda, lempar ke dashboard umum atau error page
            return redirect()->back()->with('error', 'Akses ditolak!');
        }

        return $next($request);
    }
}
