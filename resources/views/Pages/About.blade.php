@extends('index')
@section('content')

      <!-- End Main Header -->

      <!--Search Popup-->
      <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn">
          <span class="flaticon-cancel"></span>
        </div>
        <div class="popup-inner">
          <div class="overlay-layer"></div>
          <div class="search-form">
            <form
              method="post"
              action="http://azim.commonsupport.com/Finandox/{{url('/')}}"
            >
              <div class="form-group">
                <fieldset>
                  <input
                    type="search"
                    class="form-control"
                    name="search-input"
                    value=""
                    placeholder="Search Here"
                    required
                  />
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
        <div
          class="image-layer lazy-image"
          data-bg="url('assets/images/background/image-19.jpg')"
        ></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
          <h1>About Us</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">About Us</li>
          </ul>
        </div>
      </section>

      <!-- About Section Two -->
      <section class="about-section-two">
        <div class="auto-container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="image-wrapper">
                <div class="image-one">
                  <img
                    class="lazy-image owl-lazy"
                    src="assets/images/resource/image-spacer-for-validation.png"
                    data-src="assets/images/resource/image-10.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-box">
                <div class="sec-title">
                  <div class="sub-title">@lang('lang.aboutUsHeading')</div>
                  <h2>@lang('lang.WeWorkWith')<br />@lang('lang.YouToAddress')</h2>
                  <div class="text">
                    @lang('lang.footerContent')<br /><br />
                    @lang('lang.AboutUsP2')<br /><br />
                    @lang('lang.AboutUsP3')
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


   

@endsection