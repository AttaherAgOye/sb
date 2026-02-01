<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Veuillez vous connecter pour accéder à cette page.');
        }

        if (!Auth::user()->isAdmin()) {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Vous n\'avez pas les droits d\'accès à l\'administration.');
        }

        return $next($request);
    }
}
