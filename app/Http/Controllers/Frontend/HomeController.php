<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Job;
use App\Models\Blog;
use App\Models\Marque;
use App\Models\Service;
use App\Models\Industry;
use App\Models\Presence;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // dd(Carbon::now()->format('Y-m-d'));
        $marques = Marque::orderBy('id', 'desc')->take(2)->get();
        $industries = Industry::with(['jobs' => function ($query) {
            $query->whereDate('posted_at', '<=', Carbon::now());
        }])->get();
        $services = Service::get();
        $presences = Presence::get();
        $blogs = Blog::get();
        return view('frontend.index', compact('marques', 'industries', 'services', 'presences', 'blogs'));
    }

    public function subscriber(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email'
        ]);

        Subscriber::create($validatedData);
        return redirect()->route('home')->with('success', 'Successfully subscribed.');
    }
}
