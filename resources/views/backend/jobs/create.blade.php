@extends('backend.layouts.main')

@section('title', 'Jobs')

@section('content')
<main id="main" class="main">

        <div class="pagetitle">
            <h1>Create Job</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Create Job</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <form>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Create Job Form</h5>

                                <!-- Create Job Form -->
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title">
                                    </div>
                                    <div class="col-12">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" class="form-control" name="company" id="company"
                                            placeholder="Company">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="education_level" class="form-label">Education</label>
                                        <select name="education_level" id="education_level" class="form-select">
                                            <option value="high_school">High school</option>
                                            <option value="associate">associate</option>
                                            <option value="bachelor">bachelor</option>
                                            <option value="master">master</option>
                                            <option value="doctorate">doctorate</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="salary_min" class="form-label">Salary Min</label>
                                        <input type="text" class="form-control" name="salary_min"
                                            id="salary_min">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="salary_max" class="form-label">Salary Max</label>
                                        <input type="text" class="form-control" name="salary_max"
                                            id="salary_max">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="employment_type" class="form-label">Employment Type</label>
                                        <select id="employment_type" name="employment_type" class="form-select">
                                            <option value="full_time" selected>full-time</option>
                                            <option value="part_time">part-time</option>
                                            <option value="contract">contract</option>
                                            <option value="temporary">temporary</option>
                                            <option value="internship">internship</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="experience_level" class="form-label">Experience</label>
                                        <select id="experience_level" name="experience_level" class="form-select">
                                            <option value="entry_level" selected>entry-level</option>
                                            <option value="mid_level">mid-level</option>
                                            <option value="senior_level">senior-level</option>
                                            <option value="manager">manager</option>
                                            <option value="executive">executive</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="industry_id" class="form-label">Industry</label>
                                        <select id="industry_id" name="industry_id" class="form-select">
                                            <option value="it">IT</option>
                                            <option value="healthcare">Healthcare</option>
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
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="email" class="form-control" name="description"
                                            id="description">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="requirements" class="form-label">Requirements</label>
                                        <input type="password" class="form-control" name="requirements"
                                            id="requirements">
                                    </div>
                                    <div class="col-12">
                                        <label for="responsibilities" class="form-label">Responsibilities</label>
                                        <input type="text" class="form-control" name="responsibilities"
                                            id="responsibilities" placeholder="Responsibilities">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control" name="location" id="location">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="posted_at" class="form-label">Posted</label>
                                        <input type="date" class="form-control" name="posted_at" id="posted_at">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="expires_at" class="form-label">Expires</label>
                                        <input type="date" class="form-control" name="expires_at"
                                            id="expires_at">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="application_deadline" class="form-label">Application
                                            Deadline</label>
                                        <input type="date" class="form-control" name="application_deadline"
                                            id="application_deadline">
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
