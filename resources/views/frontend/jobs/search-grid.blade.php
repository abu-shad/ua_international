@extends('frontend.layouts.main')

@section('title', 'Jobs')

@section('content')
    <div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content apply-job-form">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body pl-30 pr-30 pt-50">
                    <div class="text-center">
                        <p class="font-sm text-brand-2">Job Application </p>
                        <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
                        <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer.
                        </p>
                    </div>
                    <form class="login-register text-start mt-20 pb-30" action="{{ route('create.job.detail') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf <!-- CSRF token for security -->
                        <input class="form-control" id="modal_job_id" type="hidden" name="job_id" required>

                        <div class="form-group">
                            <label class="form-label" for="fullname">Full Name *</label>
                            <input class="form-control @error('fullname') is-invalid @enderror" id="fullname"
                                type="text" name="fullname" value="{{ old('fullname') }}" required>
                            @error('fullname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email">Email *</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="email" type="email"
                                name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="phone">Contact Number *</label>
                            <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text"
                                name="phone" value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="resume">Upload Resume</label>
                            <input class="form-control @error('resume') is-invalid @enderror" id="resume" name="resume"
                                type="file" accept=".pdf,.doc,.docx">
                            @error('resume')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-default hover-up w-100" type="submit">Apply for Job</button>
                        </div>

                        <div class="text-muted text-center">Do you need support? <a href="{{ route('help.desk') }}">Contact
                                Us</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        <section class="section-box-2">
            <div class="container">
                <div class="banner-hero banner-single banner-single-bg">
                    <div class="block-banner text-center">
                        <h3 class="wow animate__animated animate__fadeInUp"><span class="color-brand-2">{{ $count }}
                                Jobs</span> Available Now</h3>
                        <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus
                            magni, <br class="d-none d-xl-block">atque delectus molestias quis?</div>

                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-30">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                        <div class="content-page">
                            <div class="box-filters-job">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-5"><span class="text-small text-showing">Showing :
                                            <strong>{{ $count }} </strong> jobs</span></div>
                                    <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                                        <div class="display-flex2">
                                            <div class="box-view-type"><a class="view-type"
                                                    href="{{ route('jobs.list') }}"><img
                                                        src="/../assets/imgs/template/icons/icon-list.svg"
                                                        alt="jobBox"></a><a class="view-type"
                                                    href="{{ route('jobs.grid') }}"><img
                                                        src="/../assets/imgs/template/icons/icon-grid-hover.svg"
                                                        alt="jobBox"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <div class="row">
                                @forelse ($jobs as $job)
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 jobs">
                                        <input type="hidden" class="job_id_input" value="{{ $job->id }}">
                                        <div class="card-grid-2 hover-up">
                                            <div class="card-grid-2-image-left"><span class="flash"></span>
                                                <div class="image-box"><img src="/../assets/imgs/brands/brand-1.png"
                                                        alt="jobBox"></div>
                                                <div class="right-info"><a class="name-job"
                                                        href="#">{{ $job->company ?? 'N/A' }}</a><span
                                                        class="location-small">{{ $job->location ?? 'N/A' }}</span></div>
                                            </div>
                                            <div class="card-block-info">
                                                <h6><a
                                                        href="{{ route('job.detail', $job->id) }}">{{ $job->title ?? 'N/A' }}</a>
                                                </h6>
                                                <div class="mt-5"><span
                                                        class="card-briefcase">{{ $job->employment_type ?? 'N/A' }}</span>
                                                    @php
                                                        $postedAt = strtotime($job->posted_at);
                                                        $now = time();

                                                        $diffInSeconds = $now - $postedAt;
                                                        $diffInDays = round($diffInSeconds / 86400);

                                                        $postedDate = date('Y-m-d', $postedAt);
                                                        $currentDate = date('Y-m-d', $now);
                                                    @endphp

                                                    <span class="card-time"><span>
                                                            @if ($postedDate === $currentDate)
                                                                <p>Posted Today</p>
                                                            @else
                                                                <p>Posted {{ $diffInDays }} days ago</p>
                                                            @endif
                                                        </span>
                                                </div>
                                                <p class="font-sm color-text-paragraph mt-15">
                                                    {{ $job->description ?? 'N/A' }}</p>
                                                <div class="mt-30">
                                                    @php
                                                        $requirements = json_decode($job->requirements, true);
                                                    @endphp
                                                    @if (!empty($requirements))
                                                        @foreach ($requirements as $requirement)
                                                            <span class="btn btn-tags-sm mr-5">{{ $requirement }}</span>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="card-2-bottom mt-30">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-7"><span
                                                                class="">{{ str_replace('.00', '', $job->salary_min) ?? 'N/A' }}
                                                                -
                                                                {{ str_replace('.00', '', $job->salary_max) ?? 'N/A' }}</span>
                                                        </div>
                                                        <div class="col-lg-5 col-5 text-end">
                                                            <div class="btn btn-apply-now open-modal-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty

                                @endforelse

                            </div>
                        </div>
                        {{ $jobs->links(asset('vendor.pagination.bootstrap-5')) }}
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="sidebar-shadow none-shadow mb-30">
                            <div class="sidebar-filters">
                                <div class="filter-block head-border mb-30">
                                    <h5>Advance Filter <a class="link-reset" href="#">Reset</a></h5>
                                </div>
                                <div class="filter-block mb-30">
                                    <div class="form-group ">
                                        <select id="job-select" class="form-control form-icons">

                                            @forelse ($industries as $industry)
                                            <option value="{{ route('jobs.list.search', $industry->id)}}">{{ $industry->name }}</option>
                                            @empty
                                            <option>Not found</option>
                                            @endforelse
                                        </select><i class="fi-rr-marker"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#job-select').change(function() {
            var url = $(this).val();
            if (url) {
                window.location.href = url;
            }
        });
    });
</script>
    <script>
        $(document).ready(function() {
            $('.open-modal-btn').on('click', function() {
                var jobId = $(this).closest('.jobs').find('.job_id_input').val();
                $('#modal_job_id').val(jobId);
            });
        });
    </script>
@endsection
