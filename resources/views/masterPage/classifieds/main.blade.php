<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="/css/animate.css" /> -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
    <title>{{env('CLASSFIEDS_ADD_APP_TITLE')}} - @yield('appTitle')</title>
</head>
<body>
    
    <div class="main-wrapper-block">
        <!-- Header -->
        @include('components.classifieds.mainNav')
        
        <!-- End Header -->

        @yield('content')
        
        <!-- Footer -->
        @include('components.classifieds.footer')
        <!-- End Footer -->
    </div>
    <script type="text/javascript" src="/js/jquery.min.js"></script> 
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script> 
    <script type="text/javascript">
        $("#owl-add-slide").owlCarousel({
            autoplay:true,
            loop:true,
            autoplayTimeout:5000,
            smartSpeed: 1000,
            autoplayHoverPause:false,
            nav: true,
            navText:true,
            dots:false,
            items:1,
            margin:0                                                    
        }); 

        $(".heart.fa").click(function() {
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    </script>
</body>
</html>