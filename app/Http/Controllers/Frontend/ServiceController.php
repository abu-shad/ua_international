<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function overseasRecruitmentService(){
        return view('frontend.services.oversease-recruitment-service');
    }

    public function digitalMarketing(){
        return view('frontend.services.digital-marketing');
    }

    public function documentAttestation(){
        return view('frontend.services.document-attestation');
    }

    public function globalExecutiveSearch(){
        return view('frontend.services.global-executive-search');
    }

    public function skillTrainingTesting(){
        return view('frontend.services.skill-training-testing');
    }

    public function travelTourism(){
        return view('frontend.services.travel-tourism');
    }

    public function umrah(){
        return view('frontend.services.umrah');
    }

    public function webAppDevelopment(){
        return view('frontend.services.web-app-development');
    }
}
