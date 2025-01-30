<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Electrónica', 'description' => 'Dispositivos electrónicos y gadgets'],
            ['name' => 'Ropa', 'description' => 'Ropa para hombres, mujeres y niños'],
            ['name' => 'Hogar', 'description' => 'Artículos para el hogar y la cocina'],
            ['name' => 'Libros', 'description' => 'Libros de todos los géneros'],
            ['name' => 'Juguetes', 'description' => 'Juguetes y juegos para todas las edades'],
        ]);
    }
}
