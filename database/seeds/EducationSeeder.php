<?php

use Illuminate\Database\Seeder;
use App\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $educations = [
            [
              'name' => 'SMA'
            ],
            [
              'name' => 'S1'
            ],
            [
              'name' => 'S2'
            ],
            [
              'name' => 'S3'
            ],
            [
              'name' => 'D3'
            ],
            [
              'name' => 'D4'
            ]
        ];

        Education::insert($educations);
    }
}
