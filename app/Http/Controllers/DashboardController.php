<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class DashboardController extends Controller
{
    public function index()
    {
        $candidates = Candidate::with('candidate_status')->get();
        $men_candidate = Candidate::ManOnly()->count();
        $women_candidate = Candidate::WomanOnly()->count();
        $total_candidate = Candidate::count();
 
        // dd($candidates);
 
        return view('dashboard', [
            'candidates' => $candidates,
            'men_candidate' => $men_candidate,
            'women_candidate' => $women_candidate,
            'total_candidate' => $total_candidate
        ]);
    }
}
