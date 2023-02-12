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
    <title>{{env('APP_TITLE')}} - @yield('appTitle')</title>
</head>

<body>

    <!-- Error Popup -->
    @include('components.noInternetPopup')
    <!-- End Error Popup -->

    <!-- Login Model -->
    @include('components.loginModal')
    <!-- End Login Model -->

    <!-- Location Popup -->
    @include('components.locationPopup')
    <!-- End Location Popup -->

    <div class="main-wrapper-block">
        <!-- Header -->
        @include('components.mainNav')
        <!-- End Header -->

        @yield('content')

        <!-- Footer -->
        @include('components.footer')
        <!-- End Footer -->
    </div>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>    
    <script type="text/javascript">
        $("#owl-popularhub").owlCarousel({
            autoplay: true,
            loop: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            autoplayHoverPause: false,
            nav: true,
            navText: true,
            dots: true,
            items: 4,
            margin: 30,
            responsiveClass: true,
            responsive: {
                1000: {
                    items: 4
                },
                650: {
                    items: 2
                },
                600: {
                    items: 2
                },
                550: {
                    items: 2
                },
                400: {
                    items: 1
                },
                460: {
                    items: 1
                },
                350: {
                    items: 1
                },
                300: {
                    items: 1
                }
            }
        });
        /* Loader Script */
         $('body').append("<div class='main-block'><a href='#' class='intro-banner-vdo-play-btn pinkBg' target='_blank'><span class='ripple pinkBg'></span><span class='ripple pinkBg'></span><span class='ripple pinkBg'></span></a></div>");
            $(window).on('load', function(){
              setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
            });
            function removeLoader(){
                $( ".main-block" ).fadeOut(500, function() {
                  // fadeOut complete. Remove the loading div
                  $( ".main-block" ).remove(); //makes page more lightweight 
              });  
            }
        /* Loader Script End */

    </script>
</body>

</html>