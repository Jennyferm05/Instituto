<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Usuario;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Registrar o actualizar usuario
        $usuario = Usuario::where('numero_de_documento',1079173785)->first(); // Consultar Persona
        User::updateOrCreate(['subnombre' => 'JSM6580'], [ // Actualizar o crear usuario
            'usuario_id' => $usuario->id,
            'email' => 'jsmedinah5873@gmail.com',
            'password' => bcrypt('j2u0n0i5or')
        ]);

        // Registrar o actualizar usuario
        $usuario = Usuario::where('numero_de_documento', 1075791904)->first(); // Consultar Persona
        User::updateOrCreate(['subnombre' => 'JMM7845'], [ // Actualizar o crear usuario
            'usuario_id' => $usuario->id,
            'email' => 'jennyfermarin05@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $usuario = Usuario::where('numero_de_documento', 1079172278)->first(); // Consultar Persona
        User::updateOrCreate(['subnombre' => 'SXG0245'], [ // Actualizar o crear usuario
            'usuario_id' => $usuario->id,
            'email' => 'guevarax72@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $usuario = Usuario::where('numero_de_documento', 1081152391)->first(); // Consultar Persona
        User::updateOrCreate(['subnombre' => 'DAP8745'], [ // Actualizar o crear usuario
            'usuario_id' => $usuario->id,
            'email' => 'diegopenagos955@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $usuario = Usuario::where('numero_de_documento', 1109840652)->first(); // Consultar Persona
        User::updateOrCreate(['subnombre' => 'MSC6352'], [ // Actualizar o crear usuario
            'usuario_id' => $usuario->id,
            'email' => 'mayerlicastañeda2004@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
