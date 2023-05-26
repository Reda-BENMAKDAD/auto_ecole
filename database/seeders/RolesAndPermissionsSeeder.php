<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # les roles selon le diagramme de cas d'utilisation
        # les accents des noms des roles sont enlevés pour éviter les erreurs liées à l'encodage 
        $managerRole = Role::create(['name' => 'manager']);
        $secretaireRole = Role::create(['name' => 'secretaire']);
        $moniteurRole = Role::create(['name' => 'moniteur']);

        Permission::create(['name' => 'see manager page']);
        Permission::create(['name' => 'see secretaire page']);
        Permission::create(['name' => 'see moniteur page']);

        $managerRole->givePermissionTo('see manager page');
        $secretaireRole->givePermissionTo('see secretaire page');
        $moniteurRole->givePermissionTo('see moniteur page');
        


        
    }
}
