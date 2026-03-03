<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '081111111',
            'ttl' => '1990-01-01',
            'foto' => 'profile.jpg',
        ]);
    }
}
