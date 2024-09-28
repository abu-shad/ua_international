@extends('backend.layouts.main')

@section('title', 'Career')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Create Career Job</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Create Career</li>
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
            <form method="post" action="{{ route('career.create') }}">
                @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Create Career Job Form</h5>

                                <!-- Create Job Form -->
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                            value="{{ old('title') }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" class="form-control" name="company" id="company"
                                            placeholder="Company" value="{{ old('company') }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="education_level" class="form-label">Education</label>
                                        <select name="education_level" id="education_level" class="form-select">
                                            <option value="high_school"
                                                {{ old('education_level') == 'high_school' ? 'selected' : '' }}>High school
                                            </option>
                                            <option value="associate"
                                                {{ old('education_level') == 'associate' ? 'selected' : '' }}>Associate
                                            </option>
                                            <option value="bachelor"
                                                {{ old('education_level') == 'bachelor' ? 'selected' : '' }}>Bachelor
                                            </option>
                                            <option value="master"
                                                {{ old('education_level') == 'master' ? 'selected' : '' }}>Master</option>
                                            <option value="doctorate"
                                                {{ old('education_level') == 'doctorate' ? 'selected' : '' }}>Doctorate
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="salary_min" class="form-label">Salary Min</label>
                                        <input type="number" class="form-control" name="salary_min" id="salary_min"
                                            value="{{ old('salary_min') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="salary_max" class="form-label">Salary Max</label>
                                        <input type="number" class="form-control" name="salary_max" id="salary_max"
                                            value="{{ old('salary_max') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="employment_type" class="form-label">Employment Type</label>
                                        <select id="employment_type" name="employment_type" class="form-select">
                                            <option value="full_time"
                                                {{ old('employment_type') == 'full_time' ? 'selected' : '' }}>Full-time
                                            </option>
                                            <option value="part_time"
                                                {{ old('employment_type') == 'part_time' ? 'selected' : '' }}>Part-time
                                            </option>
                                            <option value="contract"
                                                {{ old('employment_type') == 'contract' ? 'selected' : '' }}>Contract
                                            </option>
                                            <option value="temporary"
                                                {{ old('employment_type') == 'temporary' ? 'selected' : '' }}>Temporary
                                            </option>
                                            <option value="internship"
                                                {{ old('employment_type') == 'internship' ? 'selected' : '' }}>Internship
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="experience_level" class="form-label">Experience</label>
                                        <select id="experience_level" name="experience_level" class="form-select">
                                            <option value="entry_level"
                                                {{ old('experience_level') == 'entry_level' ? 'selected' : '' }}>
                                                Entry-level</option>
                                            <option value="mid_level"
                                                {{ old('experience_level') == 'mid_level' ? 'selected' : '' }}>Mid-level
                                            </option>
                                            <option value="senior_level"
                                                {{ old('experience_level') == 'senior_level' ? 'selected' : '' }}>
                                                Senior-level</option>
                                            <option value="manager"
                                                {{ old('experience_level') == 'manager' ? 'selected' : '' }}>Manager
                                            </option>
                                            <option value="executive"
                                                {{ old('experience_level') == 'executive' ? 'selected' : '' }}>Executive
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="industry_id" class="form-label">Industry</label>
                                        <select id="industry_id" name="industry_id" class="form-select">
                                            @foreach ($industries as $industry)
                                                <option value="{{ $industry->id }}"
                                                    {{ old('industry_id') == $industry->id ? 'selected' : '' }}>
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

                                <!-- Create Job Form -->
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            value="{{ old('description') }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="requirements" class="form-label">Requirements</label>
                                        {{-- <input type="text" class="form-control" name="requirements" id="requirements"
                                            value="{{ old('requirements') }}"> --}}
                                        <select class="form-select" id="multiple-select-field"
                                            data-placeholder="Choose anything" multiple name="requirements[]">
                                            <option value="Html"
                                                {{ is_array(old('requirements')) && in_array('Html', old('requirements')) ? 'selected' : '' }}>
                                                Html</option>
                                            <option value="Css"
                                                {{ is_array(old('requirements')) && in_array('Css', old('requirements')) ? 'selected' : '' }}>
                                                Css</option>
                                            <option value="Javascript"
                                                {{ is_array(old('requirements')) && in_array('Javascript', old('requirements')) ? 'selected' : '' }}>
                                                Javascript</option>
                                            <option value="PHP"
                                                {{ is_array(old('requirements')) && in_array('PHP', old('requirements')) ? 'selected' : '' }}>
                                                PHP</option>
                                            <option value="Java"
                                                {{ is_array(old('requirements')) && in_array('Java', old('requirements')) ? 'selected' : '' }}>
                                                Java</option>
                                            <option value="Dispatch"
                                                {{ is_array(old('requirements')) && in_array('Dispatch', old('requirements')) ? 'selected' : '' }}>
                                                Dispatch</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="responsibilities" class="form-label">Responsibilities</label>
                                        <input type="text" class="form-control" name="responsibilities"
                                            id="responsibilities" value="{{ old('responsibilities') }}"
                                            placeholder="Responsibilities">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control" name="location" id="location"
                                            value="{{ old('location') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="posted_at" class="form-label">Posted</label>
                                        <input type="date" class="form-control" name="posted_at" id="posted_at"
                                            value="{{ old('posted_at') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="expires_at" class="form-label">Expires</label>
                                        <input type="date" class="form-control" name="expires_at" id="expires_at"
                                            value="{{ old('expires_at') }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="application_deadline" class="form-label">Application Deadline</label>
                                        <input type="date" class="form-control" name="application_deadline"
                                            id="application_deadline" value="{{ old('application_deadline') }}">
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
