<?php

use Illuminate\Database\Seeder;
use App\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $banks = [
            [
              'name' => 'Bank Central Asia'
            ],
            [
              'name' => 'Bank Mandiri'
            ],
            [
              'name' => 'Bank Negara Indonesia'
            ],
            [
              'name' => 'Bank Republik Indonesia'
            ],
            [
              'name' => 'Bank Jabar'
            ],
            [
              'name' => 'Permata'
            ],
            [
              'name' => 'BTPN'
            ]
        ];

        Bank::insert($banks);
    }
}
