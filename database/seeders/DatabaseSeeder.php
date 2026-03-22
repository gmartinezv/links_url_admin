<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

         DB::table('categorias')->insert([
            'nombre' => 'Youtube',            
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Cursos',            
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Tecnologia',            
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Educación',            
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Prensa',            
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Bancos',            
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'España',            
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Chile',            
        ]);



    }
}
