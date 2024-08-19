@extends('frontend.layouts.main')

@section('title', 'Global Presence')

@section('content')
<main class="main">
    <section class="section-box">
        <div class="breacrumb-cover bg-img-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-10">Global Presence</h2>
                        <p class="font-lg color-text-paragraph-2">Know our global presence</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="breadcrumbs mt-40">
                            <li><a class="home-icon" href="{{ route('home') }}">Home</a></li>
                            <li>Global Presence</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-80">
        <div class="post-loop-grid">
            <div class="container">
                <div class="text-center">
                    <h6 class="f-18 color-text-mutted text-uppercase">Our company</h6>
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Our Indian Presence</h2>
                    <p class="font-sm color-text-paragraph w-lg-50 mx-auto wow animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ligula ante, dictum non aliquet eu, dapibus ac quam. Morbi vel ante viverra orci tincidunt tempor eu id ipsum. Sed consectetur, risus a blandit tempor, velit magna pellentesque risus, at congue tellus dui quis nisl.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="row mt-50">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                    <div class="card-image-top hover-up"><a href="jobs-grid.html">
                            <div class="image" style="background-image: url(../assets/imgs/page/homepage1/location1.png);"><span class="lbl-hot">Hot</span></div>
                        </a>
                        <div class="informations"><a href="jobs-grid.html">
                                <h5>Paris, France</h5>
                            </a>
                            <div class="row">
                                <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">5 Vacancy</span></div>
                                <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">120 companies</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-7 col-sm-12 col-12">
                    <div class="card-image-top hover-up"><a href="jobs-grid.html">
                            <div class="image" style="background-image: url(../assets/imgs/page/homepage1/location2.png);"><span class="lbl-hot">Trending</span></div>
                        </a>
                        <div class="informations"><a href="jobs-grid.html">
                                <h5>London, England</h5>
                            </a>
                            <div class="row">
                                <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">7 Vacancy</span></div>
                                <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">68 companies</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-12">
                    <div class="card-image-top hover-up"><a href="jobs-grid.html">
                            <div class="image" style="background-image: url(../assets/imgs/page/homepage1/location3.png);"><span class="lbl-hot">Hot</span></div>
                        </a>
                        <div class="informations"><a href="jobs-grid.html">
                                <h5>New York, USA</h5>
                            </a>
                            <div class="row">
                                <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">9 Vacancy</span></div>
                                <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">80 companies</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50 mb-30">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Our Global Presence</h2>
                <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find your favourite jobs and get the benefits of yourself</p>
            </div>
        </div>
        <div class="container">
            <div class="row mt-50">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                    <div class="card-image-top hover-up"><a href="jobs-grid.html">
                            <div class="image" style="background-image: url(../assets/imgs/page/homepage1/location1.png);"><span class="lbl-hot">Hot</span></div>
                        </a>
                        <div class="informations"><a href="jobs-grid.html">
                                <h5>Paris, France</h5>
                            </a>
                            <div class="row">
                                <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">5 Vacancy</span></div>
                                <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">120 companies</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-7 col-sm-12 col-12">
                    <div class="card-image-top hover-up"><a href="jobs-grid.html">
                            <div class="image" style="background-image: url(../assets/imgs/page/homepage1/location2.png);"><span class="lbl-hot">Trending</span></div>
                        </a>
                        <div class="informations"><a href="jobs-grid.html">
                                <h5>London, England</h5>
                            </a>
                            <div class="row">
                                <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">7 Vacancy</span></div>
                                <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">68 companies</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-12">
                    <div class="card-image-top hover-up"><a href="jobs-grid.html">
                            <div class="image" style="background-image: url(../assets/imgs/page/homepage1/location3.png);"><span class="lbl-hot">Hot</span></div>
                        </a>
                        <div class="informations"><a href="jobs-grid.html">
                                <h5>New York, USA</h5>
                            </a>
                            <div class="row">
                                <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">9 Vacancy</span></div>
                                <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">80 companies</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                    <div class="card-image-top hover-up"><a href="jobs-grid.html">
                            <div class="image" style="background-image: url(../assets/imgs/page/homepage1/location4.png);"></div>
                        </a>
                        <div class="informations"><a href="jobs-grid.html">
                                <h5>Amsterdam, Holland</h5>
                            </a>
                            <div class="row">
                                <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">16 Vacancy</span></div>
                                <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">86 companies</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-12">
                    <div class="card-image-top hover-up"><a href="jobs-grid.html">
                            <div class="image" style="background-image: url(../assets/imgs/page/homepage1/location5.png);"></div>
                        </a>
                        <div class="informations"><a href="jobs-grid.html">
                                <h5>Copenhagen, Denmark</h5>
                            </a>
                            <div class="row">
                                <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">39 Vacancy</span></div>
                                <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">186 companies</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                    <div class="card-image-top hover-up"><a href="jobs-grid.html">
                            <div class="image" style="background-image: url(../assets/imgs/page/homepage1/location6.png);"></div>
                        </a>
                        <div class="informations"><a href="jobs-grid.html">
                                <h5>Berlin, Germany</h5>
                            </a>
                            <div class="row">
                                <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">15 Vacancy</span></div>
                                <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">632 companies</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection