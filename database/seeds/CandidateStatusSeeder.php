<?php

use Illuminate\Database\Seeder;
use App\CandidateStatus;

class CandidateStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
              'status' => 'Review JLI',
              'code' => '<label class="badge badge-gradient-warning">Review</label>'
            ],
            [
              'status' => 'Tidak Lolos (Oleh JLI)',
              'code' => '<label class="badge badge-gradient-danger">Tidak Lolos (Oleh JLI)</label>'
            ],
            [
              'status' => 'Review Unit Kerja',
              'code' => '<label class="badge badge-gradient-info">Review Unit Kerja</label>'
            ],
            [
              'status' => 'Lolos (Oleh Unit Kerja)',
              'code' => '<label class="badge badge-gradient-success">Lolos (Oleh Unit Kerja)</label>'
            ],
            [
              'status' => 'Tidak Lolos (Oleh Unit Kerja)',
              'code' => '<label class="badge badge-gradient-danger">Tidak Lolos (Oleh Unit Kerja)</label>'
            ],
        ];

        CandidateStatus::insert($statuses);
    }
}
