<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//agregar hash
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'administrar']);
        $role = Role::create(['name' => 'administrador']);
        $role->syncPermissions("administrar");
        // create user
        $user1= User::create([
            'dni' => '44444444',
            'firstname' => 'Cardenas',
            'lastname' => 'Aquino',
            'names' => 'Anthony Robert',
            'password' => Hash::make('12345678'),
            'datebirth' => '2000-10-10',
            'cellphone' => '999999999',
            'sex' => 'M',
            'email' => 'admin@gmail.com',
        ]);
        //asignar rol
        $user1->assignRole('administrador');
        ///////////////////////////////////////////////////////////////////////
        Permission::create(['name' => 'vender']);
        $role = Role::create(['name' => 'ventas']);
        $role->syncPermissions("vender");
        // create user
        $user2= User::create([
            'dni' => '44444444',
            'firstname' => 'Cardenas',
            'lastname' => 'Aquino',
            'names' => 'Anthony Robert',
            'password' => Hash::make('12345678'),
            'datebirth' => '2000-10-10',
            'cellphone' => '999999999',
            'sex' => 'M',
            'email' => 'ventas@gmail.com',
        ]);
          //asignar rol
        $user2->assignRole('ventas');
    }
}
