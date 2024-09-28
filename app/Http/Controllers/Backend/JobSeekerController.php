<?php

namespace App\Http\Controllers\Backend;

use App\Models\JobSeeker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class JobSeekerController extends Controller
{
    public function jobSeekerList()
    {
        $jobSeekers = JobSeeker::paginate(10);
        return view('backend.job-seekers.list', compact('jobSeekers'));
    }

    public function destroyJobSeeker($id)
    {
        $insudtry = JobSeeker::find($id);
        $insudtry->delete();
        return redirect()->route('job.seekers.list')->with('success', 'Job Seeker deleted successfully.');
    }

    public function download($filename)
    {
        $path = storage_path('app/public/resume/' . $filename);

        if (file_exists($path)) {
            return Response::download($path);
        }else{
            return redirect()->back()->with('error', 'File not exixt.');
        }
    }
}
