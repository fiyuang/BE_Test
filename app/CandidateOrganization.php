<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateOrganization extends Model
{
    protected $guarded = [];

    public function candidate()
    {
        return $this->belongsTo('App\Candidate', 'candidate_id');
    }
}
