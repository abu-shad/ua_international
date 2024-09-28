<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/imgs/template/favicon.svg')}}">
    <link href="{{ asset("/assets/css/style.css?version=4.1")}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>@yield('title', 'My App')</title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="{{ asset('assets/imgs/template/loading.gif')}}" alt="Uainternational"></div>
        </div>
      </div>
    </div>
    

    <!-- ======= Header ======= -->
    @include('frontend.layouts.header')
    <!-- End Header -->
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-search mobile-header-border mb-30">
              <form action="#">
                <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
              </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- mobile menu start-->
              <nav>
                <ul class="mobile-menu font-heading">
                  <li class="has-children"><a class="active" href="{{ route('home') }}">Home</a></li>
                  <li class="has-children"><a href="#">About Us</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('why.choose.us') }}">Why Choose Us?</a></li>
                      <li><a href="{{ route('board.of.directors') }}">Board of Directors</a></li>
                      <li><a href="{{ route('leadership.team') }}">Leadership Team</a></li>
                      <li><a href="{{ route('mission.vission') }}">Mission & Vission</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Services</a>
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
                  <li class="has-children"><a href="#">Clients</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('saudi.arabia') }}">Saudi Arabia</a></li>
                      <li><a href="{{ route('uae') }}">UAE</a></li>
                      <li><a href="{{ route('qatar') }}">Qatar</a></li>
                      <li><a href="{{ route('kingdom.of.bahrain') }}">Kingdom of Bahrain</a></li>
                      <li><a href="{{ route('oman') }}">Oman</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('jobs.list') }}" class="{{ request()->routeIs('jobs.list') ? 'active' : '' }} fw-bold">Jobs</a>
                  <li class="has-children"><a href="#">Gallery</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('photo.gallery') }}">Photo Gallery</a></li>
                      <li><a href="{{ route('technical.trade') }}">Technical Trade</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Industry</a>
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
                  <li class="has-children"><a href="#">Contact Us</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('employer') }}">Employer</a></li>
                      <li><a href="{{ route('job.seeker') }}">Job Seeker</a></li>
                      <li><a href="{{ route('career') }}">Career</a></li>
                      <li><a href="{{ route('global.presence') }}">Global Presence</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-search mobile-header-border mb-30">
              <form action="#">
                <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
              </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- mobile menu start-->
              <nav>
                <ul class="mobile-menu font-heading">
                  <li class="has-children"><a class="active" href="{{ route('home') }}">Home</a></li>
                  <li class="has-children"><a href="#">About Us</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('why.choose.us') }}">Why Choose Us?</a></li>
                      <li><a href="{{ route('board.of.directors') }}">Board of Directors</a></li>
                      <li><a href="{{ route('leadership.team') }}">Leadership Team</a></li>
                      <li><a href="{{ route('mission.vission') }}">Mission & Vission</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Services</a>
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
                  <li class="has-children"><a href="#">Clients</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('saudi.arabia') }}">Saudi Arabia</a></li>
                      <li><a href="{{ route('uae') }}">UAE</a></li>
                      <li><a href="{{ route('qatar') }}">Qatar</a></li>
                      <li><a href="{{ route('kingdom.of.bahrain') }}">Kingdom of Bahrain</a></li>
                      <li><a href="{{ route('oman') }}">Oman</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('jobs.list') }}" class="{{ request()->routeIs('jobs.list') ? 'active' : '' }} fw-bold">Jobs</a>
                  <li class="has-children"><a href="#">Gallery</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('photo.gallery') }}">Photo Gallery</a></li>
                      <li><a href="{{ route('technical.trade') }}">Technical Trade</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Industry</a>
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
                  <li class="has-children"><a href="#">Contact Us</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('employer') }}">Employer</a></li>
                      <li><a href="{{ route('job.seeker') }}">Job Seeker</a></li>
                      <li><a href="{{ route('career') }}">Career</a></li>
                      <li><a href="{{ route('global.presence') }}">Global Presence</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    @yield('content')

    <!-- ======= Footer ======= -->
    @include('frontend.layouts.footer')
    <!-- End Footer -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('script')

    <script>
        $(document).ready(function() {
            // Get the current URL path
            var currentUrl = window.location.pathname;
    
            // Loop through each menu item and check if it matches the current URL
            $('.main-menu a').each(function() {
                var linkUrl = $(this).attr('href');
    
                if (linkUrl && currentUrl.includes(linkUrl)) {
                    // Add active class to the parent menu item
                    $(this).closest('.has-children').addClass('active');
                    // Show the submenu of the active parent
                    $(this).closest('.has-children').find('.sub-menu').show();
                }
            });
        });
    </script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/select2.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js')}}"></script>
    <script src="{{ asset('assets/js/main.js?v=4.1')}}"></script>
  </body>
</html>