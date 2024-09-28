@extends('frontend.layouts.main')

@section('title', 'About')

@section('content')
<main class="main">
    <section class="section-box">
        <div><img src="../assets/imgs/page/blog/img-single.png"></div>
    </section>
    <section class="section-box">
        <div class="archive-header pt-50 text-center">
            <div class="container">
                <div class="box-white">
                    <div class="max-width-single">
                        <!-- <a class="btn btn-tag" href="#">Board Of Directors</a> -->
                        <h2 class="text-center">Board Of Directors</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="post-loop-grid mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="single-body">
                        <div class="max-width-single">
                            <div class="font-lg mb-30">
                                <p>At UA International, our Board of Directors comprises industry leaders with a proven track record of guiding businesses toward growth and success. With a wealth of experience across various sectors, our directors bring strategic insight, visionary leadership, and a commitment to excellence</p>
                            </div>
                        </div>
                        <figure><img src="../assets/imgs/page/blog/img-content.png"></figure>
                        <div class="max-width-single">
                            <div class="content-single">
                                <p>Their combined expertise enables us to provide our clients with informed, innovative solutions tailored to their unique needs. Each director plays a pivotal role in ensuring our company remains at the forefront of the consultancy industry, helping organizations worldwide achieve their full potential.

                                    Our Board is dedicated to upholding the highest standards of integrity, fostering collaboration, and driving sustainable growth for our clients and stakeholders.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection