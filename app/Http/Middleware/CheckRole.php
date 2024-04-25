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
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $user = Auth::user();
        if(Auth::user()->status == 1)
        {
            Auth::logout();
            abort('403','your banned');
        }
        return $next($request);
    
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


