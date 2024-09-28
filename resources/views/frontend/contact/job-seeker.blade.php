@extends('frontend.layouts.main')

@section('title', 'Job Seeker')

@section('content')
    <main class="main">
        <section class="section-box-2">
            <div class="container">
                <div class="banner-hero banner-single banner-single-bg">
                    <div class="block-banner text-center">
                        <h3 class="wow animate__animated animate__fadeInUp"><span class="color-brand-2"></span>Job Seeker</h3>
                        <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".1s">Looking for the right opportunity to showcase your skills and passion? Join a company that values talent, innovation, <br class="d-none d-xl-block">  and dedication. Let’s build a successful career together!</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-12">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-50">
                        <div class="content-single">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-my-profile" role="tabpanel"
                                    aria-labelledby="tab-my-profile">
                                    <h3 class="mt-0 mb-15 color-brand-1">Submit Resume</h3>
                                </div>
                                <div class="row form-contact">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                
                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    <form action="{{ route('job.seeker.create') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Full Name *</label>
                                                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Email *</label>
                                                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Contact number *</label>
                                                    <input class="form-control" type="number" name="contact" value="{{ old('contact') }}">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Religion *</label>
                                                    <input class="form-control" type="text" name="religion" value="{{ old('religion') }}">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Passport No. *</label>
                                                    <input class="form-control" type="text" name="passport_no" value="{{ old('passport_no') }}">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Valid From / To *</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input class="col-md-6 form-control" type="date" name="valid_from" value="{{ old('valid_from') }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="col-md-6 form-control" type="date" name="valid_to" value="{{ old('valid_to') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Industry *</label>
                                                    <select class="form-select form-control" name="industry" aria-label="Default select example">
                                                        <option value="0" {{ old('industry') == '0' ? 'selected' : '' }}>Select Industry</option>
                                                        <option value="1" {{ old('industry') == '1' ? 'selected' : '' }}>Accounting / Finance</option>
                                                        <option value="2" {{ old('industry') == '2' ? 'selected' : '' }}>Advertising / PR / MR / Events</option>
                                                        <option value="3" {{ old('industry') == '3' ? 'selected' : '' }}>Agriculture / Dairy</option>
                                                        <option value="4" {{ old('industry') == '4' ? 'selected' : '' }}>Animation</option>
                                                        <option value="5" {{ old('industry') == '5' ? 'selected' : '' }}>Architecture / Interior Design</option>
                                                        <option value="6" {{ old('industry') == '6' ? 'selected' : '' }}>Auto / Auto Ancillary</option>
                                                        <option value="7" {{ old('industry') == '7' ? 'selected' : '' }}>Aviation / Aerospace Firm</option>
                                                        <option value="8" {{ old('industry') == '8' ? 'selected' : '' }}>Banking / Financial Services / Broking</option>
                                                        <option value="9" {{ old('industry') == '9' ? 'selected' : '' }}>BPO / ITES</option>
                                                        <option value="11" {{ old('industry') == '11' ? 'selected' : '' }}>Chemicals / Petrochemical / Plastic / Rubber</option>
                                                        <option value="12" {{ old('industry') == '12' ? 'selected' : '' }}>Construction / Engineering / Cement / Metals</option>
                                                        <option value="13" {{ old('industry') == '13' ? 'selected' : '' }}>Consumer Durables</option>
                                                        <option value="14" {{ old('industry') == '14' ? 'selected' : '' }}>Courier / Transportation / Freight</option>
                                                        <option value="15" {{ old('industry') == '15' ? 'selected' : '' }}>Ceramics / Sanitary ware</option>
                                                        <option value="16" {{ old('industry') == '16' ? 'selected' : '' }}>Defence / Government</option>
                                                        <option value="17" {{ old('industry') == '17' ? 'selected' : '' }}>Education / Teaching / Training</option>
                                                        <option value="18" {{ old('industry') == '18' ? 'selected' : '' }}>Electricals / Switchgears</option>
                                                        <option value="19" {{ old('industry') == '19' ? 'selected' : '' }}>Export / Import</option>
                                                        <option value="20" {{ old('industry') == '20' ? 'selected' : '' }}>Facility Management</option>
                                                        <option value="21" {{ old('industry') == '21' ? 'selected' : '' }}>Fertilizers / Pesticides</option>
                                                        <option value="22" {{ old('industry') == '22' ? 'selected' : '' }}>FMCG / Foods / Beverage</option>
                                                        <option value="23" {{ old('industry') == '23' ? 'selected' : '' }}>Food Processing</option>
                                                        <option value="24" {{ old('industry') == '24' ? 'selected' : '' }}>Fresher / Trainee</option>
                                                        <option value="25" {{ old('industry') == '25' ? 'selected' : '' }}>Gems & Jewellery</option>
                                                        <option value="26" {{ old('industry') == '26' ? 'selected' : '' }}>Glass</option>
                                                        <option value="27" {{ old('industry') == '27' ? 'selected' : '' }}>Heat Ventilation Air Conditioning</option>
                                                        <option value="28" {{ old('industry') == '28' ? 'selected' : '' }}>Hotels / Restaurants / Airlines / Travel</option>
                                                        <option value="29" {{ old('industry') == '29' ? 'selected' : '' }}>Industrial Products / Heavy Machinery</option>
                                                        <option value="30" {{ old('industry') == '30' ? 'selected' : '' }}>Insurance</option>
                                                        <option value="31" {{ old('industry') == '31' ? 'selected' : '' }}>IT-Software / Software Services</option>
                                                        <option value="32" {{ old('industry') == '32' ? 'selected' : '' }}>IT-Hardware & Networking</option>
                                                        <option value="33" {{ old('industry') == '33' ? 'selected' : '' }}>Telecom / ISP</option>
                                                        <option value="34" {{ old('industry') == '34' ? 'selected' : '' }}>KPO / Research / Analytics</option>
                                                        <option value="36" {{ old('industry') == '36' ? 'selected' : '' }}>Media / Dotcom / Entertainment</option>
                                                        <option value="37" {{ old('industry') == '37' ? 'selected' : '' }}>Mining</option>
                                                        <option value="38" {{ old('industry') == '38' ? 'selected' : '' }}>Medical / Healthcare / Hospital</option>
                                                        <option value="39" {{ old('industry') == '39' ? 'selected' : '' }}>NGO / Social Services</option>
                                                        <option value="40" {{ old('industry') == '40' ? 'selected' : '' }}>Office Equipment / Automation</option>
                                                        <option value="41" {{ old('industry') == '41' ? 'selected' : '' }}>Oil and Gas / Power / Infrastructure / Energy</option>
                                                        <option value="42" {{ old('industry') == '42' ? 'selected' : '' }}>Paper</option>
                                                        <option value="43" {{ old('industry') == '43' ? 'selected' : '' }}>Pharma / Biotech / Clinical Research</option>
                                                        <option value="44" {{ old('industry') == '44' ? 'selected' : '' }}>Printing / Packaging</option>
                                                        <option value="45" {{ old('industry') == '45' ? 'selected' : '' }}>Publishing</option>
                                                        <option value="46" {{ old('industry') == '46' ? 'selected' : '' }}>Real Estate / Property</option>
                                                        <option value="47" {{ old('industry') == '47' ? 'selected' : '' }}>Recruitment</option>
                                                        <option value="48" {{ old('industry') == '48' ? 'selected' : '' }}>Security / Law Enforcement</option>
                                                        <option value="49" {{ old('industry') == '49' ? 'selected' : '' }}>Semiconductors / Electronics</option>
                                                        <option value="50" {{ old('industry') == '50' ? 'selected' : '' }}>Shipping / Marine</option>
                                                        <option value="51" {{ old('industry') == '51' ? 'selected' : '' }}>Steel</option>
                                                        <option value="52" {{ old('industry') == '52' ? 'selected' : '' }}>Strategy / Management Consulting Firms</option>
                                                        <option value="53" {{ old('industry') == '53' ? 'selected' : '' }}>Textiles / Garments / Accessories</option>
                                                        <option value="54" {{ old('industry') == '54' ? 'selected' : '' }}>Tyres</option>
                                                        <option value="55" {{ old('industry') == '55' ? 'selected' : '' }}>Water Treatment / Waste Management</option>
                                                        <option value="57" {{ old('industry') == '57' ? 'selected' : '' }}>Other</option>
                                                        <!-- Add more options as needed, maintain sequence -->
                                                    </select>
                                                    <!-- <input class="form-control" type="text"> -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="font-sm color-text-mutted mb-10">Designation
                                                            *</label>
                                                        <input class="form-control" type="text" name="designation" value="{{ old('designation') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Domestic Experience
                                                        *</label>
                                                        <select class="form-select form-control" name="domestic_exp" aria-label="Select Experience">
                                                            <option value="0" {{ old('domestic_exp') == '0' ? 'selected' : '' }}>Select Experience</option>
                                                            <option value="0-0" {{ old('domestic_exp') == '0-0' ? 'selected' : '' }}>0-0</option>
                                                            <option value="0-1" {{ old('domestic_exp') == '0-1' ? 'selected' : '' }}>0-1</option>
                                                            <option value="2-3" {{ old('domestic_exp') == '2-3' ? 'selected' : '' }}>2-3</option>
                                                            <option value="4-5" {{ old('domestic_exp') == '4-5' ? 'selected' : '' }}>4-5</option>
                                                            <option value="6-7" {{ old('domestic_exp') == '6-7' ? 'selected' : '' }}>6-7</option>
                                                            <option value="8-9" {{ old('domestic_exp') == '8-9' ? 'selected' : '' }}>8-9</option>
                                                            <option value="10-15" {{ old('domestic_exp') == '10-15' ? 'selected' : '' }}>10-15</option>
                                                            <option value="16-20" {{ old('domestic_exp') == '16-20' ? 'selected' : '' }}>16-20</option>
                                                            <option value="21-25" {{ old('domestic_exp') == '21-25' ? 'selected' : '' }}>21-25</option>
                                                        </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Overseas
                                                        Experience</label>
                                                    <select class="form-select form-control" name="oversease_exp">
                                                        <option value="0" {{ old('domestic_exp') == '0' ? 'selected' : '' }}>Select Experience</option>
                                                            <option value="0-0" {{ old('domestic_exp') == '0-0' ? 'selected' : '' }}>0-0</option>
                                                            <option value="0-1" {{ old('domestic_exp') == '0-1' ? 'selected' : '' }}>0-1</option>
                                                            <option value="2-3" {{ old('domestic_exp') == '2-3' ? 'selected' : '' }}>2-3</option>
                                                            <option value="4-5" {{ old('domestic_exp') == '4-5' ? 'selected' : '' }}>4-5</option>
                                                            <option value="6-7" {{ old('domestic_exp') == '6-7' ? 'selected' : '' }}>6-7</option>
                                                            <option value="8-9" {{ old('domestic_exp') == '8-9' ? 'selected' : '' }}>8-9</option>
                                                            <option value="10-15" {{ old('domestic_exp') == '10-15' ? 'selected' : '' }}>10-15</option>
                                                            <option value="16-20" {{ old('domestic_exp') == '16-20' ? 'selected' : '' }}>16-20</option>
                                                            <option value="21-25" {{ old('domestic_exp') == '21-25' ? 'selected' : '' }}>21-25</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="font-sm color-text-mutted mb-10">Country</label>
                                                        <select class="form-select form-control" name="country" aria-label="Select Country">
                                                            <option value="0" {{ old('country') == '0' ? 'selected' : '' }}>Select Country</option>
                                                            <option value="1" {{ old('country') == '1' ? 'selected' : '' }}>India</option>
                                                            <option value="2" {{ old('country') == '2' ? 'selected' : '' }}>Pakistan</option>
                                                            <option value="3" {{ old('country') == '3' ? 'selected' : '' }}>Sri Lanka</option>
                                                            <option value="10" {{ old('country') == '10' ? 'selected' : '' }}>Japan</option>
                                                            <option value="11" {{ old('country') == '11' ? 'selected' : '' }}>New Zealand</option>
                                                            <option value="12" {{ old('country') == '12' ? 'selected' : '' }}>Iraq</option>
                                                            <option value="16" {{ old('country') == '16' ? 'selected' : '' }}>England</option>
                                                            <option value="19" {{ old('country') == '19' ? 'selected' : '' }}>Australia</option>
                                                            <option value="21" {{ old('country') == '21' ? 'selected' : '' }}>United Arab Emirates</option>
                                                            <option value="26" {{ old('country') == '26' ? 'selected' : '' }}>Saudi Arabia</option>
                                                            <option value="29" {{ old('country') == '29' ? 'selected' : '' }}>Bangladesh</option>
                                                            <option value="30" {{ old('country') == '30' ? 'selected' : '' }}>Nepal</option>
                                                            <option value="35" {{ old('country') == '35' ? 'selected' : '' }}>Oman</option>
                                                            <option value="36" {{ old('country') == '36' ? 'selected' : '' }}>Bahrain</option>
                                                            <option value="37" {{ old('country') == '37' ? 'selected' : '' }}>Qatar</option>
                                                            <option value="41" {{ old('country') == '41' ? 'selected' : '' }}>Nigeria</option>
                                                            <option value="42" {{ old('country') == '42' ? 'selected' : '' }}>Kuwait</option>
                                                            <option value="45" {{ old('country') == '45' ? 'selected' : '' }}>South Africa</option>
                                                            <option value="46" {{ old('country') == '46' ? 'selected' : '' }}>Poland</option>
                                                            <option value="47" {{ old('country') == '47' ? 'selected' : '' }}>Malaysia</option>
                                                            <option value="48" {{ old('country') == '48' ? 'selected' : '' }}>Sudan</option>
                                                            <option value="49" {{ old('country') == '49' ? 'selected' : '' }}>Croatia</option>
                                                            <option value="50" {{ old('country') == '50' ? 'selected' : '' }}>Romania</option>
                                                            <option value="51" {{ old('country') == '51' ? 'selected' : '' }}>Serbia</option>
                                                            <option value="53" {{ old('country') == '53' ? 'selected' : '' }}>United Arab Emirates-Archive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="font-sm color-text-mutted mb-10">State</label>
                                                        <input class="form-control" type="text" name="state" value="{{ old('state') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="font-sm color-text-mutted mb-10">City</label>
                                                        <input class="form-control" type="text" name="city" value="{{ old('city') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="font-sm color-text-mutted mb-10">Zip code</label>
                                                        <input class="form-control" type="text" name="zip" value="{{ old('zip') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Resume</label>
                                                    <input class="form-control" type="file" name="resume">
                                                </div>
                                            </div>
                                            <div class="box-button mt-15">
                                                <button class="btn btn-apply-big font-md font-bold">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
