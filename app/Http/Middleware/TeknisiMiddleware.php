<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeknisiMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role === 'teknisi' && auth()->user()->is_active) {
            return $next($request);
        }

        return redirect('/')->with('error', 'Akses tidak diizinkan');
    }
}
