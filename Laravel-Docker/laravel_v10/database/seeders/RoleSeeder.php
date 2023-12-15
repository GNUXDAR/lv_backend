<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB; // uso de DB

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // varios roles para el ejemplo de relaciones mucho a muchos
        Role::create([
            'id' => 1,
            'name' => 'admin',
        ]);

        Role::create([
            'id' => 2,
            'name' => 'staff',
        ]);

        Role::create([
            'id' => 3,
            'name' => 'user',
        ]);

        Role::create([
            'id' => 4,
            'name' => 'guest',
        ]);

        // crear asociacion entre modelos, para ejemplo mucho a muchos
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'added_by' => '@gnuxdar'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1,
            'added_by' => '@mjpb'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 2,
            'added_by' => '@example'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 2,
            'added_by' => '@gnuxdar'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 4,
            'user_id' => 2,
            'added_by' => '@gnuxdar'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 3,
            'added_by' => '@gnuxdar'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 3,
            'added_by' => '@gnuxdar'
        ]);
    }
}
