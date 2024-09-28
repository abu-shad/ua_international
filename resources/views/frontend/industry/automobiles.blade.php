@extends('frontend.layouts.main')

@section('title', 'Automobiles')

@section('content')
<main class="main">
    <section class="section-box">
        <div class="breacrumb-cover bg-img-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-10">Automobiles</h2>
                        <p class="font-lg color-text-paragraph-2">Know about our Automobiles industry</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="breadcrumbs mt-40">
                            <li><a class="home-icon" href="#">Home</a></li>
                            <li>Automobiles</li>
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
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Automobiles</h2>
                    <p class="font-sm color-text-paragraph wow animate__animated animate__fadeInUp w-lg-50 mx-auto">The automobile industry in the Middle East is undergoing significant transformation, driven by a combination of economic growth, technological advancements, and shifting consumer preferences. As the region's population continues to grow, so does the demand for personal and commercial vehicles, making the automobile sector a key player in the regional economy.</p>
                </div>
                <div class="row mt-70">
                    <div class="col-lg-6 col-md-12 col-sm-12"><img src="../assets/imgs/page/about/img-about2.png" alt="joxBox"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h3 class="mt-15">What we can do in Automobiles?</h3>
                        <div class="mt-20">
                            <p class="font-md color-text-paragraph mt-20">The region is also becoming a hub for automotive manufacturing, with several global manufacturers establishing production facilities and assembly plants to tap into the local market. This has led to job creation and technological knowledge transfer, further strengthening the industry. With the rise of digital technologies, automotive companies are increasingly focusing on connected vehicles and advanced driver-assistance systems, enhancing safety and driving experiences.</p>
                            <p class="font-md color-text-paragraph mt-20">Moreover, the used car market is thriving, providing consumers with affordable options and contributing to the overall growth of the automobile industry. Despite challenges such as fluctuating oil prices and economic uncertainties, the Middle East’s automobile sector is poised for continued growth, driven by innovation, sustainability, and a commitment to meeting the evolving needs of consumers.</p>
                            
                        </div>
                        <!-- <div class="mt-30"><a class="btn btn-brand-1" href="#">Read More</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection