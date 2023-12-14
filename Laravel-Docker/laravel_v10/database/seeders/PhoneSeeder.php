<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix'=> 593,
            'phone_number' => 1234567,
            'user_id' => 3
        ]);

        // otro dato para la relacion uno a muchos
        Phone::create([
            'prefix' => 58,
            'phone_number' => 7654321,
            'user_id' => 3
        ]);
    }
}
