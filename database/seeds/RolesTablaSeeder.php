<?php

use Illuminate\Database\Seeder;
use App\Roles;

class RolesTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Roles();
        $role->nombre = 'admin';
        $role->descripcion = 'Administrador';
        $role->save();

        $role = new Roles();
        $role->nombre = 'usuario';
        $role->descripcion = 'Usuario';
        $role->save();
    }
}
