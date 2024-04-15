<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log; // Add Log facade for logging

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): mixed{$user = $request->user();
        if (!$user || !in_array($user->role, $roles)) {Log::warning('Unauthorized access. User role: ' . ($user ? $user->role : 'Guest'));
            return view('login');}
        return $next($request);
    }
}
