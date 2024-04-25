<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; 

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request 
     * @param  \Closure  
     * @param  string  
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();
        
        if (!$user || !$user->role || !in_array($user->role, $roles)) {
            switch ($user->role) {
                case 'admin':
                    return redirect('/dashboard');
                    break;
                case 'coach':
                    return redirect('/DashboardCoach');
                    break;
                default:
                    return redirect('/');
            }
        }

        return $next($request);
    }
}


