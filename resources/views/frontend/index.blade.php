@extends('frontend.layouts.main')

@section('title', 'Home')

@section('content')
    <main class="main">
        <div class="border-bottom" style="background:#eee;">
            <div>
                <marquee behavior="scroll" direction="left" class="fw-bold" style="font-size:16px;" scrolldelay="5">
                    @foreach ($marques as $marque)
                        <span class="me-5" style="color:#df0a0a"> &#x1F4EF; {{ $marque['title'] }} </span>
                    @endforeach

                </marquee>
            </div>
        </div>
        <section class="section-box">
            <div class="banner-hero hero-2">
                <div class="banner-inner">
                    <div class="block-banner">
                        <h1 class="text-42 color-white wow animate__animated animate__fadeInUp"><span
                                class="text-danger">Global Recruitment Services</span><br class="d-none d-lg-block">Find
                            your
                            next job</h1>
                        <div class="font-lg font-regular color-white mt-20 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".1s">UA International Established in New Delhi since the last 7 years, UA
                            International is a well renowned company that has an experience in the arena of manpower
                            recruitment across the globe. We are developing our competence in the field of operation and
                            maintenance.</div>

                        <div class="mt-60">
                            <div class="row">
                                <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
                                    <div class="d-inline-block text-start">
                                        <h4 class="color-white"> <span class="count">6</span><span>K+</span></h4>
                                        <p class="font-sm color-text-mutted">Candidate Deployed Globally</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
                                    <div class="d-inline-block text-start">
                                        <h4 class="color-white"><span class="count">5</span><span> K+</span></h4>
                                        <p class="font-sm color-text-mutted">Happy Clients</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
                                    <div class="d-inline-block text-start">
                                        <h4 class="color-white"> <span class="count">200</span><span></span></h4>
                                        <p class="font-sm color-text-mutted">Team of employees</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
                                    <div class="d-inline-block text-start">
                                        <h4 class="color-white"> <span class="count">25</span><span></span></h4>
                                        <p class="font-sm color-text-mutted">Branches & Offices</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </section>

        <section class="section-box mt-30">
            <div class="container">
                <div class="text-start">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Hot Jobs</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Search for hot jobs.
                    </p>
                    <div class="list-tabs mt-40">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach ($industries as $index => $industry)
                                <li><a class="{{ $index === 0 ? 'active' : '' }}" id="nav-tab-job-{{ $industry->id }}"
                                        href="#tab-job-{{ $industry->id }}" data-bs-toggle="tab" role="tab"
                                        aria-controls="tab-job-{{ $industry->id }}"
                                        aria-selected="{{ $index === 0 ? 'true' : 'false' }}"><img
                                            src="{{ asset($industry->icon) }}" alt="Uainternational">
                                        {{ $industry->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="mt-50">
                    <div class="tab-content" id="myTabContent-1">
                        @foreach ($industries as $index => $industry)
                            <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                id="tab-job-{{ $industry->id }}" role="tabpanel"
                                aria-labelledby="tab-job-{{ $industry->id }}">
                                <!-- List jobs for this industry -->

                                <div class="row">
                                    @if ($industry->jobs->count())
                                        @foreach ($industry->jobs as $job)
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="card-grid-2 grid-bd-16 hover-up">
                                                    <div class="card-grid-2-image"><span
                                                            class="lbl-hot bg-green"><span>{{ $job->employment_type }}</span></span>
                                                        <div class="image-box">
                                                            <figure><img src="{{ asset('storage/'.$job->job_image) }}"
                                                                    alt="Uainternational"></figure>
                                                        </div>
                                                    </div>
                                                    <div class="card-block-info">
                                                        <h5><a
                                                                href="{{ route('job.detail', $job->id) }}">{{ $job->title }}</a>
                                                        </h5>
                                                        @php
                                                            // Convert posted_at to timestamp
                                                            $postedAt = strtotime($job->posted_at);
                                                            $now = time(); // current timestamp

                                                            // Calculate differences
                                                            $diffInSeconds = $now - $postedAt;
                                                            $diffInDays = round($diffInSeconds / 86400);

                                                            // Format the posted date for comparison
                                                            $postedDate = date('Y-m-d', $postedAt);
                                                            $currentDate = date('Y-m-d', $now);
                                                        @endphp
                                                        <div class="mt-5"><span
                                                                class="card-location mr-15">{{ $job->location }}</span>
                                                            <span class="card-time">
                                                                @if ($postedDate === $currentDate)
                                                                    <p>Posted Today</p>
                                                                @else
                                                                    <p>Posted {{ $diffInDays }} days ago</p>
                                                                @endif
                                                            </span>
                                                        </div>
                                                        <div class="card-2-bottom mt-20">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-md-6 mb-2">
                                                                    @php
                                                                        $requirements = json_decode(
                                                                            $job->requirements,
                                                                            true,
                                                                        );
                                                                    @endphp
                                                                    @if (!empty($requirements))
                                                                        @foreach ($requirements as $requirement)
                                                                            <span
                                                                                class="btn btn-tags-sm mr-5">{{ $requirement }}</span>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                                <div class="col-xl-6 col-md-6 text-lg-end">
                                                                    <span
                                                                        class="card-text-price d-inline">{{ $job->salary_max }}</span>
                                                                    <span class="text-muted d-inline"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="font-sm color-text-paragraph mt-20">
                                                            {{ $job->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No jobs available in this industry.</p>
                                    @endif
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="section-box wow animate__animated animate__fadeIn">
                <div class="container">
                    <div class="text-start">
                        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Popular Services</h2>
                        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Explore services.
                        </p>
                    </div>
                    <div class="box-swiper mt-50">
                        <div class="swiper-container swiper-group-6 mh-none swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                @foreach ($services as $service)
                                    <div class="swiper-slide hover-up">
                                        <div class="card-grid-5 card-category hover-up"
                                            style="background-image: url({{ $service->bg_image }})">
                                            <a href="{{ route($service->url) }}">
                                                <div class="box-cover-img">
                                                    <div class="content-bottom">
                                                        <h6 class="color-white mb-5">{{ $service->name }}</h6>
                                                        <p class="color-white font-xs"><span>123</span><span> Jobs
                                                                Available</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-next swiper-button-next-1"></div>
                        <div class="swiper-button-prev swiper-button-prev-1"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="text-start">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Our Presence</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find our presence.
                    </p>
                </div>
                <div class="container">
                    <div class="row mt-50">
                        @foreach ($presences as $presence)
                            <div class="col-xl-4 col-lg-4 col-md-7 col-sm-12 col-12">
                                <div class="card-image-top hover-up"><a href="#">
                                        <div class="image"
                                            style="background-image: url({{ asset($presence->location_image) }});"><span
                                                class="lbl-hot">Trending</span></div>
                                    </a>
                                    <div class="informations"><a href="#">
                                            <h5>{{ $presence->location_name }}</h5>
                                        </a>
                                        <div class="row">
                                            <div class="col-lg-6 col-6"><span
                                                    class="text-14 color-text-paragraph-2">{{ $presence->vacency }}
                                                    Vacancy</span></div>
                                            <div class="col-lg-6 col-6 text-end"><span
                                                    class="color-text-paragraph-2 text-14">{{ $presence->companies }}
                                                    companies</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box overflow-visible mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">6</span><span> K+</span></h1>
                            <h5>Candidate Deployed Globally</h5>
                            <p class="font-sm color-text-paragraph mt-10">We always provide people a <br
                                    class="d-none d-lg-block">complete solution upon focused of<br
                                    class="d-none d-lg-block"> any industry</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">5</span><span>K+</span></h1>
                            <h5>Happy Clients</h5>
                            <p class="font-sm color-text-paragraph mt-10">We always provide people a <br
                                    class="d-none d-lg-block">our clients' success is our priority. <br
                                    class="d-none d-lg-block"></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">200</span><span>+</span></h1>
                            <h5>Team of employees</h5>
                            <p class="font-sm color-text-paragraph mt-10">We always provide people a <br
                                    class="d-none d-lg-block">our employees are the backbone of our success. <br
                                    class="d-none d-lg-block"></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <h1 class="color-brand-2"><span class="count">25</span><span> +</span></h1>
                            <h5>Branches & Offices</h5>
                            <p class="font-sm color-text-paragraph mt-10">We always provide people a <br
                                    class="d-none d-lg-block">UA International is proud to maintain a <br
                                    class="d-none d-lg-block">global presence</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="text-start">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Top Recruiters</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover your next
                        career move</p>
                </div>
            </div>
            <div class="container">
                <div class="box-swiper mt-50">
                    <div class="swiper-container swiper-group-1 swiper-style-2 swiper">
                        <div class="swiper-wrapper pt-5">
                            <div class="swiper-slide">
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="Uainternational"
                                                    src="../assets/imgs/brands/brand-1.png"></div>
                                            <div class="text-info-right">
                                                <h4>Linkedin</h4><img alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">25<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="Uainternational"
                                                    src="../assets/imgs/brands/brand-2.png"></div>
                                            <div class="text-info-right">
                                                <h4>Adobe</h4><img alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>42</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">17<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="Uainternational"
                                                    src="../assets/imgs/brands/brand-3.png"></div>
                                            <div class="text-info-right">
                                                <h4>Dailymotion</h4><img alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>46</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">65<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="Uainternational"
                                                    src="../assets/imgs/brands/brand-4.png"></div>
                                            <div class="text-info-right">
                                                <h4>NewSum</h4><img alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">25<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="Uainternational"
                                                    src="../assets/imgs/brands/brand-5.png"></div>
                                            <div class="text-info-right">
                                                <h4>PowerHome</h4><img alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>87</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">34<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="Uainternational"
                                                    src="../assets/imgs/brands/brand-6.png"></div>
                                            <div class="text-info-right">
                                                <h4>Whop.com</h4><img alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">56<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="Uainternational"
                                                    src="../assets/imgs/brands/brand-7.png"></div>
                                            <div class="text-info-right">
                                                <h4>Greewood</h4><img alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>124</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">78<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="Uainternational"
                                                    src="../assets/imgs/brands/brand-8.png"></div>
                                            <div class="text-info-right">
                                                <h4>Kentucky</h4><img alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">98<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="Uainternational"
                                                    src="../assets/imgs/brands/brand-9.png"></div>
                                            <div class="text-info-right">
                                                <h4>Qeuity</h4><img alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>76</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">90<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="Uainternational"
                                                    src="../assets/imgs/brands/brand-10.png"></div>
                                            <div class="text-info-right">
                                                <h4>Honda</h4><img alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><img
                                                    alt="Uainternational"
                                                    src="../assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>89</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">34<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next-1"></div>
                    <div class="swiper-button-prev swiper-button-prev-1"></div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50 mb-50">
            <div class="container">
                <div class="text-start">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news,
                        updates and tips</p>
                </div>
            </div>
            <div class="container">
                <div class="mt-50">
                    <div class="box-swiper style-nav-top">
                        <div class="swiper-container swiper-group-3 swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                @foreach ($blogs as $blog)
                                    <div class="swiper-slide">
                                        <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                            <div class="text-center card-grid-3-image"><a href="#">
                                                    <figure><img alt="Uainternational" src="{{ asset($blog->image) }}">
                                                    </figure>
                                                </a></div>
                                            <div class="card-block-info">
                                                <div class="tags mb-15"><a class="btn btn-tag" href="#">News</a>
                                                </div>
                                                <h5><a
                                                        href="{{ route('blog.details', $blog->id) }}">{{ $blog->title }}</a>
                                                </h5>
                                                <p class="mt-10 color-text-paragraph font-sm">{{ $blog->content }}.</p>
                                                <div class="card-2-bottom mt-20">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-6">
                                                            {{-- <div class="d-flex"><img class="img-rounded"
                                                                src="../assets/imgs/page/homepage1/user1.png"
                                                                alt="Uainternational">
                                                            <div class="info-right-img"><span
                                                                    class="font-sm font-bold color-brand-1 op-70">Sarah
                                                                    Harding</span><br><span
                                                                    class="font-xs color-text-paragraph-2">06
                                                                    September</span></div>
                                                        </div> --}}
                                                        </div>
                                                        {{-- <div class="col-lg-6 text-end col-6 pt-15"><span
                                                            class="color-text-paragraph-2 font-xs">8 mins to read</span>
                                                    </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter">
                    <div class="row">
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img
                                src="../assets/imgs/template/newsletter-left.png" alt="joxBox"></div>
                        <div class="col-lg-12 col-xl-6 col-12">
                            <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                            <div class="box-form-newsletter mt-40 mb-25">
                                <form class="form-newsletter" action="{{ route('subscribe') }}">
                                    <input class="input-newsletter" type="text" name="email"
                                        placeholder="Enter your email here">
                                    <button type="submit"
                                        class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                                </form>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                        </div>
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img
                                src="../assets/imgs/template/newsletter-right.png" alt="ua"></div>
                    </div>
                </div>
            </div>
        </section>
        <script src="../assets/js/plugins/counterup.js"></script>
    </main>
@endsection
