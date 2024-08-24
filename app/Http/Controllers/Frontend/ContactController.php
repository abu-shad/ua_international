<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function employer(){
        return view('frontend.contact.employer');
    }

    public function jobSeeker(){
        return view('frontend.contact.job-seeker');
    }

    public function career(){
        return view('frontend.contact.career');
    }

    public function globalPresence(){
        return view('frontend.contact.global-presence');
    }
}
