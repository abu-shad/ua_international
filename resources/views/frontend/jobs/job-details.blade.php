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
                <form class="login-register text-start mt-20 pb-30" action="#">
                    <div class="form-group">
                        <label class="form-label" for="input-1">Full Name *</label>
                        <input class="form-control" id="input-1" type="text" required="" name="fullname" placeholder="Steven Job">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="input-2">Email *</label>
                        <input class="form-control" id="input-2" type="email" required="" name="emailaddress" placeholder="stevenjob@gmail.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="number">Contact Number *</label>
                        <input class="form-control" id="number" type="text" required="" name="phone" placeholder="(+01) 234 567 89">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="des">Description</label>
                        <input class="form-control" id="des" type="text" required="" name="Description" placeholder="Your description...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="file">Upload Resume</label>
                        <input class="form-control" id="file" name="resume" type="file">
                    </div>
                    <div class="login_footer form-group d-flex justify-content-between">
                        <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                        </label><a class="text-muted" href="page-contact.html">Lean more</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default hover-up w-100" type="submit" name="login">Apply Job</button>
                    </div>
                    <div class="text-muted text-center">Do you need support? <a href="page-contact.html">Contact Us</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
<main class="main">
    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="box-border-single">
                        <div class="row mt-10">
                            <div class="col-lg-8 col-md-12">
                                <h3>Senior Full Stack Engineer, Creator Success Full Time</h3>
                                <div class="mt-0 mb-15"><span class="card-briefcase">Fulltime</span><span class="card-time">3 mins ago</span></div>
                            </div>
                            <div class="col-lg-4 col-md-12 text-lg-end">
                                <div class="btn btn-apply-icon btn-apply btn-apply-big hover-up" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                        </div>
                        <div class="border-bottom pt-10 pb-10"></div>
                        <div class="banner-hero banner-image-single mt-10 mb-20"><img src="/../assets/imgs/page/job-single-2/img.png" alt="jobBox"></div>
                        <div class="job-overview">
                            <h5 class="border-bottom pb-15 mb-30">Overview</h5>
                            <div class="row">
                                <div class="col-md-6 d-flex">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/industry.svg" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description industry-icon mb-10">Industry</span><strong class="small-heading"> Mechanical / Auto / Automotive, Civil / Construction</strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/job-level.svg" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description joblevel-icon mb-10">Job level</span><strong class="small-heading">Experienced (Non - Manager)</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/salary.svg" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description salary-icon mb-10">Salary</span><strong class="small-heading">$800 - $1000</strong></div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/experience.svg" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description experience-icon mb-10">Experience</span><strong class="small-heading">1 - 2 years</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/job-type.svg" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Job type</span><strong class="small-heading">Permanent</strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/deadline.svg" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Deadline</span><strong class="small-heading">10/08/2022</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/updated.svg" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Updated</span><strong class="small-heading">10/07/2022</strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="/../assets/imgs/page/job-single/location.svg" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Location</span><strong class="small-heading">Dallas, Texas Remote Friendly</strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="content-single">
                            <h4>Welcome to AliStudio Team</h4>
                            <p>The AliStudio Design team has a vision to establish a trusted platform that enables productive and healthy enterprises in a world of digital and remote everything, constantly changing work patterns and norms, and the need for organizational resiliency.</p>
                            <p>
                                The ideal candidate will have strong creative skills and a portfolio of work which demonstrates their passion for illustrative design and typography. This candidate will have experiences in working with numerous different design platforms such as digital
                                and print forms.
                            </p>
                            <h4>Essential Knowledge, Skills, and Experience</h4>
                            <ul>
                                <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>
                                <li>5+ years of industry experience in interactive design and / or visual design</li>
                                <li>Excellent interpersonal skills</li>
                                <li>Aware of trends in&#x202F;mobile, communications, and collaboration</li>
                                <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>
                                <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>
                                <li>History of impacting shipping products with your work</li>
                                <li>A Bachelor&rsquo;s Degree in Design (or related field) or equivalent professional experience</li>
                                <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>
                            </ul>
                            <h4>Preferred Experience</h4>
                            <ul>
                                <li>Designing user experiences for enterprise software / services</li>
                                <li>Creating and applying established design principles and interaction patterns</li>
                                <li>Aligning or influencing design thinking with teams working in other geographies</li>
                            </ul>
                            <h4>Product Designer</h4>
                            <p><strong>Product knowledge:</strong> Deeply understand the technology and features of the product area to which you are assigned.</p>
                            <p><strong>Research:</strong> Provide human and business impact and insights for products.</p>
                            <p><strong>Deliverables:</strong> Create deliverables for your product area (for example competitive analyses, user flows, low fidelity wireframes, high fidelity mockups, prototypes, etc.) that solve real user problems through
                                the user experience.
                            </p>
                            <p><strong>Communication:</strong> Communicate the results of UX activities within your product area to the design team department, cross-functional partners within your product area, and other interested Superformula team
                                members using clear language that simplifies complexity.
                            </p>
                        </div>
                        <div class="author-single"><span>AliThemes</span></div>
                        <div class="single-apply-jobs">
                            <div class="row align-items-center">
                                <div class="col-md-5"><a class="btn btn-default mr-15" href="#">Apply now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                    <div class="sidebar-border">
                        <h6 class="f-18">Similar jobs</h6>
                        <div class="sidebar-list-job">
                            <ul>
                                <li>
                                    <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-1.png" alt="jobBox"></a></div>
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
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-2.png" alt="jobBox"></a></div>
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
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-3.png" alt="jobBox"></a></div>
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
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-4.png" alt="jobBox"></a></div>
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
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-5.png" alt="jobBox"></a></div>
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
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-6.png" alt="jobBox"></a></div>
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
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-7.png" alt="jobBox"></a></div>
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
                                        <div class="image"><a href="job-details.html"><img src="/../assets/imgs/brands/brand-8.png" alt="jobBox"></a></div>
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
                </div>
            </div>
        </div>
    </section>
</main>
@endsection