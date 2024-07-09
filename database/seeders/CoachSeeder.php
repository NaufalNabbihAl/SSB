<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coachs = [
            [
                'nomor_psad' => '123456',
                'nama' => 'Joko',
                'kewarganegaraan' => 'Indonesia',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1990-01-01',
            ],
            [
                'nomor_psad' => '123457',
                'nama' => 'Budi',
                'kewarganegaraan' => 'Indonesia',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1991-01-01',
                'photo' => 'budi.jpg',
            ],
            [
                'nomor_psad' => '123458',
                'nama' => 'Susi',
                'kewarganegaraan' => 'Indonesia',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1992-01-01',
                'photo' => 'susi.jpg',
            ],
        ];

        foreach ($coachs as $coach) {
            \App\Models\Coach::create($coach);
        }
    }
}
