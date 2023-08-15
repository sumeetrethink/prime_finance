@extends('index')
@section('content')
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

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-23.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>@lang('lang.tradeFinance')</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">@lang('lang.tradeFinance')</li>
            </ul>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <!-- Category Widget -->
                        <div class="sidebar-widget-two categories-widget-two">
                            <div class="widget-content">
                                <ul>
                                    <li class="current">
                                        <a href="{{ url('trade-finance') }}">@lang('lang.tradeFinance')<i
                                                class="fa fa-angle-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('mortgage-finance') }}">@lang('lang.mortageFinance')<i
                                                class="fa fa-angle-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('business-loan') }}">@lang('lang.businessLoan')<i
                                                class="fa fa-angle-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('Equipment-Machinery') }}">@lang('lang.EquipmentMachinery')<i
                                                class="fa fa-angle-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('Trade-Credit-Insurance') }}">@lang('lang.TradeCreditInsurance')</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Contact Form Widget -->
                        <div class="sidebar-widget-two contact-form-widget">
                            <div class="inner-box">
                                <h3>@lang('lang.ContactUs')</h3>
                                <!-- Contact Form-->
                                <div class="contact-form">
                                    <form method="post" action="#" id="contact-form">
                                        <div class="row clearfix">
                                            <div class="col-md-12 form-group">
                                                <input type="text" name="username" placeholder="@lang('lang.Enteryourname')..."
                                                    required="" />
                                                <i class="fal fa-user"></i>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <input type="email" name="email" placeholder="@lang('lang.Enteryouremail')..."
                                                    required="" />
                                                <i class="fal fa-envelope"></i>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <input type="email" name="email" placeholder="@lang('lang.EnteryourPhone')..."
                                                    required="" />
                                                <i class="fal fa-phone"></i>
                                            </div>

                                            <div class="col-md-12 form-group text-center">
                                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                                    <span class="btn-title">@lang('lang.SubmitNow')</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Info Widget -->
                        <div class="sidebar-widget-two contact-info-widget">
                            <div class="inner-box"
                                style="
                      background-image: url(assets/images/background/image-18.jpg);
                    ">
                                <h3>@lang('lang.Needhelp')?</h3>
                                <ul>
                                    <li>
                                        <a href="mailto:info@webmail.com">info@theprimefinance.com</a>
                                    </li>
                                    <li><a href="tel:+98787676576">+971 589 776 626</a></li>
                                    <li>
                                        <a href="mailto:support.example.com">www.theprimefinance.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8">
                    <div class="services-details pl-lg-5">
                        <div class="image-box">
                            <img src="assets/images/resource/service-2.jpg" alt="" />
                        </div>
                        <div class="content">
                            <div class="sec-title">
                                <div class="sub-title">@lang('lang.FinancialPlanning')</div>
                                <h2>
                                    A) @lang('lang.ACCOUNTRECEIVABLES')
                                </h2>
                            </div>
                            <div class="text">
                                @lang('lang.ThetermInvoiceDiscounting')<br />
                                <strong>1) @lang('lang.BillDiscounting')</strong><br />
                                <strong>2) @lang('lang.PurchaseBillDiscounting')</strong> <br />
                                <strong>3) @lang('lang.ReceivablesDiscounting')</strong><br />
                                <strong>4) @lang('lang.ReceivableFinance')</strong> <br />
                                @lang('lang.InvoiceorBillDiscounting')<br />
                                @lang('lang.Accountsreceivableisanymoney')

                            </div>
                        </div>
                        <div class="graph">
                            <div class="row">
                                <div class="col-md-8">
                                    <img src="assets/images/resource/graph-3.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="content">
                            <div class="sec-title">
                                <h2>B) @lang('lang.SupplierPaymentFinance')</h2>
                            </div>
                            <div class="text">
                                @lang('lang.ThetermSupplierPaymentFinance')<br />
                                <strong>1) @lang('lang.AccountPayablesfinance')</strong><br />
                                <strong>2) @lang('lang.VendorFinance') </strong> <br />
                                <strong>3) @lang('lang.SupplierChainFinance') </strong><br />
                                <strong>4) @lang('lang.ReverseFactoring')</strong> <br />
                                @lang('lang.SupplierPaymentfinancingisa')<br />
                                @lang('lang.Thebuyerwillpaytheprincipal')
                            </div>
                        </div>
                        <div class="graph">
                            <div class="row">
                                <div class="col-md-8">
                                    <img src="assets/images/resource/graph-4.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="content">
                            <div class="sec-title">
                                <h2>c)@lang('lang.LetterOfCredit')</h2>
                            </div>
                            <div class="text">
                                <strong>1) @lang('lang.SightLetterofCredit')</strong><br />
                                <strong>2) @lang('lang.UsanceLetterofCredit')</strong> <br />

                                @lang('lang.ALetterofcredit(LC)isa')
                            </div>
                        </div>
                        <div class="graph">
                            <div class="row">
                                <div class="col-md-8">
                                    <img src="assets/images/resource/graph-5.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
