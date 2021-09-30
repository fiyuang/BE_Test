<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidate';
    protected $guarded = [];

    protected $dates = [
        'date_of_birth'
    ];

    public function candidate_organization()
    {
        return $this->hasOne('App\CandidateOrganization', 'candidate_id');
    }
}
