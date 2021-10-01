<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateStatus extends Model
{
    protected $guarded = [];

    public function candidate()
    {
        return $this->hasMany('App\Candidate', 'candidate_status_id');
    }
}
