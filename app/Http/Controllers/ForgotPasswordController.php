<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
        public function showForm($token)
        {
            return view("reset-password", ['token' => $token]);
        }
        public function reset(Request $request)
        {
            $request->validate([
                'token' => 'required',
                'password' => 'required|string|confirmed|min:8',
            ]);
    
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user) use ($request) {
                    $user->forceFill([
                        'password' => Hash::make($request->password),
                        'remember_token' => Str::random(60)
                    ])->save();
                }
            );
    
            return $status == Password::PASSWORD_RESET
                ? redirect('/sign-in')->with('status', __($status))
                : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
        }
    }

