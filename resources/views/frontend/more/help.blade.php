@extends('frontend.layouts.main')

@section('title', 'Help')

@section('content')
<main class="main">
    <section class="section-box">
        <div class="breacrumb-cover bg-img-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-10">Helpdesk</h2>
                        <p class="font-lg color-text-paragraph-2">Get in touch</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="breadcrumbs mt-40">
                            <li><a class="home-icon" href="{{ route('home') }}">Home</a></li>
                            <li>Helpdesk</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-80">
        <div class="container">
            <div class="box-info-contact">
                <div class="row">
                    <!-- <div class="col-lg-3 col-md-6 col-sm-12 mb-30"><a href="#"><img src="../assets/imgs/page/contact/logo.svg" alt="joxBox"></a>
                        <div class="font-sm color-text-paragraph">205 North Michigan Avenue, Suite 810 Chicago, 60601, USA<br> Phone: (123) 456-7890<br> Email: contact@jobbox.com</div><a class="text-uppercase color-brand-2 link-map" href="#">View map</a>
                    </div> -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <h6>London</h6>
                        <p class="font-sm color-text-paragraph mb-20">2118 Thornridge Cir. Syracuse,<br class="d-none d-lg-block"> Connecticut 35624</p>
                        <h6>New York</h6>
                        <p class="font-sm color-text-paragraph mb-20">4517 Washington Ave.<br class="d-none d-lg-block"> Manchester, Kentucky 39495</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <h6>Chicago</h6>
                        <p class="font-sm color-text-paragraph mb-20">3891 Ranchview Dr. Richardson,<br class="d-none d-lg-block"> California 62639</p>
                        <h6>San Francisco</h6>
                        <p class="font-sm color-text-paragraph mb-20">4140 Parker Rd. Allentown,<br class="d-none d-lg-block"> New Mexico 31134</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <h6>Sysney</h6>
                        <p class="font-sm color-text-paragraph mb-20">3891 Ranchview Dr. Richardson,<br class="d-none d-lg-block"> California 62639</p>
                        <h6>Singapore</h6>
                        <p class="font-sm color-text-paragraph mb-20">4140 Parker Rd. Allentown,<br class="d-none d-lg-block"> New Mexico 31134</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-40"><span class="font-md color-brand-2 mt-20 d-inline-block">Contact us</span>
                    <h2 class="mt-5 mb-10">Get in touch</h2>
                    <p class="font-md color-text-paragraph-2">The right move at the right time saves your investment. live<br class="d-none d-lg-block"> the dream of expanding your business.</p>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <form class="contact-form-style mt-30" id="contact-form" action="{{ route('help.create') }}" method="post">
                        @csrf
                        <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="col-lg-6 col-md-6">
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="name" placeholder="Enter your name" type="text" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="address" placeholder="Address " type="text" value="{{ old('address') }}">
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="email" placeholder="Your email" type="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="phone" placeholder="Phone number" type="tel" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="textarea-style mb-30">
                                    <textarea class="font-sm color-text-paragraph-2" name="message" placeholder="Tell us about yourself">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="submit btn btn-send-message" type="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
                <div class="col-lg-4 text-center d-none d-lg-block"><img src="../assets/imgs/page/contact/img.png" alt="UA"></div>
            </div>
        </div>
    </section>
</main>
@endsection