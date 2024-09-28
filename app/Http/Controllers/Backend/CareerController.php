<?php

namespace App\Http\Controllers\Backend;

use App\Models\Career;
use App\Models\Industry;
use Illuminate\Http\Request;
use App\Models\ApplyCareerJob;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class CareerController extends Controller
{
    public function careerList()
    {
        $careers = Career::paginate(10);
        return view('backend.career.list', compact('careers'));
    }

    public function createCareerForm()
    {
        $industries = Industry::get();
        return view('backend.career.create', compact('industries'));
    }

    public function createCareer(Request $request)
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
        ]);

     
        $data = $request->all();
        $data['requirements'] = json_encode($data['requirements']);

        Career::create($data);
        return redirect()->route('career.list')->with('success', 'Career created successfully.');
    }

    public function editCareer($id)
    {
        $career = Career::find($id);
        $industries = Industry::get();
        return view('backend.career.edit-career', compact('career', 'industries'));
    }

    public function updateCareer(Request $request, $id)
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
        ]);

        $career = Career::find($id);
        $career->update($validated);
        return redirect()->route('career.list')->with('success', 'Career updated successfully.');
    }

    public function destroyCareer($id)
    {
        $career = Career::find($id);
        $career->delete(); 
        return redirect()->route('career.list')->with('success', 'Career deleted successfully.');
    }

    public function applyCareer(){
        $appliedJobs = ApplyCareerJob::paginate(10);
        return view('backend.apply-career-job.list', compact('appliedJobs'));
    }

    public function destroyAppliedCareer($id)
    {
        $job = ApplyCareerJob::find($id);
        $job->delete(); 
        return redirect()->route('career.list')->with('success', 'Applied job deleted successfully.');
    }

    public function downloadCareer($filename)
    {
        $path = storage_path('app/public/career/resume/' . $filename);

        if (file_exists($path)) {
            return Response::download($path);
        }else{
            return redirect()->back()->with('error', 'File not exixt.');
        }
    }
}
