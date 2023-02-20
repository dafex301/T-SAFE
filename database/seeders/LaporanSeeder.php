<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate 50 Laporan
        // pelapor is between 7 to 11
        // kategori is between 0 to 5
        // When the kategori is 0, kategori_lain is not null (random string 1 word)
        // Random the date between 2023-01-01 to 2023-12-31
        // Deskripsi, lokasi, image is random string 1 word
        // pic_checked is random boolean
        // pic_checked_at is random date between 2023-01-01 to 2023-12-31
        // pic is 4
        // branch_manager is 6
        // branch_manager_approval is random boolean
        // branch_manager_approval_at is random date between 2023-01-01 to 2023-12-31
        // immediate_action, prevention, completed_image is random string 1 word
        // completed is random boolean
        // completed_by is 4 or 5
        // completed_at is not so far from created_at, maximum 1 day


        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 1024; $i++) {
            $pelapor = $faker->numberBetween(7, 11);
            $kategori = $faker->numberBetween(0, 5);
            $kategori_lain = $kategori == 0 ? $faker->word : null;
            $tanggal = $faker->dateTimeBetween('2023-01-01', '2023-12-31');
            $deskripsi = $faker->word;
            $lokasi = $faker->word;
            $image = $faker->word;
            $pic_checked = $faker->boolean;
            $pic_checked_at = $pic_checked ? $faker->dateTimeBetween('2023-01-01', '2023-12-31') : null;
            $pic = 4;
            $branch_manager = 6;
            $branch_manager_approval = $faker->boolean;
            $branch_manager_approval_at = $branch_manager_approval ? $faker->dateTimeBetween('2023-01-01', '2023-12-31') : null;
            $immediate_action = $faker->word;
            $prevention = $faker->word;
            $completed_image = $faker->word;
            $completed = $faker->boolean;
            $completed_by = $completed ? $faker->numberBetween(4, 5) : null;
            // created_at is random date between $tanggal + 1 day
            $created_at = $faker->dateTimeBetween($tanggal, $tanggal->modify('+1 day'));
            // completed_at is not so far from created_at, maximum 1 day
            $completed_at = $completed ? $faker->dateTimeBetween($created_at, $tanggal->modify('+1 day')) : null;


            \App\Models\Laporan::create([
                'pelapor' => $pelapor,
                'tanggal' => $tanggal,
                'lokasi' => $lokasi,
                'kategori' => $kategori,
                'kategori_lain' => $kategori_lain,
                'deskripsi' => $deskripsi,
                'image' => $image,
                'pic_checked' => $pic_checked,
                'pic_checked_at' => $pic_checked_at,
                'pic' => $pic,
                'branch_manager' => $branch_manager,
                'branch_manager_approval' => $branch_manager_approval,
                'branch_manager_approval_at' => $branch_manager_approval_at,
                'immediate_action' => $immediate_action,
                'prevention' => $prevention,
                'completed' => $completed,
                'completed_image' => $completed_image,
                'completed_at' => $completed_at,
                'completed_by' => $completed_by,
                'created_at' => $created_at,
            ]);
        }
    }
}
