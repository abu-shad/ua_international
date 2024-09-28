<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\Help;
use App\Models\Service;
use App\Models\Industry;
use App\Models\Presence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $industryCount = Industry::count();
        $presenceCount = Presence::count();
        $serviceCount = Service::count();
        $recentEnquries = Help::orderBy('id', 'desc')->paginate(100);
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('backend.dashboard', compact('industryCount', 'presenceCount', 'serviceCount', 'recentEnquries', 'blogs'));
    }
}