<?php

use Illuminate\Database\Seeder;
use App\Religion;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religions = [
            [
              'name' => 'Islam'
            ],
            [
              'name' => 'Budha'
            ],
            [
              'name' => 'Protestan'
            ],
            [
              'name' => 'Katolik'
            ],
            [
              'name' => 'Hindu'
            ]
        ];

        Religion::insert($religions);
    }
}
