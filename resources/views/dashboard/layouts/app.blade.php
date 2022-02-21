<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AAB | Administrator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
      ============================================ -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('BackEnd/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/font-awesome.min.css') }}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/nalika-icon.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('BackEnd/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('BackEnd/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/main.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('BackEnd/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('BackEnd/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('BackEnd/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

    {{-- Sidebar --}}
    @include('dashboard.layouts.sidebar')
    {{-- End Sidebar --}}    

    <div class="all-content-wrapper">
    
        {{-- Header --}}
        @include('dashboard.layouts.header')
        {{-- End Header --}}

        {{-- Main Content --}}
        @yield('content')
        {{-- End Main Content --}}

        
        {{-- Footer --}}
        @include('dashboard.layouts.footer')
        {{-- End Footer --}}

    </div>
    <!-- jquery
		============================================ -->
    <script src="{{ asset('BackEnd/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('BackEnd/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('BackEnd/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('BackEnd/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('BackEnd/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('BackEnd/js/calendar/fullcalendar-active.js') }}"></script>
	<!-- float JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('BackEnd/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('BackEnd/js/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('BackEnd/js/flot/flot-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('BackEnd/js/main.js') }}"></script>
      

</body>

</html>