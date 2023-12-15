<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // los usuarios anteriores se usaron en el controller para un ejemplo
        User::create([
            'id' => 3, 
            'name' => 'example',
            'email' => 'example@example.com', 
            'password' => Hash::make('1234567'),
            'age' => 20,
            'address' => 'Tunapuy',
            'zip_code' => 7654321
        ]);

        // para el ejemplo de la relacino muchos a muchos
        User::create([
            'id' => 4,
            'name' => 'example2',
            'email' => 'example2@example.com',
            'password' => Hash::make('1234567'),
            'age' => 20,
            'address' => 'Tunapuy',
            'zip_code' => 7654321
        ]);

        User::create([
            'id' => 5,
            'name' => 'example3',
            'email' => 'example3@example.com',
            'password' => Hash::make('1234567'),
            'age' => 20,
            'address' => 'Tunapuy',
            'zip_code' => 7654321
        ]);
    }
}
