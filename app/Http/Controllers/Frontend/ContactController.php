<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Career;
use App\Models\ApplyJob;
use App\Models\Employer;
use App\Models\Industry;
use App\Models\JobSeeker;
use App\Mail\EmployerMail;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use App\Models\ApplyCareerJob;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    use FileUpload;
    public function employer(){
        return view('frontend.contact.employer');
    }

    public function jobSeeker(){
        return view('frontend.contact.job-seeker');
    }

    public function career(){
        $jobs = Career::paginate(10);
        $count = Career::count();
        $industries = Industry::get();
        return view('frontend.contact.career', compact('jobs', 'count', 'industries'));
    }

    public function careerSearch($id){
        $jobs = Career::where('industry_id', $id)->paginate(10);
        $count = Career::where('industry_id', $id)->count();
        $industries = Industry::get();
        return view('frontend.contact.search-career', compact('jobs', 'count', 'industries'));
    }

    public function createCareerDetail(Request $request)
    {
        $request->validate([
            'fullname'    => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:15',
            'description' => 'required|string|max:500',
            'resume'      => 'required|file|mimes:pdf,doc,docx',
        ]);

        if ($request->hasFile('resume')) {
            
            $path = 'career/resume';
            $image = $request->file('resume');
            $file  = time() . '.' . $image->getClientOriginalExtension();
            $path = $path . '/' . $file;

            Storage::disk('public')->put($path, file_get_contents($image)); 
        }

        $data = $request->all();
        $data['resume'] = isset($file) ? $file : '';
        ApplyCareerJob::create($data);
        return back()->with('success', 'Job application submitted successfully!');
    }

    public function globalPresence(){
        return view('frontend.contact.global-presence');
    }

    public function createEmployer(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|string',
            'designation' => 'required|string',
            'country' => 'required|string'
        ]);

        $contact = [
            'name' => $request->name ?? 'N/A',
            'company' => $request->company ?? 'N/A',
            'email' => $request->email ?? 'N/A',
            'phone' => $request->phone ?? 'N/A',
            'message' => $request->message ?? 'N/A'
        ];
        
        Mail::to('bdm@uainternational.in')->send(new \App\Mail\EmployerMail($contact));
        Employer::create($validatedData);

        return redirect()->back()->with('success', 'Employer Query Submitted successfully.');
    }

    public function creatJobSeeker(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string|max:20',
            'religion' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'passport_no' => 'required|string|max:50',
            'valid_from' => 'required|date',
            'valid_to' => 'required|date',
            'designation' => 'required|string|max:255',
            'domestic_exp' => 'required|string',
            'oversease_exp' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|string',
            'resume' => 'required|mimes:pdf,doc,docx',
        ]);

        if ($request->hasFile('resume')) {
            
            $path = 'resume';
            $image = $request->file('resume');
            $file  = time() . '.' . $image->getClientOriginalExtension();
            $path = $path . '/' . $file;

            Storage::disk('public')->put($path, file_get_contents($image)); 
        }

        $data = $request->all();
        $data['resume'] = isset($file) ? $file : '';
        JobSeeker::create($data);
        return back()->with('success', 'Form submitted successfully.');
    }

    public function creatApplyJob(Request $request)
    {
        $request->validate([
            'fullname'    => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:15',
            'description' => 'required|string|max:500',
            'resume'      => 'required|file|mimes:pdf,doc,docx',
        ]);

        if ($request->hasFile('resume')) {
            
            $path = 'resume';
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
