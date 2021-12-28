<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Span </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link rel="icon" href="{{ asset('sty/assets/img/logo2.png') }}" type="image/gif">
    <link href="{{ asset('sty/assets/img/logo2.png') }}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="sty/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="sty/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="sty/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="sty/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="sty/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="sty/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="sty/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="sty/assets/css/style.css" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: Arsha - v4.3.0
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>

@if (Route::current()->uri() != 'register' && Route::current()->uri() != 'login')

        @include('layouts.navbarhome')    
@else
  <style>
     input{
        margin-bottom: 10px;
    }
</style>  

@endif

@yield('content')

@if (Route::current()->uri() != 'register' && Route::current()->uri() != 'login')
        @include('layouts.footer')
@endif
   


    
    

    

</body>

<!-- Vendor JS Files -->
<script src="sty/assets/vendor/aos/aos.js"></script>
<script src="sty/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="sty/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="sty/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="sty/assets/vendor/php-email-form/validate.js"></script>
<script src="sty/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="sty/assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="sty/assets/js/main.js"></script>

@yield('scripts')

</html>
