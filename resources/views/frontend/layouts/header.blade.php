<section class="section-box  bg-border-3">
    <div class="container pt-10 pb-10">
      <div class="row">
        <div class="col-md-8">
          <div class="pl-10 fw-bold" style="color: #F52126;">
            Only For Employer : +966&nbsp;&nbsp; 5495-782-34 &nbsp; Email : bdm@uainternational.in &nbsp;|&nbsp; INDIA : +91&nbsp;&nbsp;7982-037-559 
          </div>
        </div>
        <div class="col-md-4">
            <div class="float-end">
                 <!-- WhatsApp Icon -->
            <a href="https://wa.me/<+966 5495-782-34>" target="_blank">
                <i class="fa-brands fa-whatsapp fa-xl me-2" style="color: #25D366"></i>
            </a>
            
            <!-- LinkedIn Icon -->
            <a href="https://www.linkedin.com/in/umar-ansari-mba-11330a225/" target="_blank">
                <i class="fab fa-linkedin fa-xl" style="color: #0077B5"></i>
            </a>
            </div>
           
        </div>
      </div>
    </div>
  </section>

<header class="header sticky-bar" style="padding:14px 0">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a class="d-flex" href="{{ route('home') }}"><img width="139" height="36" alt="jobBox" src="{{ asset('assets/imgs/template/WhatsApp Image 2024-08-15 at 20.29.51.jpeg')}}"></a></div>
            </div>
            <div class="header-nav">
                <nav class="nav-main-menu">
                    <ul class="main-menu">
                        <li><a class="{{ request()->routeIs('home') ? 'active' : '' }} fw-bold" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="has-children"><a class="{{ request()->routeIs('why.choose.us') || request()->routeIs('board.of.directors') || request()->routeIs('leadership.team') || request()->routeIs('mission.vission') ? 'active' : '' }} fw-bold" href="#">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('why.choose.us') }}">Why Choose Us?</a></li>
                                <li><a href="{{ route('board.of.directors') }}">Board of Directors</a></li>
                                <li><a href="{{ route('leadership.team') }}">Leadership Team</a></li>
                                <li><a href="{{ route('mission.vission') }}">Mission & Vission</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#" class="fw-bold {{ request()->routeIs('overseas.recruitment.service') || request()->routeIs('global.executive.search') || request()->routeIs('document.attestation') || request()->routeIs('skill.training.testing') || request()->routeIs('travel.tourism') || request()->routeIs('umrah') || request()->routeIs('web.app.development') || request()->routeIs('digital.marketing') ? 'active' : '' }}">Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('overseas.recruitment.service') }}">Overseas Recruitment Service</a></li>
                                <li><a href="{{ route('global.executive.search') }}">Global Executive Search</a></li>
                                <li><a href="{{ route('document.attestation') }}">Document Attestation</a></li>
                                <li><a href="{{ route('skill.training.testing') }}">Skill Training & Testing Centre</a></li>
                                <li><a href="{{ route('travel.tourism') }}">Travel & Tourism</a></li>
                                <li><a href="{{ route('umrah') }}">Umrah</a></li>
                                <li><a href="{{ route('web.app.development') }}">Web & App Development</a></li>
                                <li><a href="{{ route('digital.marketing') }}">Digital Marketing</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#" class="fw-bold {{ request()->routeIs('saudi.arabia') || request()->routeIs('uae') || request()->routeIs('qatar') || request()->routeIs('kingdom.of.bahrain') || request()->routeIs('oman')  ? 'active' : '' }}">Clients</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('saudi.arabia') }}">Saudi Arabia</a></li>
                                <li><a href="{{ route('uae') }}">UAE</a></li>
                                <li><a href="{{ route('qatar') }}">Qatar</a></li>
                                <li><a href="{{ route('kingdom.of.bahrain') }}">Kingdom of Bahrain</a></li>
                                <li><a href="{{ route('oman') }}">Oman</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('jobs.list') }}" class="{{ request()->routeIs('jobs.list') ? 'active' : '' }} fw-bold">Jobs</a>
                        </li>
                        <li class="has-children"><a href="#" class="{{ request()->routeIs('photo.gallery') || request()->routeIs('technical.trade') ? 'active' : '' }} fw-bold">Gallery</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('photo.gallery') }}">Photo Gallery</a></li>
                                <li><a href="{{ route('technical.trade') }}">Technical Trade</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#" class="{{ request()->routeIs('healthcare') || request()->routeIs('construction') || request()->routeIs('hospitality') || request()->routeIs('oil.and.gas') || request()->routeIs('fmcg') || request()->routeIs('information-technologies') || request()->routeIs('automobiles')  ? 'active' : '' }} fw-bold">Industry</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('healthcare') }}">Healthcare</a></li>
                                <li><a href="{{ route('construction') }}">Construction</a></li>
                                <li><a href="{{ route('hospitality') }}">Hospitality</a></li>
                                <li><a href="{{ route('oil.and.gas') }}">Oil & Gas Onshore & Offshore</a></li>
                                <li><a href="{{ route('fmcg') }}">FMCG</a></li>
                                <li><a href="{{ route('information-technologies') }}">Information technology</a></li>
                                <li><a href="{{ route('automobiles') }}">Automobiles</a></li>
                            </ul>
                        </li>
                        <li class="has-children fw-bold"><a href="#" class="{{ request()->routeIs('employer') || request()->routeIs('job.seeker') || request()->routeIs('employer') || request()->routeIs('global.presence') ? 'active' : '' }} fw-bold">Contact Us</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('employer') }}">Employer</a></li>
                                <li><a href="{{ route('job.seeker') }}">Job Seeker</a></li>
                                <li><a href="{{ route('career') }}">Career</a></li>
                                <li><a href="{{ route('global.presence') }}">Global Presence</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
            </div>
            <!-- <div class="header-right">
                <div class="block-signin"><a class="text-link-bd-btom hover-up" href="page-register.html">Register</a><a class="btn btn-default btn-shadow ml-40 hover-up" href="page-signin.html">Sign in</a></div>
            </div> -->
        </div>
    </div>
</header>