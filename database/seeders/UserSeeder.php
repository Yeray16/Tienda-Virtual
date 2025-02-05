<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [['name' => 'John Doe', 'email' => 'john@doe.es', 'password' => bcrypt('12345678')], 
                    ['name' => 'Pepe', 'email' => 'pepe@pepe.es', 'password' => bcrypt('12345678')], 
                    ['name' => 'Juan', 'email' => 'juan@juan.es', 'password' => bcrypt('12345678')], 
                    ['name' => 'Pedro', 'email' => 'pedro@pedro.es', 'password' => bcrypt('12345678')]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
