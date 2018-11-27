<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Roles::where('nombre', 'user')->first();
        $role_admin = Roles::where('nombre', 'admin')->first();

        $user = new User();
        $user->name = 'Usuario';
        $user->email = 'usuario@prueba.com';
        $user->password = bcrypt('secret');
        $user->save();

        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@prueba.com';
        $user->password = bcrypt('secret');
        $user->save();

        $user->roles()->attach($role_admin);
    }
}
