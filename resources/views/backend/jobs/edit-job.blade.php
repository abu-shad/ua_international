@extends('backend.layouts.main')

@section('title', 'Edit Jobs')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Job</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Edit Job</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('job.update', $job->id) }}" enctype="multipart/form-data"> <!-- Adjust the route to point to the update method -->
                @csrf
                @method('PUT') <!-- Add this to indicate it's an update request -->
            
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Edit Job Form</h5> <!-- Changed the title to 'Edit Job Form' -->
            
                                <!-- Edit Job Form -->
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $job->title) }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" class="form-control" name="company" id="company" placeholder="Company" value="{{ old('company', $job->company) }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="education_level" class="form-label">Education</label>
                                        <select name="education_level" id="education_level" class="form-select">
                                            <option value="high_school" {{ old('education_level', $job->education_level) == 'high_school' ? 'selected' : '' }}>High school</option>
                                            <option value="associate" {{ old('education_level', $job->education_level) == 'associate' ? 'selected' : '' }}>Associate</option>
                                            <option value="bachelor" {{ old('education_level', $job->education_level) == 'bachelor' ? 'selected' : '' }}>Bachelor</option>
                                            <option value="master" {{ old('education_level', $job->education_level) == 'master' ? 'selected' : '' }}>Master</option>
                                            <option value="doctorate" {{ old('education_level', $job->education_level) == 'doctorate' ? 'selected' : '' }}>Doctorate</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="salary_min" class="form-label">Salary Min</label>
                                        <input type="number" class="form-control" name="salary_min" id="salary_min" value="{{ old('salary_min', $job->salary_min) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="salary_max" class="form-label">Salary Max</label>
                                        <input type="number" class="form-control" name="salary_max" id="salary_max" value="{{ old('salary_max', $job->salary_max) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="employment_type" class="form-label">Employment Type</label>
                                        <select id="employment_type" name="employment_type" class="form-select">
                                            <option value="full_time" {{ old('employment_type', $job->employment_type) == 'full_time' ? 'selected' : '' }}>Full-time</option>
                                            <option value="part_time" {{ old('employment_type', $job->employment_type) == 'part_time' ? 'selected' : '' }}>Part-time</option>
                                            <option value="contract" {{ old('employment_type', $job->employment_type) == 'contract' ? 'selected' : '' }}>Contract</option>
                                            <option value="temporary" {{ old('employment_type', $job->employment_type) == 'temporary' ? 'selected' : '' }}>Temporary</option>
                                            <option value="internship" {{ old('employment_type', $job->employment_type) == 'internship' ? 'selected' : '' }}>Internship</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="experience_level" class="form-label">Experience</label>
                                        <select id="experience_level" name="experience_level" class="form-select">
                                            <option value="entry_level" {{ old('experience_level', $job->experience_level) == 'entry_level' ? 'selected' : '' }}>Entry-level</option>
                                            <option value="mid_level" {{ old('experience_level', $job->experience_level) == 'mid_level' ? 'selected' : '' }}>Mid-level</option>
                                            <option value="senior_level" {{ old('experience_level', $job->experience_level) == 'senior_level' ? 'selected' : '' }}>Senior-level</option>
                                            <option value="manager" {{ old('experience_level', $job->experience_level) == 'manager' ? 'selected' : '' }}>Manager</option>
                                            <option value="executive" {{ old('experience_level', $job->experience_level) == 'executive' ? 'selected' : '' }}>Executive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="industry_id" class="form-label">Industry</label>
                                        <select id="industry_id" name="industry_id" class="form-select">
                                            @foreach ($industries as $industry)
                                                <option value="{{ $industry->id }}" {{ old('industry_id', $job->industry_id) == $industry->id ? 'selected' : '' }}>
                                                    {{ $industry->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
            
                            </div>
                        </div>
            
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
            
                                <!-- Edit Job Form -->
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="text" class="form-control" name="description" id="description" value="{{ old('description', $job->description) }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="requirements" class="form-label">Requirements</label>
                                        <select class="form-select" id="multiple-select-field" data-placeholder="Choose anything" multiple name="requirements[]">
                                            <option value="Html" {{ is_array(old('requirements', json_decode($job->requirements, true))) && in_array('Html', old('requirements', json_decode($job->requirements, true))) ? 'selected' : '' }}>Html</option>
                                            <option value="Css" {{ is_array(old('requirements', json_decode($job->requirements, true))) && in_array('Css', old('requirements', json_decode($job->requirements, true))) ? 'selected' : '' }}>Css</option>
                                            <option value="Javascript" {{ is_array(old('requirements', json_decode($job->requirements, true))) && in_array('Javascript', old('requirements', json_decode($job->requirements, true))) ? 'selected' : '' }}>Javascript</option>
                                            <option value="PHP" {{ is_array(old('requirements', json_decode($job->requirements, true))) && in_array('PHP', old('requirements', json_decode($job->requirements, true))) ? 'selected' : '' }}>PHP</option>
                                            <option value="Java" {{ is_array(old('requirements', json_decode($job->requirements, true))) && in_array('Java', old('requirements', json_decode($job->requirements, true))) ? 'selected' : '' }}>Java</option>
                                            <option value="Dispatch" {{ is_array(old('requirements', json_decode($job->requirements, true))) && in_array('Dispatch', old('requirements', json_decode($job->requirements, true))) ? 'selected' : '' }}>Dispatch</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="responsibilities" class="form-label">Responsibilities</label>
                                        <input type="text" class="form-control" name="responsibilities" id="responsibilities" value="{{ old('responsibilities', $job->responsibilities) }}" placeholder="Responsibilities">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control" name="location" id="location" value="{{ old('location', $job->location) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="posted_at" class="form-label">Posted</label>
                                        <input type="date" class="form-control" name="posted_at" id="posted_at" value="{{ old('posted_at', $job->posted_at) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="expires_at" class="form-label">Expires</label>
                                        <input type="date" class="form-control" name="expires_at" id="expires_at" value="{{ old('expires_at', $job->expires_at) }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="application_deadline" class="form-label">Application Deadline</label>
                                        <input type="date" class="form-control" name="application_deadline" id="application_deadline" value="{{ old('application_deadline', $job->application_deadline) }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="application_deadline" class="form-label">Job Image</label>
                                          <input class="form-control" type="file" name="job_image" id="jobImage">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Update</button> <!-- Changed the button text to 'Update' -->
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            

        </section>

    </main>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('#multiple-select-field').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
    </script>
@endsection
