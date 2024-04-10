<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nom du Coach1',
            'email' => 'coach1@example.com',
            'password' => Hash::make('password'), 
            'role' => 'coach',
        
        ]);


        User::create([
            'name' => 'Nom du Coach 2',
            'email' => 'coach2@example.com',
            'password' => Hash::make('password'), 
            'role' => 'coach',
        ]);
    }
}
