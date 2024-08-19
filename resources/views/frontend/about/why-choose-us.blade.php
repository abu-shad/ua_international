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
                    <p class="font-sm color-text-paragraph wow animate__animated animate__fadeInUp w-lg-50 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ligula ante, dictum non aliquet eu, dapibus ac quam. Morbi vel ante viverra orci tincidunt tempor eu id ipsum. Sed consectetur, risus a blandit tempor, velit magna pellentesque risus, at congue tellus dui quis nisl.</p>
                </div>
                <div class="row mt-70">
                    <div class="col-lg-6 col-md-12 col-sm-12"><img src="../assets/imgs/page/about/img-about2.png" alt="joxBox"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="content-single">
                            <ul>
                                <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>
                                <li>5+ years of industry experience in interactive design and / or visual design</li>
                                <li>Excellent interpersonal skills&#x202F;</li>
                                <li>Aware of trends in&#x202F;mobile, communications, and collaboration</li>
                                <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>
                                <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>
                                <li>History of impacting shipping products with your work</li>
                                <li>A Bachelor&rsquo;s Degree in Design (or related field) or equivalent professional experience</li>
                                <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>
                            </ul>
                        </div>
                        <div class="mt-2"><a class="btn btn-brand-1" href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50 mb-20">
        <div class="container">
            <div class="box-newsletter">
                <div class="row">
                    <div class="col-xl-3 col-12 text-center d-none d-xl-block">
                        <!-- <img src="../assets/imgs/template/newsletter-left.png" alt="joxBox"> -->
                    </div>
                    <div class="col-lg-12 col-xl-6 col-12">
                        <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                        <div class="box-form-newsletter mt-40">
                            <form class="form-newsletter">
                                <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                                <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 text-center d-none d-xl-block">
                        <!-- <img src="../assets/imgs/template/newsletter-right.png" alt="joxBox"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection