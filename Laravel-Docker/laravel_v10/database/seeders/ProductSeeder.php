<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Provider\Lorem;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::create([
        //     'name' => 'Example',
        //     'short_description' =>'Lorem ipsum',
        //     'description' => 'lorem osum dolor set aimet.',
        //     'price' => 42
        // ]);

        // Product::create([
        //     'name' => 'Example 2',
        //     'short_description' =>'Lorem ipsum',
        //     'description' => 'lorem osum dolor set aimet.',
        //     'price' => 20
        // ]);

        // Product::create([
        //     'name' => 'Example 3',
        //     'short_description' =>'Lorem ipsum',
        //     'description' => 'lorem osum dolor set aimet.',
        //     'price' => 20
        // ]);

        // Seeder con factory
        Product::factory()->count(100)->create();


    }
}
