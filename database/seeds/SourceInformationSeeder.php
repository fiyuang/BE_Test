<?php

use Illuminate\Database\Seeder;
use App\SourceInformation;

class SourceInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $informations = [
            [
              'name' => 'Internet'
            ],
            [
              'name' => 'Instagram'
            ],
            [
              'name' => 'Twitter'
            ],
            [
              'name' => 'Kampus'
            ],
            [
              'name' => 'Facebook'
            ],
            [
              'name' => 'Lain-lain'
            ]
        ];

        SourceInformation::insert($informations);
    }
}
