<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function photoGallery(){
        return view('frontend.gallery.photo-gallery');
    }

    public function technicalTrade(){
        return view('frontend.gallery.technical-trade');
    }
}
