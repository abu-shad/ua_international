<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
