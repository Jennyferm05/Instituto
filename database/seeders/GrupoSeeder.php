<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grado;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Grado::create([
            "nombre" => 'Junior Medina',
            "nivel" => 'Primaria',
            "coordinador_grado" => 'Saira Sanceno',
        ]);
        Grado::factory(0)->create();
    }
}