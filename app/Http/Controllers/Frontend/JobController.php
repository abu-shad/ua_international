<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\ApplyJob;
use App\Models\Industry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function jobsList(){
        $jobs = Job::paginate(10);
        $count = Job::count();
        $industries = Industry::get();
        return view('frontend.jobs.jobs-list', compact('jobs', 'count', 'industries'));
    }

    public function jobsListSearch($id){
        $jobs = Job::where('industry_id', $id)->paginate(10);
        $count = Job::where('industry_id', $id)->count();
        $industries = Industry::get();
        return view('frontend.jobs.search-list', compact('jobs', 'count', 'industries'));
    }

    public function jobsGrid(){
        $jobs = Job::paginate(10);
        $count = Job::count();
        $industries = Industry::get();
        return view('frontend.jobs.jobs-grid', compact('jobs', 'count', 'industries'));
    }

    public function jobsGridSearch($id){
        $jobs = Job::where('industry_id', $id)->paginate(10);
        $count = Job::where('industry_id', $id)->count();
        $industries = Industry::get();
        return view('frontend.jobs.search-grid', compact('jobs', 'count', 'industries'));
    }

    public function jobDetail($id){

        $job = Job::where('id', $id)->first();
        $smililarJobs = Job::where('id', $id)->get();
        return view('frontend.jobs.job-details', compact('job'));
    }

    public function createJobDetail(Request $request)
    {
        $request->validate([
            'fullname'    => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:15',
            'description' => 'required|string|max:500',
            'resume'      => 'required|file|mimes:pdf,doc,docx',
        ]);

        if ($request->hasFile('resume')) {
            
            $path = 'applyjobs/resume';
            $image = $request->file('resume');
            $file  = time() . '.' . $image->getClientOriginalExtension();
            $path = $path . '/' . $file;

            Storage::disk('public')->put($path, file_get_contents($image)); 
        }

        $data = $request->all();
        $data['resume'] = isset($file) ? $file : '';
        ApplyJob::create($data);
        return back()->with('success', 'Job application submitted successfully!');
    }
}
