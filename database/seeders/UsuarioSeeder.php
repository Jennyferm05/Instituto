<?php

namespace Database\Seeders;
use App\Models\Usuario;
use App\Models\Eps;
use Database\Factories\usuarioFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numero_usuarios = 0; // Definir la cantidad de personas


        $eps = EPS::firstOrCreate(['nombre' => 'NO REGISTRA']);
        $eps = EPS::firstOrCreate(['nombre' => 'CONFAMILIAR']);
        $eps = EPS::firstOrCreate(['nombre' => 'SANITAS']);
        $eps = EPS::firstOrCreate(['nombre' => 'ASMET SALUD']);

        usuario::firstOrCreate(['numero_de_documento' => 1079173785],[
            'tipo_de_documento' => 'Cédula de ciudadanía',
            'primer_nombre' => 'Junior',
            'segundo_nombre' => 'Stiven',
            'primer_apellido' => 'Medina',
            'segundo_apellido' => 'Hernandez',
            'eps_id' => $eps->id
        ]);
        usuario::firstOrCreate(['numero_de_documento' => 1075791904],[
            'tipo_de_documento' => 'Tarjeta de identidad',
            'primer_nombre' => 'Jennifer',
            'primer_apellido' => 'Marin',
            'segundo_apellido' => 'Montenegro',
            'eps_id' => $eps->id
        ]);
        usuario::firstOrCreate(['numero_de_documento' => 1079172278],[
            'tipo_de_documento' => 'Cédula de ciudadanía',
            'primer_nombre' => 'Saira',
            'segundo_nombre' => 'Xiomara',
            'primer_apellido' => 'Guevara',
            'segundo_apellido' => 'Sanceno',
            'eps_id' => $eps->id
        ]);
        usuario::firstOrCreate(['numero_de_documento' => 1081152391],[
            'tipo_de_documento' => 'Tarjeta de identidad',
            'primer_nombre' => 'Diego',
            'segundo_nombre' => 'Alejandro',
            'primer_apellido' => 'Penagos',
            'segundo_apellido' => 'Ninco',
            'eps_id' => $eps->id
        ]);
        usuario::firstOrCreate(['numero_de_documento' => 1109840652],[
            'tipo_de_documento' => 'Cédula de ciudadanía',
            'primer_nombre' => 'Mayerli',
            'segundo_nombre' => 'Shirley',
            'primer_apellido' => 'Castañeda',
            'segundo_apellido' => 'Conde',
            'eps_id' => $eps->id
        ]);

        print_r("Creando " . $numero_usuarios . " usuarios.\n");
        usuario::factory()->count($numero_usuarios)->create();
    }
}
