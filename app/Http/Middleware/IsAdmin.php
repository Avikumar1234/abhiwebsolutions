<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in and user role or is_admin flag is true
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Otherwise, redirect to home or 403 forbidden
        abort(403, 'Unauthorized action.');
        // Or use redirect()->route('home'); if you want redirect
    }
}
