@extends('frontend.layouts.main')

@section('title', 'Job Seeker')

@section('content')
<main class="main">
    <section class="section-box-2">
        <div class="container">
            <div class="banner-hero banner-single banner-single-bg">
                <div class="block-banner text-center">
                    <h3 class="wow animate__animated animate__fadeInUp"><span class="color-brand-2"></span>Job Seeker</h3>
                    <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, <br class="d-none d-xl-block">atque delectus molestias quis?</div>
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
                            <div class="tab-pane fade show active" id="tab-my-profile" role="tabpanel" aria-labelledby="tab-my-profile">
                                <h3 class="mt-0 mb-15 color-brand-1">Submit Resume</h3>
                                <!-- <a class="font-md color-text-paragraph-2" href="#">Update your profile</a> -->
                                <!-- <div class="mt-35 mb-40 box-info-profie">
                      <div class="image-profile"><img src="../assets/imgs/page/candidates/candidate-profile.png" alt="jobbox"></div><a class="btn btn-apply">Upload Avatar</a><a class="btn btn-link">Delete</a>
                    </div> -->
                                <div class="row form-contact">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="font-sm color-text-mutted mb-10">Full Name *</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-sm color-text-mutted mb-10">Email *</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-sm color-text-mutted mb-10">Contact number *</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-sm color-text-mutted mb-10">Religion *</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-sm color-text-mutted mb-10">Passport No. *</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-sm color-text-mutted mb-10">Valid From / To *</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input class="col-md-6 form-control" type="text">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="col-md-6 form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-sm color-text-mutted mb-10">Industry *</label>
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected="selected" value="0">Select CV Type</option>
                                                    <option value="1">Accounting / Finance</option>
                                                    <option value="2">Advertising / PR / MR / Events</option>
                                                    <option value="3">Agriculture / Dairy</option>
                                                    <option value="4">Animation</option>
                                                    <option value="5">Architecture / Interior Design</option>
                                                    <option value="6">Auto / Auto Ancillary</option>
                                                    <option value="227">Automobile</option>
                                                    <option value="7">Aviation / Aerospace Firm</option>
                                                    <option value="8">Banking / Financial Services / Broking</option>
                                                    <option value="9">BPO / ITES</option>
                                                    <option value="66">Brewery / Distillery</option>
                                                    <option value="15">Ceramics /Sanitary ware</option>
                                                    <option value="256">CHALLENGER TRADING &amp; CONTRACTING, DOHA, QATAR</option>
                                                    <option value="11">Chemicals / Petrochemical / Plastic / Rubber</option>
                                                    <option value="69">CIVIL</option>
                                                    <option value="184">Civil Engineer</option>
                                                    <option value="246">Cleaning Service Industry</option>
                                                    <option value="237">Construction</option>
                                                    <option value="12">Construction / Engineering / Cement / Metals</option>
                                                    <option value="232">Construction/Civil</option>
                                                    <option value="13">Consumer Durables</option>
                                                    <option value="267">Contracting &amp; Real State</option>
                                                    <option value="14">Courier / Transportation / Freight</option>
                                                    <option value="74">Dairy farming</option>
                                                    <option value="16">Defence / Government</option>
                                                    <option value="228">Domestic</option>
                                                    <option value="253">E-commerce</option>
                                                    <option value="17">Education / Teaching / Training</option>
                                                    <option value="18">Electricals / Switchgears</option>
                                                    <option value="251">Electromechanical</option>
                                                    <option value="19">Export / Import</option>
                                                    <option value="20">Facility Management</option>
                                                    <option value="21">Fertilizers / Pesticides</option>
                                                    <option value="241">FISHING INDUSTRY</option>
                                                    <option value="252">Fitness Center</option>
                                                    <option value="266">FMCG</option>
                                                    <option value="22">FMCG / Foods / Beverage</option>
                                                    <option value="23">Food Processing</option>
                                                    <option value="24">Fresher / Trainee</option>
                                                    <option value="264">Furniture Industry</option>
                                                    <option value="239">GARMENT INDUSTRY</option>
                                                    <option value="25">Gems &amp; Jewellery</option>
                                                    <option value="255">General Trading Maintenance &amp; Contracting services</option>
                                                    <option value="26">Glass</option>
                                                    <option value="27">Heat Ventilation Air Conditioning</option>
                                                    <option value="260">Heavy Industry</option>
                                                    <option value="238">HOSPITALITY</option>
                                                    <option value="187">HOTEL</option>
                                                    <option value="28">Hotels / Restaurants / Airlines / Travel</option>
                                                    <option value="73">House Keeping</option>
                                                    <option value="29">Industrial Products / Heavy Machinery</option>
                                                    <option value="231">INFORMATION TECHNOLOGY</option>
                                                    <option value="248">Infrastructure / Road Construction and Utilities</option>
                                                    <option value="70">INSTRUMENTATION</option>
                                                    <option value="30">Insurance</option>
                                                    <option value="247">Interior Design</option>
                                                    <option value="233">interior designing</option>
                                                    <option value="32">IT-Hardware &amp; Networking</option>
                                                    <option value="31">IT-Software / Software Services</option>
                                                    <option value="34">KPO / Research /Analytics</option>
                                                    <option value="188">LAUNDRY</option>
                                                    <option value="186">LAUNDRY/HOSPITALITY</option>
                                                    <option value="35">Legal</option>
                                                    <option value="230">LOGISTICS</option>
                                                    <option value="257">Manpower</option>
                                                    <option value="265">Manpower Recruitment</option>
                                                    <option value="254">Manufacturing</option>
                                                    <option value="263">Maritime Industry</option>
                                                    <option value="245">Mechanical</option>
                                                    <option value="68">MECHANICAL - Elevators &amp; Escalators</option>
                                                    <option value="36">Media / Dotcom / Entertainment</option>
                                                    <option value="242">MEDICAL</option>
                                                    <option value="38">Medical / Healthcare / Hospital</option>
                                                    <option value="185">MEP</option>
                                                    <option value="250">MEP Constructions</option>
                                                    <option value="240">Metal Indusry</option>
                                                    <option value="37">Mining</option>
                                                    <option value="249">Network Solutions Provider</option>
                                                    <option value="39">NGO / Social Services</option>
                                                    <option value="145">Office Automation / Interior Designing</option>
                                                    <option value="40">Office Equipment / Automation</option>
                                                    <option value="271">oil &amp; Gas Industry</option>
                                                    <option value="262">Oil &amp; Gas, Off Shore</option>
                                                    <option value="259">Oil &amp; Gas, Petrochemical</option>
                                                    <option value="234">oil and gas</option>
                                                    <option value="41">Oil and Gas / Power / Infrastructure / Energy</option>
                                                    <option value="269">Operations &amp; Maintenance</option>
                                                    <option value="57">Other</option>
                                                    <option value="42">Paper</option>
                                                    <option value="43">Pharma / Biotech / Clinical Research</option>
                                                    <option value="235">Piping Industry</option>
                                                    <option value="258">Poultry Farm</option>
                                                    <option value="44">Printing / Packaging</option>
                                                    <option value="45">Publishing</option>
                                                    <option value="46">Real Estate / Property</option>
                                                    <option value="47">Recruitment</option>
                                                    <option value="63">Retail</option>
                                                    <option value="268">SAFETY SERVICES</option>
                                                    <option value="48">Security / Law Enforcement</option>
                                                    <option value="49">Semiconductors / Electronics</option>
                                                    <option value="50">Shipping / Marine</option>
                                                    <option value="261">SOLAR ENERGY</option>
                                                    <option value="51">Steel</option>
                                                    <option value="52">Strategy /Management Consulting Firms</option>
                                                    <option value="236">TELECOM</option>
                                                    <option value="33">Telecom / ISP</option>
                                                    <option value="270">Testing &amp; research Laboratory</option>
                                                    <option value="53">Textiles / Garments / Accessories</option>
                                                    <option value="71">Transport</option>
                                                    <option value="54">Tyres</option>
                                                    <option value="229">VAN SALESMAN</option>
                                                    <option value="55">Water Treatment / Waste Management</option>
                                                    <option value="56">Wellness/Fitness/Sports</option>
                                                </select>
                                                <!-- <input class="form-control" type="text"> -->
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-sm color-text-mutted mb-10">Position *</label>
                                                <select class="form-select form-control">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>

                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-sm color-text-mutted mb-10">Domestic Experience *</label>
                                                <select class="form-select form-control">
                                                    <option value="0">Select Experience</option>
                                                    <option value="0-1">0-1</option>
                                                    <option value="2-3">2-3</option>
                                                    <option value="4-5">4-5</option>
                                                    <option value="6-7">6-7</option>
                                                    <option value="8-9">8-9</option>
                                                    <option value="10-15">10-15</option>
                                                    <option value="16-20">16-20</option>
                                                    <option value="21-25">21-25</option>
                                                    <option value="Above 26">Above 26</option>
                                                    <option value="7-10">7-10</option>
                                                    <option value="0-0">0-0</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-sm color-text-mutted mb-10">Overseas Experience</label>
                                                <select class="form-select form-control">
                                                    <option value="0">Select Experience</option>
                                                    <option value="0-1">0-1</option>
                                                    <option value="2-3">2-3</option>
                                                    <option value="4-5">4-5</option>
                                                    <option value="6-7">6-7</option>
                                                    <option value="8-9">8-9</option>
                                                    <option value="10-15">10-15</option>
                                                    <option value="16-20">16-20</option>
                                                    <option value="21-25">21-25</option>
                                                    <option value="Above 26">Above 26</option>
                                                    <option value="7-10">7-10</option>
                                                    <option value="0-0">0-0</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Country</label>
                                                    <select class="form-select form-control">
                                                        <option value="0">Select Country</option>
                                                        <option value="19">Australia</option>
                                                        <option value="36">Bahrain</option>
                                                        <option value="29">Bangladesh</option>
                                                        <option value="49">CROATIA</option>
                                                        <option value="16">England</option>
                                                        <option selected="selected" value="1">India</option>
                                                        <option value="12">Iraq</option>
                                                        <option value="10">Japan</option>
                                                        <option value="42">KUWAIT</option>
                                                        <option value="47">Malaysia</option>
                                                        <option value="30">Nepal</option>
                                                        <option value="11">NewZealand</option>
                                                        <option value="41">Nigeria</option>
                                                        <option value="35">OMAN</option>
                                                        <option value="2">Pakistan</option>
                                                        <option value="46">POLAND</option>
                                                        <option value="18">Polland</option>
                                                        <option value="37">Qatar</option>
                                                        <option value="50">Romania</option>
                                                        <option value="26">Saudi Arabia</option>
                                                        <option value="51">Serbia</option>
                                                        <option value="45">South Africa</option>
                                                        <option value="3">SriLanka</option>
                                                        <option value="48">SUDAN</option>
                                                        <option value="21">United Arab Emirates</option>
                                                        <option value="53">United Arab Emirats-Archive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">State</label>
                                                    <input class="form-control" type="text" value="New York">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">City</label>
                                                    <input class="form-control" type="text" value="Mcallen">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Zip code</label>
                                                    <input class="form-control" type="text" value="82356">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Resume</label>
                                                <input class="form-control" type="file" value="82356">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="font-sm color-text-mutted mb-10">Captcha</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="box-button mt-15">
                                            <button class="btn btn-apply-big font-md font-bold">Save</button>
                                        </div>
                                    </div>
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