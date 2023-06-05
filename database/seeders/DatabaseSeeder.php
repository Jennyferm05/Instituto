<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            "name" => 'Junior Medina',
            "email" => 'jsmedinah5873@gmail.com',
            'password' => bcrypt('j2u0n0i5or')

        ]);
        User::factory(0)->create();
        User::create([
            "name" => 'Jennifer Marin',
            "email" => 'jennyfermarin05@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        User::factory(0)->create();
        User::create([
            "name" => 'Saira Guevara',
            "email" => 'guevarax72@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        User::factory(0)->create();
        User::create([
            "name" => 'Diego Penagos',
            "email" => 'diegopenagos955@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        User::factory(0)->create();
        User::create([
            "name" => 'Mayerli Castañeda',
            "email" => 'mayerlicastañeda2004@gmail.com ',
            'password' => bcrypt('123456789')
        ]);
        User::factory(0)->create();
    }
}
