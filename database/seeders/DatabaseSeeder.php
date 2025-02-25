<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void //a classe DatabaseSeeder fica responsável por chamar os outros seeders//
    {
        $this->call([
            TarefaSeeder::class
        ]);
        
        $this->call([
            UsuarioSeeder::class
        ]);
    }


}
