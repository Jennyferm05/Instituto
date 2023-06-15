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

        //permisos de home
        Permission::create(['name' => "home"])->syncRoles([$role1, $role2, $role3]);

         //permisos de grados
        Permission::create(['name' => "grados"])->syncRoles([$role1, $role2]);

         //permisos de alumnos
        Permission::create(['name' => "alumnos"])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => "mostraralumnos"])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => "getalumnoadd"])->assignRole([$role1]);
        Permission::create(['name' => "postalumnoadd"])->assignRole([$role1]);
        Permission::create(['name' => "colegio.alumno.edit"])->assignRole([$role1]);
        Permission::create(['name' => "postalumnoedit"])->assignRole([$role1]);
        Permission::create(['name' => "colegio.alumno.delete"])->assignRole([$role1]);

         //permisos de docentes
        Permission::create(['name' => "docentes"])->syncRoles([$role1, $role2]);

         //permisos de materias
        Permission::create(['name' => "materias"])->assignRole([$role1]);

         //permisos de calificaciones
       Permission::create(['name' => "calificaciones"])->syncRoles([$role1, $role2, $role3]);



        //permisos de horarios
        Permission::create(['name' => "mostrarhorarios"])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => "filtro"])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => "mostrar_materia"])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => "mostrar_grado"])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => "nuevo_horario"])->assignRole([$role1]);
        Permission::create(['name' => "store"])->assignRole([$role1]);

         //permisos de perfiles, usuarios y personas
        Permission::create(['name' => "usuarios"])->assignRole([$role1]);
        Permission::create(['name' => "mostrarusuarios"])->assignRole([$role1]);
        Permission::create(['name' => "asignar_rol"])->assignRole([$role1]);
        Permission::create(['name' => "rol_asignado"])->assignRole([$role1]);
        Permission::create(['name' => "crear_usuarios"])->assignRole([$role1]);
        Permission::create(['name' => "usuario_nuevo"])->assignRole([$role1]);
        Permission::create(['name' => "personas"])->assignRole([$role1]);
    }
}
