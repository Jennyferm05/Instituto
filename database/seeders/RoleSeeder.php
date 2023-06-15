<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'profesor']);
        $role3 = Role::create(['name' => 'estudiante']);

        Permission::create(['name' => "home"])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => "grados"])->syncRoles([$role1, $role2]);
        Permission::create(['name' => "alumnos"])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => "mostraralumnos"])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => "getalumnoadd"])->assignRole([$role1]);
        Permission::create(['name' => "postalumnoadd"])->assignRole([$role1]);
        Permission::create(['name' => "colegio.alumno.edit"])->assignRole([$role1]);
        Permission::create(['name' => "postalumnoedit"])->assignRole([$role1]);
        Permission::create(['name' => "colegio.alumno.delete"])->assignRole([$role1]);
        Permission::create(['name' => "docentes"])->syncRoles([$role1, $role2]);
        Permission::create(['name' => "materias"])->assignRole([$role1]);
        Permission::create(['name' => "calificaciones"])->syncRoles([$role1, $role2]);
        Permission::create(['name' => "horarios"])->syncRoles([$role1, $role2]);
        Permission::create(['name' => "usuarios"])->assignRole([$role1]);
        Permission::create(['name' => "mostrarusuarios"])->assignRole([$role1]);
        Permission::create(['name' => "asignar_rol"])->assignRole([$role1]);
        Permission::create(['name' => "rol_asignado"])->assignRole([$role1]);
        Permission::create(['name' => "crear_usuarios"])->assignRole([$role1]);
        Permission::create(['name' => "usuario_nuevo"])->assignRole([$role1]);
        Permission::create(['name' => "personas"])->assignRole([$role1]);
    }
}
