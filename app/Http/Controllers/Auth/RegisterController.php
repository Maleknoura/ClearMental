<?php
namespace App\Http\Controllers\Auth;


    use App\Http\Controllers\Controller;
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
            return view('login');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            /*
            Validation des données
            */

            // Validation des données soumises
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:8',
                // 'picture' => 'required',
                'role' => 'required'
            ]);

            // Traitement de l'upload de l'image
            // $fileName = time() . $request->file('picture')->getClientOriginalName();
            // $path = $request->file('picture')->storeAs('picture', $fileName, 'public');
            // $picturePath = Storage::url($path);

            // Création de l'utilisateur
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                // 'picture' => $picturePath,
                'role' => $request->role,
            ]);

            // Authentification de l'utilisateur
            Auth::login($user);

            // Attribution du rôle en fonction du type d'utilisateur
            if (User::count() === 1) {
                $user->assignRole('admin');
            } elseif ($request->role === 'coach') {
                $user->assignRole('coach');
            } else {
                $user->assignRole('client');
            }

            // Redirection vers la page de connexion
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
