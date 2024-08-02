<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>@yield('title') - Chowdhurani Ayurveda</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap Css -->
    <link href="{{asset('front-end/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- CSS Link-->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/swiper-bundle.min.css')}}" />
    <link href="{{asset('front-end/assets/css/style.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('front-end/assets/css/home.css')}}" />

{{--    product css --}}

    <link rel="stylesheet" href="{{asset('front-end/assets/css/products.css')}}" />
    <link rel="stylesheet" href="{{asset('front-end/assets/css/single-product.css')}}" />
    <link rel="stylesheet" href="{{asset('front-end/assets/css/nouislider.css')}}" />

    <!-- Fontawesome Kit About CSS -->
    <script src="{{asset('front-end/assets/js/fontawesome.js')}}"></script>
    <link rel="stylesheet" href="{{asset('front-end/assets/css/about.css')}}" />


    <link rel="stylesheet" href="{{asset('front-end/assets/css/contact.css')}}" />

    <!-- Fontawesome Kit -->
  <script src="{{asset('js/axios.min.js')}}"></script>
  <script src="{{asset('js/config.js')}}"></script>
</head>

<body>


  @yield('content')


  <!-- JAVASCRIPT -->
  <script src="{{asset('front-end/assets/js/jquery.js')}}"></script>
  <script src="{{asset('front-end/assets/js/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('front-end/assets/js/nouislider.min.js')}}"></script>
  <script src="{{asset('front-end/assets/js/hero-slider.js')}}"></script>
  <script src="{{asset('front-end/assets/js/app.js')}}"></script>
  <script src="{{asset('front-end/assets/js/meanmenu.js')}}"></script>
  <script src="{{asset('front-end/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front-end/assets/js/filter.js')}}"></script>
  <script src="{{asset('front-end/assets/js/fontawesome.js')}}"></script>
  <script src="{{asset('front-end/assets/js/back-to-btn.js')}}"></script>
  <script src="{{asset('front-end/assets/js/seller-info-tab.js')}}"></script>
  <script src="{{asset('front-end/assets/js/product-details-slider.js')}}"></script>
  <script src="{{asset('front-end/assets/js/product-details-share.js')}}"></script>
</body>




</body>

</html>
