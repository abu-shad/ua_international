@extends('frontend.layouts.main')

@section('title', 'Contact')

@section('content')
<main class="main">
    <section class="section-box">
        <div class="breacrumb-cover bg-img-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-10">Employer</h2>
                        <p class="font-lg color-text-paragraph-2">Get in touch</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="breadcrumbs mt-40">
                            <li><a class="home-icon" href="{{ route('home') }}">Home</a></li>
                            <li>Employer</li>
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
                        <h6>New Delhi, Head Office (India)</h6>
                        <p class="font-sm color-text-paragraph mb-20">73 - C, 3rd floor Prem Complex ,New Friends Colony, near Gurudwara, Taimoor Nagar, Okhla, New Delhi, 110025</p>
                        <h6>Mumbai</h6>
                        <p class="font-sm color-text-paragraph mb-20">6th Floor, Unit# 93, Sakhar Bhavan, Behind Trident, Nariman Point Mumbai - 400021</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <h6>Uttar Pradesh </h6>
                        <p class="font-sm color-text-paragraph mb-20"> Bansgaon Chauria Dudhi, Post Dudahi. District Kushinagar Uttar Pradesh 274302.</p>
                        
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <h6>Bihar </h6>
                        <p class="font-sm color-text-paragraph mb-20"> Murli Parsouni, Parsouni Murli,West Champaran,Bihar-845307</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-40"><span class="font-md color-brand-2 mt-20 d-inline-block">Employer</span>
                    <h2 class="mt-5 mb-10">Get in touch</h2>
                    <p class="font-md color-text-paragraph-2">The right move at the right time saves your query. live<br class="d-none d-lg-block"> the dream of expanding your business.</p>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <form class="contact-form-style mt-30" id="contact-form" action="{{ route('employer.create') }}" method="post">
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
                                    <input class="font-sm color-text-paragraph-2" name="company" placeholder="Company (optional)" type="text" value="{{ old('company') }}">
                                    @error('company')
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
                            <div class="col-lg-6 col-md-6">
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="designation" placeholder="Designation" type="tel" value="{{ old('designation') }}">
                                    @error('designation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="country" placeholder="Country" type="tel" value="{{ old('country') }}">
                                    @error('country')
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
                <div class="col-lg-4 text-center d-none d-lg-block"><img src="../assets/imgs/page/contact/img.png" alt="joxBox"></div>
            </div>
        </div>
    </section>
</main>
@endsection