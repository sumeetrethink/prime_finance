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
          data-bg="url('assets/images/background/image-20.jpg')"
        ></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
          <h1>Contact Us</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Contact</li>
          </ul>
        </div>
      </section>

      <!-- Contact Section Two -->
      <section class="contact-section-two">
        <br />
        <div class="contact-form-area">
          <div class="sec-title text-center">
            <div class="sub-title">Write Here</div>
            <h2>Get In Touch</h2>
          </div>
          <!-- Contact Form-->
          <div class="contact-form">
            <form action="{{url('contact')}}" method="post">
              @if (session()->has('msg-success'))
                <div class="alert alert-success" role="alert">
                   
                    {{ session('msg-success') }}
                </div>
                @endif
            
              @csrf
              <div class="row clearfix">
                <div class="col-md-6 form-group">
                  <label for="name">Enter your name</label>
                  <input
                    type="text"
                    name="username"
                    id="name"
                    placeholder="Enter name here......"
                    required=""
                  />
                  <i class="fas fa-user"></i>
                </div>

                <div class="col-md-6 form-group">
                  <label for="email">Enter your email</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter email here......"
                    required=""
                  />
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="col-md-6 form-group">
                  <label for="email">Enter your Phone</label>
                  <input
                    type="text"
                    name="phone"
                    id="email"
                    placeholder="Enter phone number here......"
                    required=""
                  />
                  <i class="fas fa-phone"></i>
                </div>

                <div class="col-md-12 form-group">
                  <label for="message">Enter your message</label>
                  <textarea
                    name="message"
                    id="message"
                    placeholder="Enter message here......"
                  ></textarea>
                  <i class="fas fa-edit"></i>
                </div>

                <div class="col-md-12 form-group">
                  <button
                    class="theme-btn btn-style-one"
                    type="submit"
                    name="submit-form"
                  >
                    <span class="btn-title">Get In Touch</span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      @endsection
    