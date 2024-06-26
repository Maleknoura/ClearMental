<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('/login');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         try {
             $credentials = $request->only('email', 'password');
     
             if (Auth::attempt($credentials)) {
                 $request->session()->regenerate();
     
                 $user = User::find(Auth::id());
                 if ($user->assignRole("admin")) {
                     return redirect()->intended('/dashboard');
                 } elseif ($user->assignRole("coach")) {
                     return redirect()->intended('/DashboardCoach');
                 } else {
                     return redirect()->intended('/');
                 }
             } else {
                 return back()->withErrors([
                     'email' => 'The provided credentials do not match our records.',
                 ]);
             }
         } catch(\Exception $e) {
             return back()->withErrors([
                 'error' => $e->getMessage(),
             ]);
         }
     }
     
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
