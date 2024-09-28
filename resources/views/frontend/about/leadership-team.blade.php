@extends('frontend.layouts.main')

@section('title', 'About')

@section('content')
<main class="main">
    <section class="section-box">
        <div class="breacrumb-cover bg-img-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-10">Team</h2>
                        <p class="font-lg color-text-paragraph-2">Know about team</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="breadcrumbs mt-40">
                            <li><a class="home-icon" href="{{ route('home') }}">Home</a></li>
                            <li>Team</li>
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
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Meet Our Team</h2>
                    <p class="font-sm color-text-paragraph w-lg-50 mx-auto wow animate__animated animate__fadeInUp">At UA International, our team is our greatest asset. We are a group of dedicated professionals who bring a diverse range of skills, expertise, and experience to the table. Each team member is committed to delivering the highest level of service, ensuring that our clients receive personalized, innovative solutions tailored to their unique needs.</p>
                </div>
                <div class="row mt-70">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="ua" src="../assets/imgs/page/about/team1.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Arlene McCoy</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span></div><span class="card-location">New York, US</span>
                                <div class="text-center mt-30"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="ua" src="../assets/imgs/page/about/team2.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Floyd Miles</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">UI/UX Designer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span class="ml-10 color-text-mutted font-xs"><span>(</span><span>28</span><span>)</span></span></div><span class="card-location">Chicago, US</span>
                                <div class="text-center mt-30"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="ua" src="../assets/imgs/page/about/team3.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Devon Lane</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span></div><span class="card-location">New York, US</span>
                                <div class="text-center mt-30"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="ua" src="../assets/imgs/page/about/team4.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Jerome Bell</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span></div><span class="card-location">New York, US</span>
                                <div class="text-center mt-30"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="ua" src="../assets/imgs/page/about/team5.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Theresa</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span></div><span class="card-location">New York, US</span>
                                <div class="text-center mt-30"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="ua" src="../assets/imgs/page/about/team6.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Cameron</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span></div><span class="card-location">New York, US</span>
                                <div class="text-center mt-30"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="ua" src="../assets/imgs/page/about/team7.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Jacob Jones</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span></div><span class="card-location">New York, US</span>
                                <div class="text-center mt-30"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="ua" src="../assets/imgs/page/about/team8.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Court Henry</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span><img src="../assets/imgs/template/icons/star.svg" alt="ua"></span><span class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span></div><span class="card-location">New York, US</span>
                                <div class="text-center mt-30"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection