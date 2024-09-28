<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blogDetails($id){
        $blog = Blog::find($id);
        return view('frontend.blog.blog-details', compact('blog'));
    }
}
