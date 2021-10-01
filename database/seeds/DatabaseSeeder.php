<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(BankSeeder::class);
        $this->call(CandidateStatusSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(ReligionSeeder::class);
        $this->call(SourceInformationSeeder::class);
        $this->call(UniversitySeeder::class);
    }
}
