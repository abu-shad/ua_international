<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function saudiArabia(){
        return view('frontend.clients.saudi-arabia');
    }

    public function uae(){
        return view('frontend.clients.uae');
    }

    public function qatar(){
        return view('frontend.clients.qatar');
    }

    public function KingdomOfBahrain(){
        return view('frontend.clients.KingdomOfBahrain');
    }

    public function oman(){
        return view('frontend.clients.oman');
    }
}
