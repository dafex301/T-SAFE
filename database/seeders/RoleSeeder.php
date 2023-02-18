<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create role seeder that is staff, PIC, and DPP
        $roles = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Staff',
            ],
            [
                'name' => 'PIC',
            ],
            [
                'name' => 'DPP',
            ],
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create($role);
        }
    }
}
