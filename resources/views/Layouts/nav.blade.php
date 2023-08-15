  <!-- Main Header -->
  <style>
      .parent-li {
          position: relative;
      }

      .nested-ul {
          display: none;
          position: absolute;
          top: 100%;
          left: 0;
          width: 100%;
          background: rgba(184, 91, 29, 0.429);
          border-left: none
      }

      .parent-li:hover .nested-ul {
          display: block;
      }

      .parent-li:hover .nested-ul li {
          text-align: center
      }

      .parent-li:hover .nested-ul li:hover {
          background: rgba(184, 91, 29);
      }
  </style>
  <header class="main-header">
      <!-- Header Top -->
      <div class="header-top">
          <div class="auto-container">
              <div class="inner">
                  <div class="top-left">
                      <!--Logo-->
                      <div class="logo-box">
                          <div class="logo">
                              <a href="{{ url('/') }}"><img src="assets/images/logo.png" alt="" /></a>
                          </div>
                      </div>
                  </div>

                  <div class="top-middile">
                      <div class="language">
                          <div class="single-info">
                              <div class="text">Business Bay, Dubai, UAE</div>
                          </div>
                      </div>
                      <div class="contact-info">
                          <div class="single-info d-flex flex-column align-items-center">
                              <div class="d-flex align-items-center">
                                  <a href="tel:+971589776626" style="color:white" class="text"><i
                                          class="flaticon-call-1 pr-3" style="font-size: 18px;font-weight: bold"></i>
                                      +971 589 776 626</a>
                              </div>
                              <div class="d-flex align-items-center">
                                  <a href="tel:+971589776626" style="color: white" class="text"><i
                                          class="flaticon-whatsapp  pr-3"
                                          style="font-size: 18px;font-weight: bold;color:#25D366"></i> +971 589 776
                                      626</a>
                              </div>

                          </div>
                          <div class="single-info">
                              <div class="icon-box"><i class="flaticon-email-4"></i></div>
                              <div class="text">Email Address</div>
                              <h4>
                                  <a href="mailto:info@theprimefinance.com">info@theprimefinance.com</a>
                              </h4>
                          </div>
                      </div>
                  </div>

                  <div class="top-right">
                      <a href="{{ url('contact') }}" class="theme-btn btn-style-two"><span class="btn-title">Get A
                              Quote</span></a>
                  </div>
              </div>
          </div>
      </div>

      <!-- Header Upper -->
      <div class="header-upper">
          <div class="auto-container">
              <div class="inner-container">
                  <!--Nav Box-->
                  <div class="nav-outer clearfix">
                      <!--Mobile Navigation Toggler-->
                      <div class="mobile-nav-toggler">
                          <span class="icon fal fa-bars"></span>
                      </div>

                      <!-- Main Menu -->
                      <nav class="main-menu navbar-expand-md navbar-light">
                          <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                              <ul class="navigation clearfix">
                                  <li><a href="{{ url('') }}">Home</a></li>
                                  <li><a href="{{ url('/about') }}">About Us</a></li>
                                  <li class="dropdown">
                                      <a href="">Services</a>
                                      <ul>
                                          <li>
                                              <a href="{{ url('trade-finance') }}">Trade Finance</a>
                                          </li>
                                          <li>
                                              <a href="{{ url('mortgage-finance') }}">Mortgage Finance
                                              </a>
                                          </li>
                                          <li>
                                              <a href="{{ url('business-loan') }}">Business Loan </a>
                                          </li>
                                          <li>
                                              <a href="{{ url('Equipment-Machinery') }}">Equipment and Machinery
                                              </a>
                                          </li>
                                          <li>
                                              <a href="{{ url('Trade-Credit-Insurance') }}">Trade Credit Insurance
                                              </a>
                                          </li>
                                      </ul>
                                  </li>

                                  <li><a href="{{ url('contact') }}">Contact</a></li>
                              </ul>
                          </div>
                      </nav>
                      <!-- Main Menu End-->

                      <ul class="social-links clearfix">
                          <li>
                              <a
                                  href="https://www.linkedin.com/in/the-prime-trade-finance-banking-consulting-06341a192">
                                  <span class="fab fa-linkedin-in"></span>
                              </a>
                          </li>
                          <li class="parent-li">
                              <a href="#">
                                  Lang
                                  <ul class="nested-ul">
                                      <li onclick="handleLanguage('en')" style="margin: 0;padding:0">English</li>
                                      <li onclick="handleLanguage('rus')" style="margin: 0;padding:0">Russian</li>
                                      <li onclick="handleLanguage('chinese')" style="margin: 0;padding:0">Chinese</li>
                                  </ul>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!--End Header Upper-->

      <!-- Sticky Header  -->
      <div class="sticky-header">
          <div class="auto-container clearfix">
              <!--Logo-->
              <div class="logo pull-left">
                  <a href="{{ url('/') }}" title=""><img src="assets/images/sticky-logo.png" alt=""
                          title="" /></a>
              </div>
              <!--Right Col-->
              <div class="pull-right">
                  <!-- Main Menu -->
                  <nav class="main-menu clearfix">
                      <!--Keep This Empty / Menu will come through Javascript-->
                  </nav>
                  <!-- Main Menu End-->
              </div>
          </div>
      </div>
      <!-- End Sticky Menu -->

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
          <div class="menu-backdrop"></div>
          <div class="close-btn">
              <span class="icon flaticon-cancel"></span>
          </div>

          <nav class="menu-box">
              <div class="nav-logo">
                  <a href="{{ url('') }}"><img src="assets/images/logo.png" alt="" title="" /></a>
              </div>
              <div class="menu-outer">
                  <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
              </div>
              <!--Social Links-->
              <div class="social-links">
                  <ul class="clearfix">
                      <li>
                          <a href="https://www.linkedin.com/in/the-prime-trade-finance-banking-consulting-06341a192"><span
                                  class="fab fa-linkedin-in"></span></a>
                      </li>
                      <!-- <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li> -->
                  </ul>
              </div>
          </nav>
      </div>
      <!-- End Mobile Menu -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
          function handleLanguage(language) {
              let currentURL = window.location.origin + window.location.pathname;
              let url = currentURL + "?lng=" + language;
              window.location.href = url;
          }
      </script>
  </header>
  <!-- End Main Header -->
