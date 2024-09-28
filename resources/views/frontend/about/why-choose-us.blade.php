@extends('frontend.layouts.main')

@section('title', 'About')

@section('content')
<main class="main">
    <section class="section-box">
        <div class="breacrumb-cover bg-img-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-10">Why Choose Us</h2>
                        <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="breadcrumbs mt-40">
                            <li><a class="home-icon" href="{{ route('home') }}">Home</a></li>
                            <li>Why Choose Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="post-loop-grid">
            <div class="container">
                <div class="text-center">
                    <h6 class="f-18 color-text-mutted text-uppercase">Our company</h6>
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Why Choose Us</h2>
                    <p class="font-sm color-text-paragraph wow animate__animated animate__fadeInUp w-lg-50 mx-auto">The idea behind the foundation of UA INTERNATIONAL is appreciating every single talent, skill and providing them with a perfect job according to their perspective</p>
                </div>
                <div class="row mt-70">
                    <div class="col-lg-6 col-md-12 col-sm-12"><img src="../assets/imgs/page/about/img-about2.png" alt="joxBox"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="content-single">
                            <ul>
                                <li>UA INTERNATIONAL assists each and every candidate to meet their dream job as well as their client to climb up the stairs of success with suitable and skilled employees. We believe in raising the quality bar that has been settled for years and also keep oour nose to grindstone to walk more extra mile.</li>
                                <li>We never compromise the Quality that we put into our services as this is what our customers get out of our concern work</li>
                                <li>Whether, you are a prospective customer looking for a veteran O&M company to manage challenging projects, an existing customer looking for latest updates, a supplier, and partner or a prospective employee looking for new opportunities, you are on the righ right way to get helped with UA INTERNATIONAL.</li>
                                <li>Being a work front of operation & maintenance, we engage ourselves to manage day-to-day processes, people, tools, and assets that are required for a facility to function properly. Along with routine processes, we also prepare and execute future maintenanc maintenance and improvement needs</li>
                            </ul>
                        </div>
                        <div class="mt-2"><a class="btn btn-brand-1" href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection