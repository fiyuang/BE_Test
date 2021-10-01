<?php

use Illuminate\Database\Seeder;
use App\University;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $universities = [
            [
              'name' => 'Universitas Singaperbangsa Karawang'
            ],
            [
              'name' => 'Institut Teknologi Bandung'
            ],
            [
              'name' => 'Universitas Trisakti'
            ],
            [
              'name' => 'Universitas Jakarta'
            ],
            [
              'name' => 'Universitas Telkom'
            ],
            [
              'name' => 'Universitas Malang'
            ],
            [
              'name' => 'Universitas Negeri Jakarta'
            ],
            [
              'name' => 'Universitas Padjajaran'
            ],
            [
              'name' => 'Institut Kesehatan Deli Husada Deli Tua'
            ],
            [
              'name' => 'Institut Teknologi Nasional Bandung'
            ],
            [
              'name' => 'Institut Teknologi Sepuluh Nopember'
            ],
            [
              'name' => 'Politeknik Negeri Jakarta'
            ],
            [
              'name' => 'Politeknik Negeri Media Kreatif'
            ],
            [
              'name' => 'Sekolah Tinggi Ilmu Ekonomi Indonesia'
            ],
            [
              'name' => 'Sekolah Tinggi Teknik PLN'
            ],
            [
              'name' => 'Sekolah Tinggi Teknologi Bandung'
            ],
            [
              'name' => 'STMIK Nusa Mandiri'
            ],
            [
              'name' => 'Universitas Bakrie'
            ],
            [
              'name' => 'Universitas Bina Nusantara'
            ],
            [
              'name' => 'Universitas Brawijaya'
            ],
            [
              'name' => 'Universitas Esa Unggul'
            ],
            [
              'name' => 'Universitas Fajar'
            ],
            [
              'name' => 'Universitas Islam Indonesia'
            ],
            [
              'name' => 'Universitas Islam Negeri Sunan Gunung Jati Bandung'
            ]
        ];

        University::insert($universities);
    }
}
