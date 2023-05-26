<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Assign;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # ces utilisateurs sont créés pour tester l'application
        # et ne doivent pas être laissé en production
         User::create([
            'name' => 'admin',
            'email' => 'admin@aeb.com',
            'password' => Hash::make("password"),
        ])
        ->assignRole('manager');

        User::create([
            'name' => 'asmaa',
            'email' => 'asmaa@aeb.com',
            'password' => Hash::make("password"),
        ])
        ->assignRole('secretaire');

        User::create([
            'name' => 'aziz',
            'email' => 'aziz@aeb.com',
            'password' => Hash::make("password"),
        ])
        ->assignRole('moniteur');

        
        
    }
}
