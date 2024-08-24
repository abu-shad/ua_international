<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndustryController extends Controller
{
    public function healthcare(){
        return view('frontend.industry.healthcare');
    }

    public function construction(){
        return view('frontend.industry.construction');
    }

    public function hospitality(){
        return view('frontend.industry.hospitality');
    }

    public function oilAndGas(){
        return view('frontend.industry.oil-and-gas');
    }

    public function fmcg(){
        return view('frontend.industry.fmcg');
    }

    public function informationTechnologies(){
        return view('frontend.industry.information-technologies');
    }

    public function automobiles(){
        return view('frontend.industry.automobiles');
    }
}
