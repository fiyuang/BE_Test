<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $guarded = [];

    protected $dates = [
        'date_of_birth'
    ];

    protected $appends = [
        'date_formatted',
    ];

    public function candidate_organization()
    {
        return $this->hasOne('App\CandidateOrganization', 'candidate_id');
    }

    public function candidate_status()
    {
        return $this->belongsTo('App\CandidateStatus', 'id');
    }

    public function scopeManOnly($query)
    {
        $query->where('gender', 'L');
    }

    public function scopeWomanOnly($query)
    {
        $query->where('gender', 'P');
    }

    public function getDateFormattedAttribute()
    {
        return $this->created_at ? $this->created_at->format('d F Y') : '-';
    }
}
