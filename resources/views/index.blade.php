<!DOCTYPE html>
<html lang="en">
<!-- Designed by Zapio -->
<script type="text/javascript">
    BASE_URL = "<?php echo url(''); ?>";
</script>
<head>
    <meta charset="utf-8" />
    <title>Prime Finance Consultant</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- Responsive File -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- Color File -->
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet" />

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>
        @include('Layouts.nav')
        @yield('content')
        @include('Layouts.footer')
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fal fa-arrow-circle-up"></span>
    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/lazyload.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

<!-- Designed and developed by zapio -->

</html>
