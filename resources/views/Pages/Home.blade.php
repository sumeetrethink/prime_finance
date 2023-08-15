@extends('index')
@section('content')
    @include('Common.banner')
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn">
            <span class="flaticon-cancel"></span>
        </div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://azim.commonsupport.com/Finandox/{{ url('/') }}">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required />
                            <input type="submit" value="Search Now!" class="theme-btn" />
                        </fieldset>
                    </div>
                </form>
                <br />
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Welcome Setion -->
    <section class="welcome-section pt-0">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="row m-0">
                    <!-- Welcome Block One -->
                    <div class="welcome-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="flaticon-analysis"></span>
                            </div>
                            <h2>@lang('lang.tradeFinance')</h2>
                            <div class="text">
                                @lang('lang.tradeFinanceContent')
                            </div>
                            <div class="read-more"><a href="#">@lang('lang.readMore')</a></div>
                        </div>
                    </div>
                    <!-- Welcome Block One -->
                    <div class="welcome-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box" style="background-image: url(assets/images/resource/image-2.jpg);">
                            <div class="icon-box"><span class="flaticon-tax"></span></div>
                            <h2>@lang('lang.mortageFinance')</h2>
                            <div class="text">
                                @lang('lang.mortageFinanceContent')
                            </div>
                            <div class="read-more"><a href="#">@lang('lang.readMore')</a></div>
                        </div>
                    </div>
                    <!-- Welcome Block One -->
                    <div class="welcome-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="flaticon-work-1"></span>
                            </div>
                            <h2>@lang('lang.businessLoan')</h2>
                            <div class="text">
                                @lang('lang.businessLoanContent')
                            </div>
                            <div class="read-more"><a href="#">@lang('lang.readMore')</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <div class="image-one">
                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png"
                                data-src="assets/images/resource/image-10.jpg" alt="" />
                        </div>
                        <div class="image-two wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="image-outer">
                                <img class="lazy-image owl-lazy"
                                    src="assets/images/resource/image-spacer-for-validation.png"
                                    data-src="assets/images/resource/image-3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-box">
                        <div class="sec-title">
                            <div class="sub-title">@lang('lang.aboutUsHeading')</div>
                            <h2>@lang('lang.rightAdviceHeading')</h2>
                                    <div class="text">
                                        @lang('lang.rightAdviceContent')</div>
                                    </div>
                                    <div class="row">
                                        <div class="info-column col-md-6">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <img src="assets/images/icons/icon-1.png" alt="" />
                                                </div>
                                                <h5>Phone Number</h5>
                                                <h2>+971 589 776 626</h2>
                                            </div>
                                        </div>
                                        <div class="info-column col-md-6">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <img src="assets/images/icons/icon-2.png" alt="" />
                                                </div>
                                                <h5>Email Address</h5>
                                                <h2>info@theprimefinance.com</h2>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="left-column">
                    <div class="services-content">
                        <div class="sec-title light">
                            <div class="sub-title">@lang('lang.ourServiceHeading')</div>
                            <h2>@lang('lang.whatActuallty')<br />@lang('lang.doHere')
                            </h2>
                        </div>
                        <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="icon">
                                <img src="assets/images/icons/icon-3.png" alt="" />
                            </div>
                            <h2 style="text-transform: uppercase">@lang('lang.tradeFinance')</h2>
                            <div class="text">
                                @lang('lang.tradeFinanceContent')
                            </div>
                        </div>
                        <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="icon">
                                <img src="assets/images/icons/icon-4.png" alt="" />
                            </div>
                            <h2>@lang('lang.mortageFinance')</h2>
                                    <div class="text">
                                        @lang('lang.mortageFinanceContent2')
                                    </div>
                        </div>
                        <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="icon">
                                <img src="assets/images/icons/icon-5.png" alt="" />
                            </div>
                            <h2>@lang('lang.businessLoan')</h2>
                            <div class="text">
                                @lang('lang.businessLoanContent')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-column">
                    <!-- Fact Counter -->
                    <div class="fact-counter">
                        <div class="border-box">
                            <div class="border_top"></div>
                            <div class="border_bottom"></div>
                            <div class="border_middile"></div>
                        </div>
                        <div class="row">
                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-6.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="90">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">Business Monitoring</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-7.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="71">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">Business Growth</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-8.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="33">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">Financial Plan</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-9.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="42">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">Finance Consulting</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-10.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="69">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">Data Analysis</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-11.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="10">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">business Strategy</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="author-box"
                        style="
              background-image: url(assets/images/background/image-1.jpg);
            ">
                        <div class="signature">
                            <img src="assets/images/resource/signature.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-chooseus-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content-box">
                        <div class="sec-title">
                            <div class="sub-title"> @lang('lang.WhyChooseUs')</div>
                            <h2> @lang('lang.WhyShouldYou') <br /> @lang('lang.ChooseUs')</h2>
                        </div>
                        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one"
                                    role="tab" aria-controls="tab-one" aria-selected="true">@lang('lang.OurMission')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab"
                                    aria-controls="tab-two" aria-selected="false">@lang('lang.OurVission')</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel"
                                aria-labelledby="tab-one">
                                <div class="clearfix">
                                    <div class="image">
                                        <img class="lazy-image owl-lazy"
                                            src="assets/images/resource/image-spacer-for-validation.png"
                                            data-src="assets/images/resource/image-4.jpg" alt="" />
                                    </div>
                                    <div class="text">
                                        <p>
                                            @lang('lang.OurMissionC1')
                                        </p>
                                        <p>
                                            @lang('lang.OurMissionC2')
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel"
                                aria-labelledby="tab-two">
                                <div class="clearfix">
                                    <div class="image">
                                        <img class="lazy-image owl-lazy"
                                            src="assets/images/resource/image-spacer-for-validation.png"
                                            data-src="assets/images/resource/image-4.jpg" alt="" />
                                    </div>
                                    <div class="text">
                                        <p>
                                            @lang('lang.OurVissionC1')
                                        </p>
                                        <p>
                                            @lang('lang.OurVissionC2')

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <div class="image-one">
                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png"
                                data-src="assets/images/resource/image-11.jpg" alt="" />
                        </div>
                        <div class="image-two">
                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png"
                                data-src="assets/images/resource/image-1.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">@lang('lang.WriteHere')</div>
                        <h2>@lang('lang.GetInTouch')</h2>
                    </div>
                    <!-- Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="http://azim.commonsupport.com/Finandox/sendemail.php"
                            id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-12 form-group">
                                    <label for="name">@lang('lang.Enteryourname')</label>
                                    <input type="text" name="username" id="name"
                                        placeholder="Enter name here......" required="" />
                                    <i class="fas fa-user"></i>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="email">@lang('lang.Enteryouremail')</label>
                                    <input type="email" name="email" id="email"
                                        placeholder="Enter email here......" required="" />
                                    <i class="fas fa-envelope"></i>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="message">@lang('lang.Enteryourmessage')</label>
                                    <textarea name="message" id="message" placeholder="Enter message here......"></textarea>
                                    <i class="fas fa-edit"></i>
                                </div>

                                <div class="col-md-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                        <span class="btn-title">@lang('lang.GetInTouch')</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">@lang('lang.GetUsHere')</div>
                        <h2>@lang('lang.ContactUs')</h2>
                    </div>
                    <div class="contact-info">
                        <div class="border-box">
                            <div class="border_top"></div>
                            <div class="border_middile"></div>
                        </div>
                        <div class="row">
                            <div class="info-column col-md-6">
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-email-6"></span>
                                    </div>
                                    <h3>Email Address</h3>
                                    <ul>
                                        <li>
                                            <a href="mailto:info@theprimefinance.com">info@theprimefinance.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-column col-md-6">
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-call-1"></span>
                                    </div>
                                    <h3>Phone Number</h3>
                                    <ul>
                                        <li>
                                            <a href="tel:+971589776626">+971 589 776 626</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-column col-md-6">
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-location"></span>
                                    </div>
                                    <h3>Office Address</h3>
                                    <ul>
                                        <li>Business Bay, Dubai, UAE</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-column col-md-6">
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-worldwide"></span>
                                    </div>
                                    <h3>Web Connect</h3>
                                    <ul>
                                        <li>
                                            <a href="http://example.com/">theprimefinance.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
