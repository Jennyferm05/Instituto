<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Grupo::create([
            "nombre" => 'Junior Medina',
            "nivel" => 'Primaria',
            "coordinador_grado" => 'Saira Sanceno',
        ]);
        Grupo::factory(0)->create();
    }
}
