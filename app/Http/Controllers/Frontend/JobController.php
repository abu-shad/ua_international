<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobsList(){
        return view('frontend.jobs.jobs-list');
    }

    public function jobsGrid(){
        return view('frontend.jobs.jobs-grid');
    }

    public function jobDetail(){
        return view('frontend.jobs.job-details');
    }
}
