<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Client;
use App\Models\Coach;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function register()
    {
        return view('/register ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        /*
            Validation des données
            */

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'description' => $request->description, 

            'role' => $request->role,
        ]);


        Auth::login($user);


        if ($user->role === "admin") {
            $user->assignRole('admin');
        } elseif ($user->role === 'coach') {
            $user->assignRole('coach');
            Coach::create([
                'user_id' => $user->id,
            ]);
        } elseif ($user->role === "client") {
            $user->assignRole('client');
            Client::create([
                'user_id' => $user->id,
            ]);
        }
    
        if ($user->role === 'coach') {
            return redirect('/DashboardCoach');
        }



        return redirect('/login');
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
