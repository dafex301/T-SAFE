<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'role' => 1,
            'username' => 'admin',
            'password' => 'admin',
            'cabang' => 1
        ]);

        User::factory()->create([
            'role' => 2,
            'username' => 'user-jkt',
            'password' => 'user-jkt',
            'cabang' => 1
        ]);

        User::factory()->create([
            'role' => 2,
            'username' => 'user-smg',
            'password' => 'user-smg',
            'cabang' => 2
        ]);

        User::factory()->create([
            'role' => 3,
            'username' => 'pic-jkt',
            'password' => 'pic-jkt',
            'cabang' => 1
        ]);

        User::factory()->create([
            'role' => 3,
            'username' => 'pic-smg',
            'password' => 'pic-smg',
            'cabang' => 2
        ]);

        User::factory()->create([
            'role' => 4,
            'username' => 'dpnp',
            'password' => 'dpnp',
            'cabang' => 1
        ]);

        User::factory()->create([
            'role' => 5,
            'username' => 'bm-jkt',
            'password' => 'bm-jkt',
            'cabang' => 1
        ]);

        User::factory()->create([
            'role' => 5,
            'username' => 'bm-smg',
            'password' => 'bm-smg',
            'cabang' => 2
        ]);
    }
}
