@extends('frontend.layouts.main')

@section('title', 'About')

@section('content')
<main class="main">
    <section class="section-box">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-10">Our Mission And Vission</h2>
                        <p class="font-lg color-text-paragraph-2">Know about our mission and visiion.</p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="breadcrumbs mt-40">
                            <li><a class="home-icon" href="{{ route('home') }}">Home</a></li>
                            <li>Our Mission And Vission</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="box-improve">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12"><a href="blog-details.html"><img src="../assets/imgs/page/job-single-2/img2.png" alt="ua"></a></div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="pt-40 pb-30 pl-30 pr-30">
                            <!-- <a class="btn btn-tag" href="blog-grid.html">Marketing</a> -->
                            <h2 class="mt-20 mb-20">Our Mission</h2>
                            <p class="font-md mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper.</p>
                            <div><a class="btn btn-arrow-right" href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-50 mb-20">
        <div class="container">
            <div class="box-improve">
                <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="pt-40 pb-30 pl-30 pr-30">
                            <!-- <a class="btn btn-tag" href="blog-grid.html">Marketing</a> -->
                            <h2 class="mt-20 mb-20">Our Vission</h2>
                            <p class="font-md mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper.</p>
                            <div><a class="btn btn-arrow-right" href="#">Read More</a></div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12"><a href="#"><img src="../assets/imgs/page/job-single-2/img2.png" alt="ua"></a></div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection