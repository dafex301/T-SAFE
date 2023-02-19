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
        ]);
        User::factory()->create([
            'role' => 3,
            'username' => 'pic',
        ]);

        User::factory()->create([
            'role' => 4,
            'username' => 'dpp',
        ]);



        User::factory()->count(5)->create();
    }
}
