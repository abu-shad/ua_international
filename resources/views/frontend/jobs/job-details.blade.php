@extends('frontend.layouts.main')

@section('title', 'Job Deatil')

@section('content')
<div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content apply-job-form">
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body pl-30 pr-30 pt-50">
                <div class="text-center">
                    <p class="font-sm text-brand-2">Job Application </p>
                    <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
                    <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer. </p>
                </div>
                
                <form class="login-register text-start mt-20 pb-30" action="{{ route('create.job.detail') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- CSRF token for security -->
                    <input class="form-control" id="jobId" type="hidden" name="job_id"  value="{{ $job->id }}" required>
                    
                    <div class="form-group">
                        <label class="form-label" for="fullname">Full Name *</label>
                        <input class="form-control @error('fullname') is-invalid @enderror" id="fullname" type="text" name="fullname"  value="{{ old('fullname') }}" required>
                        @error('fullname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label class="form-label" for="email">Email *</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email"  value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label class="form-label" for="phone">Contact Number *</label>
                        <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" name="phone"  value="{{ old('phone') }}" required>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"  required>{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label class="form-label" for="resume">Upload Resume</label>
                        <input class="form-control @error('resume') is-invalid @enderror" id="resume" name="resume" type="file" accept=".pdf,.doc,.docx">
                        @error('resume')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <button class="btn btn-default hover-up w-100" type="submit">Apply for Job</button>
                    </div>
                
                    <div class="text-muted text-center">Do you need support? <a href="{{ route('help.desk') }}">Contact Us</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
<main class="main">
    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12"></div>

                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="box-border-single">
                        <div class="row mt-10">
                            <div class="col-lg-8 col-md-12">
                                <h3>{{ $job->title ?? 'N/A' }}</h3>
                                <div class="mt-0 mb-15">
                                    <span class="card-briefcase">{{ $job->employment_type ?? 'N/A' }}</span>
                                    @php
                                        $postedAt = strtotime($job->posted_at ?? 'now');
                                        $now = time(); 
                    
                                        $diffInSeconds = $now - $postedAt;
                                        $diffInDays = round($diffInSeconds / 86400);
                    
                                        $postedDate = date('Y-m-d', $postedAt);
                                        $currentDate = date('Y-m-d', $now);
                                    @endphp
                                    <span class="card-time">
                                        @if ($postedDate === $currentDate)
                                            <p>Posted Today</p>
                                        @else
                                            <p>Posted {{ $diffInDays }} days ago</p>
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 text-lg-end">
                                <div class="btn btn-apply-icon btn-apply btn-apply-big hover-up" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                        </div>
                        <div class="border-bottom pt-10 pb-10"></div>
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="banner-hero banner-image-single mt-10 mb-20"><img src="/../assets/imgs/page/job-single-2/hiring.jpg" alt="UA"></div>
                        <div class="job-overview">
                            <h5 class="border-bottom pb-15 mb-30">Overview</h5>
                            <div class="row">
                                <div class="col-md-6 d-flex">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/industry.svg" alt="UA"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description industry-icon mb-10">Industry</span><strong class="small-heading">{{ $job->industry->name ?? 'N/A' }}</strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/updated.svg" alt="UA"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Updated</span><strong class="small-heading">{{ $job->posted_at ?? 'N/A' }}</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/salary.svg" alt="UA"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description salary-icon mb-10">Salary</span><strong class="small-heading">{{ ($job->salary_min ?? 'N/A') . ' - ' . ($job->salary_max ?? 'N/A') }}</strong></div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/experience.svg" alt="UA"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description experience-icon mb-10">Experience</span><strong class="small-heading">{{ str_replace("_", " ", $job->experience_level ?? 'N/A') }}</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/job-type.svg" alt="UA"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Job type</span><strong class="small-heading">{{ $job->employment_type ?? 'N/A' }}</strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/deadline.svg" alt="UA"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Deadline</span><strong class="small-heading">{{ $job->expires_at ?? 'N/A' }}</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/location.svg" alt="UA"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Location</span><strong class="small-heading">{{ $job->location ?? 'N/A' }}</strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="content-single">
                            <h4>Description</h4>
                            <p>{{ $job->description ?? 'N/A' }}</p>
                            <h4>Requirements</h4>
                            <div class="col-xl-6 col-md-6 mb-2">
                                @php
                                    $requirements = json_decode($job->requirements ?? '[]', true);
                                @endphp
                                @if (!empty($requirements))
                                    @foreach ($requirements as $requirement)
                                        <span class="btn btn-tags-sm mr-5">{{ $requirement }}</span>
                                    @endforeach
                                @else
                                    <p>N/A</p>
                                @endif
                            </div>
                            <h4>Responsibility</h4>
                            <p>{{ $job->responsibilities ?? 'N/A' }}</p>
                        </div>
                        <div class="single-apply-jobs">
                            <div class="row align-items-center">
                                <div class="col-md-5"><button class="btn btn-default mr-15" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-12"></div>
                {{-- <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                    <div class="sidebar-border">
                        <h6 class="f-18">Similar jobs</h6>
                        <div class="sidebar-list-job">
                            <ul>
                                <li>
                                    <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-1.png" alt="UA"></a></div>
                                        <div class="info-text">
                                            <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">UI / UX Designer fulltime</a></h5>
                                            <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>3</span><span> mins ago</span></span></div>
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-price">$250<span>/Hour</span></h6>
                                                    </div>
                                                    <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-2.png" alt="UA"></a></div>
                                        <div class="info-text">
                                            <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Java Software Engineer</a></h5>
                                            <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>5</span><span> mins ago</span></span></div>
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-price">$500<span>/Hour</span></h6>
                                                    </div>
                                                    <div class="col-6 text-end"><span class="card-briefcase">Tokyo, Japan</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-3.png" alt="UA"></a></div>
                                        <div class="info-text">
                                            <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Frontend Developer</a></h5>
                                            <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>8</span><span> mins ago</span></span></div>
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-price">$650<span>/Hour</span></h6>
                                                    </div>
                                                    <div class="col-6 text-end"><span class="card-briefcase">Hanoi, Vietnam</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-4.png" alt="UA"></a></div>
                                        <div class="info-text">
                                            <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Cloud Engineer</a></h5>
                                            <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>12</span><span> mins ago</span></span></div>
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-price">$380<span>/Hour</span></h6>
                                                    </div>
                                                    <div class="col-6 text-end"><span class="card-briefcase">Losangl, Au</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-5.png" alt="UA"></a></div>
                                        <div class="info-text">
                                            <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">DevOps Engineer</a></h5>
                                            <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>34</span><span> mins ago</span></span></div>
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-price">$140<span>/Hour</span></h6>
                                                    </div>
                                                    <div class="col-6 text-end"><span class="card-briefcase">Paris, France</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-6.png" alt="UA"></a></div>
                                        <div class="info-text">
                                            <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Figma design UI/UX</a></h5>
                                            <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>45</span><span> mins ago</span></span></div>
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-price">$290<span>/Hour</span></h6>
                                                    </div>
                                                    <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-7.png" alt="UA"></a></div>
                                        <div class="info-text">
                                            <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Product Manage</a></h5>
                                            <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>50</span><span> mins ago</span></span></div>
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-price">$650<span>/Hour</span></h6>
                                                    </div>
                                                    <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-8.png" alt="UA"></a></div>
                                        <div class="info-text">
                                            <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">UI / UX Designer</a></h5>
                                            <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>58</span><span> mins ago</span></span></div>
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-price">$270<span>/Hour</span></h6>
                                                    </div>
                                                    <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</main>
@endsection