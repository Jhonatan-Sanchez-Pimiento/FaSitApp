<?php

namespace Database\Seeders;

use \App\Models\Usuario;
use Database\Factories\UsuarioFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Usuario::factory(50)->create();

    }
}
