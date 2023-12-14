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
        User::create([
            'id' => 3, 
            'name' => 'example',
            'email' => 'example@example.com', 
            'password' => Hash::make('1234567'),
            'age' => 20,
            'address' => 'Tunapuy',
            'zip_code' => 7654321
        ]);
    }
}
