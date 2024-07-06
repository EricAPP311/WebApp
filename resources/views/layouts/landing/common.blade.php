<!--
=========================================================
* Argon Design System - v1.2.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/landing') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/logo.png">
    <title>
        {{ config('app.name', 'Laravel') }} - @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/landing') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets/landing') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('assets/landing') }}/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ asset('assets/landing') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/landing') }}/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
    @stack('style')
</head>

<body class="index-page">
    @include('sweetalert::alert')
    <!-- Navbar -->
    @include('layouts.landing.navbar')
    <!-- End Navbar -->
    @yield('content')
    @include('layouts.landing.footer')
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/landing') }}/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/landing') }}/js/core/popper.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/landing') }}/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/landing') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('assets/landing') }}/js/plugins/bootstrap-switch.js"></script>
    <script src="{{ asset('assets/landing') }}/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/landing') }}/js/plugins/moment.min.js"></script>
    {{-- <script src="{{ asset('assets/landing') }}/js/plugins/datetimepicker.js" type="text/javascript"></script>
    <script src="{{ asset('assets/landing') }}/js/plugins/bootstrap-datepicker.min.js"></script> --}}
    <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="{{ asset('assets/landing') }}/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
    <script>
        function scrollToDownload() {

            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    </script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-design-system-pro"
            });
    </script>
    @stack('script')
</body>

</html>
