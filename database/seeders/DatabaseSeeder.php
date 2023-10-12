<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // Importa la clase Seeder de Laravel

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TestSeeder::class, // Llama al seeder TestSeeder para poblar la base de datos
        ]);
    }
}
