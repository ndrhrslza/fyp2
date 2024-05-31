<?php
// app/Http/Middleware/IsAdmin.php

// app/Http/Middleware/IsAdmin.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('IsAdmin middleware called');
        
        if (Auth::check()) {
            Log::info('User authenticated');
            $user = Auth::user();
            Log::info('User role: ' . $user->role);
            if ($user->isAdmin()) {
                Log::info('User is admin');
                return $next($request);
            }
        }

        Log::info('User is not admin, redirecting to home');
        return redirect('/'); // Redirect to home if not admin
    }
}

