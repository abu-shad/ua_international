<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Job;
use App\Models\ApplyJob;
use App\Models\Industry;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class JobController extends Controller
{
    use FileUpload;

    public function jobList()
    {
        $jobs = Job::paginate(10);
        return view('backend.jobs.list', compact('jobs'));
    }

    public function createJobForm()
    {
        $industries = Industry::get();
        return view('backend.jobs.create', compact('industries'));
    }

    public function createJob(Request $request)
    {
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string',
            'education_level' => 'required|in:high school,associate,bachelor,master,doctorate',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|gte:salary_min',
            'employment_type' => 'required|in:full_time,part_time,contract,temporary,internship',
            'experience_level' => 'nullable',
            'industry_id' => 'required|numeric',
            'description' => 'required|string',
            'requirements.*' => 'required',
            'responsibilities' => 'required|string',
            'location' => 'required|string',
            'posted_at' => 'nullable|date',
            'expires_at' => 'nullable|date|after_or_equal:posted_at',
            'application_deadline' => 'nullable|date|after_or_equal:posted_at',
            'job_image' => 'required|mimes:jpeg,jpg,png,PNG|dimensions:max_width=410,max_height=260'
        ]);

        if ($request->hasFile('job_image')) {
            $path = 'job';
            $image = $request->file('job_image');
            $pathImage = FileUpload::imageUpload($image, $path);
        }

     
        $data = $request->all();
        $data['requirements'] = json_encode($data['requirements']);
        $data['job_image'] = $pathImage;

        Job::create($data);
        return redirect()->route('job.list')->with('success', 'Job created successfully.');
    }

    public function editJob($id)
    {
        $job = Job::find($id);
        $industries = Industry::get();
        return view('backend.jobs.edit-job', compact('job', 'industries'));
    }

    public function updateJob(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string',
            'education_level' => 'required|in:high school,associate,bachelor,master,doctorate',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|gte:salary_min',
            'employment_type' => 'required|in:full_time,part_time,contract,temporary,internship',
            'experience_level' => 'nullable',
            'industry_id' => 'required|numeric',
            'description' => 'required|string',
            'requirements.*' => 'required',
            'responsibilities' => 'required|string',
            'location' => 'required|string',
            'posted_at' => 'nullable|date',
            'expires_at' => 'nullable|date|after_or_equal:posted_at',
            'application_deadline' => 'nullable|date|after_or_equal:posted_at',
            'job_image' => 'nullable|mimes:jpeg,jpg,png,PNG|dimensions:max_width=410,max_height=260'
        ]);

        
        $jobUpdate = $request->all();
        $job = Job::find($id);

        if ($request->hasFile('job_image')) {

            if ($job->image) {
                Storage::disk('public')->delete($job->job_image);
            }

            $path = 'job';
            $image = $request->file('job_image');
            $pathImage = FileUpload::imageUpload($image, $path);
            $jobUpdate['job_image'] = $pathImage;
        }

        $job->update($jobUpdate);
        return redirect()->route('job.list')->with('success', 'Job updated successfully.');
    }

    public function destroyJob($id)
    {
        $job = Job::find($id);
        $job->delete(); 
        return redirect()->route('job.list')->with('success', 'Job deleted successfully.');
    }

    public function applyJob(){
        $appliedJobs = ApplyJob::paginate(10);
        return view('backend.apply-job.list', compact('appliedJobs'));
    }

    public function destroyAppliedJob($id)
    {
        $job = ApplyJob::find($id);
        $job->delete(); 
        return redirect()->route('apply.list')->with('success', 'Applied job deleted successfully.');
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