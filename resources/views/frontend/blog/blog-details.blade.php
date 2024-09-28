@extends('frontend.layouts.main')

@section('title', 'Blog Details')

@section('content')

    <main class="main">
        <section class="section-box">
            <div><img src="{{ asset('assets/imgs/page/blog/img-single.png')}}"></div>
        </section>
        <section class="section-box">
            <div class="archive-header pt-50 text-center">
                <div class="container">
                    <div class="box-white">
                        <div class="max-width-single"><a class="btn btn-tag" href="#">News</a>
                            <h2 class="mb-30 mt-20 text-center">{{ $blog->title }}</h2>
                            {{-- <div class="post-meta text-muted d-flex align-items-center mx-auto justify-content-center">
                                <div class="author d-flex align-items-center mr-30"><img alt="jobBox"
                                        src="../assets/imgs/page/homepage1/user3.png"><span>Sarah Harding</span></div>
                                <div class="date"><span class="font-xs color-text-paragraph-2 mr-20 d-inline-block"><img
                                            class="img-middle mr-5" src="../assets/imgs/page/blog/calendar.svg"> 06 Sep
                                        2022</span><span class="font-xs color-text-paragraph-2 d-inline-block"><img
                                            class="img-middle mr-5" src="../assets/imgs/template/icons/time.svg"> 8 mins to
                                        read</span></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="post-loop-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="single-body">
                            <figure class="text-center"><img src="{{ asset($blog->image)}}"></figure>
                            <div class="max-width-single">
                                <div class="content-single">
                                    <p></p>
                                    <p>
                                        {{ $blog->content }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
