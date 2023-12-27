<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employe;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # ces utilisateurs sont créés pour tester l'application
        # et ne doivent pas être laissé en production
        $redaEmploye = Employe::create([
            'num_cin' => 'BK723404',
            'nom' => 'BENMAKDAD',
            'prenom' => 'reda',
            'date_naiss' => '2003-09-23',
            'lieu_naiss' => 'casablanca',
            'adresse' => '39 rue 141 groupe "m" oulfa casablanca',
            'nationalite' => 'marocaine',
            'num_tel' => '(+212)693404583',
            'email' => 'reda@aeb.com',
            'sexe' => 'H',
            'salaire' => 2000,
            'poste' => 'manager',
            'docs_uuid' => (string) Str::uuid(),

        ]);
         User::create([
            'name' => 'reda',
            'email' => 'reda@aeb.com',
            'password' => Hash::make("password"),
            'id_employe' => $redaEmploye->id,
        ])
        ->assignRole('manager');

        $asmaaEmploye = Employe::create([
            'num_cin' => 'BK245879',
            'nom' => 'alaoui',
            'prenom' => 'asmaa',
            'date_naiss' => '1992-08-15',
            'lieu_naiss' => 'casablanca',
            'adresse' => '55 rue 123 hay salam casablanca',
            'nationalite' => 'marocaine',
            'num_tel' => '(+212)633689741',
            'email' => 'asmaa@aeb.com',
            'sexe' => 'F',
            'salaire' => 2000,
            'poste' => 'secretaire',
            'docs_uuid' => (string) Str::uuid(),
        ]);
        User::create([
            'name' => 'asmaa',
            'email' => 'asmaa@aeb.com',
            'password' => Hash::make("password"),
            'id_employe' => $asmaaEmploye->id,
        ])
        ->assignRole('secretaire');

        $azizEmploye = Employe::create([
            'num_cin' => 'BK218935',
            'nom' => 'hamouchi',
            'prenom' => 'aziz',
            'date_naiss' => '1987-04-20',
            'lieu_naiss' => 'casablanca',
            'adresse' => '20 rue 86 hay limoune casablanca',
            'nationalite' => 'marocaine',
            'num_tel' => '(+212)1275841314',
            'email' => 'aziz@aeb.com',
            'sexe' => 'H',
            'salaire' => 2000,
            'poste' => 'moniteur',
            'docs_uuid' => (string) Str::uuid(),
        ]);
        User::create([
            'name' => 'aziz',
            'email' => 'aziz@aeb.com',
            'password' => Hash::make("password"),
            'id_employe' => $azizEmploye->id,
        ])
        ->assignRole('moniteur');

        
        
    }
}
