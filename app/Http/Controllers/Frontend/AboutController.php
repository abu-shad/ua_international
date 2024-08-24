<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function whyChooseUs(){
        return view('frontend.about.why-choose-us');
    }

    public function boardOfDirectors(){
        return view('frontend.about.board-of-directors');
    }

    public function leadershipTeam(){
        return view('frontend.about.leadership-team');
    }

    public function missionVission(){
        return view('frontend.about.mission-vission');
    }
}
