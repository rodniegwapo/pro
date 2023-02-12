@extends('masterPage.main')
@section('appTitle')
Home
@stop
@section('content')
<!-- Banner -->
<section class="main-banner">
    <div class="banner-info">
        <div class="container">
            <h1>Great <span>Local</span> Materials Delivered</h1>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Seller Actions -->
<section class="seller-act">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="sell-bx">
                    <a href="#" class="btn-cmn"><img src="images/Schedule Delivery.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="sell-bx">
                    <a href="classifieds" class="btn-cmn"><img src="images/processed (2).jpeg" alt=""></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="sell-bx">
                    <a href="#" class="btn-cmn"><img src="images/Schedule Delivery (3).png" alt=""></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="sell-bx">
                    <a href="#" class="btn-cmn becomedriver"><img src="images/Schedule Delivery (1).png" alt=""></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="sell-bx">
                    <a href="#" class="btn-cmn postbtn"><img src="images/Schedule Delivery (2).png" alt=""></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="sell-bx">
                    <a href="#" class="btn-cmn postbtn"><img src="images/processed.jpeg" alt=""></a>
                </div>
            </div>
            <!-- <div class="col-md-6 col-sm-6">
                        <div class="sell-bx">
                            <a href="#" class="btn-cmn"><img src="images/Schedule Delivery.png" alt=""></a>
                            <a href="#" class="btn-cmn"><img src="images/Schedule Delivery (3).png" alt=""></a>
                            <a href="#" class="btn-cmn"><img src="images/processed (2).jpeg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="sell-bx">
                            <a href="#" class="btn-cmn becomedriver"><img src="images/Schedule Delivery (1).png" alt=""></a>
                            <a href="#" class="btn-cmn postbtn"><img src="images/Schedule Delivery (2).png" alt=""></a>
                            <a href="#" class="btn-cmn postbtn"><img src="images/processed.jpeg" alt=""></a>
                        </div>
                    </div> -->
        </div>
    </div>
</section>
<!-- End Seller Actions -->

<!-- More Eat -->
<section class="more-eat-wrp home-content__marketing">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div class="marketing-hero__devices">
                    <div class="device main">
                        <div class="device__wraper">
                            <img src="images/light.png" width="300" alt="iphone mock" class="device__shell">
                            <div class="device__inner">
                                <img src="images/search.png" width="330" alt="searching screen" class="device__screen">
                            </div>
                        </div>
                    </div>
                    <div class="device one">
                        <img src="images/hero-sub-01.png" width="250" alt="recent orders screen" class="device__secondary">
                    </div>
                    <div class="device two">
                        <img src="images/hero-sub-02.png" width="220" alt="my favorites screen" class="device__secondary">
                    </div>
                    <div class="device three">
                        <img src="images/hero-sub-03.png" width="190" alt="restaurant list screen" class="device__secondary">
                    </div>
                    <div class="device mobile">
                        <img src="images/hero-sub-03.png" width="150" alt="restaurant list screen" class="device__secondary">
                        <!-- <img src="images/hero-mobile.png" width="150" alt="restaurant list screen" class="device__secondary"> -->
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="mob-cnt">
                    <h4>Forgot Something?</h4>
                    <a href="how-it-works.html" class="btn-main">How it works</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End More Eat -->

<!-- How to Order -->
<section class="howto-order-wrp">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="how-dt">
                    <h4>Order How You Want</h4>
                    <p>Delivery & Carryout. Individual & Group Orders. No Minimums. Flat Delivery Fee.</p>
                    <a href="#">Start My Order <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="home-content__marketing">
                    <div class="order-how__devices">
                        <div class="Plx Plx--active Plx--in Plx--in-0 " style="transform: translateY(18.618px);">
                            <div class="device device-one">
                                <img src="images/device-shell.png" alt="iphone mock" class="device__shell">
                                <img src="images/order-1.png" alt="" class="device__screen small">
                            </div>
                        </div>
                        <div class="Plx Plx--active Plx--in Plx--in-0 " style="transform: translateY(10.385px);">
                            <div class="device--center">
                                <div class="device">
                                    <img src="images/device-shell.png" alt="iphone mock" class="device__shell">
                                    <img src="images/order-2.png" alt="" class="device__screen small">
                                </div>
                                <div class="device">
                                    <img src="images/device-shell.png" alt="iphone mock" class="device__shell">
                                    <img src="images/search-angle-2-x.jpg" alt="nProHub iPhone app search" class="device__screen small">
                                </div>
                            </div>
                        </div>
                        <div class="Plx Plx--active Plx--in Plx--in-0 " style="transform: translateY(18.618px);">
                            <div class="device device--three">
                                <img src="images/device-shell.png" alt="iphone mock" class="device__shell">
                                <img src="images/order-3.png" alt="nProHub iPhone app restaurants" class="device__screen small">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End How to Order -->

<!-- How to Order -->
<section class="howto-order-wrp">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div class="home-content__marketing imgbx">
                    <img src="images/img1.png" alt="">
                </div>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="how-dt">
                    <h4>Order What You Want</h4>
                    <p>Explore great local supplier in your area. Browse professionally designed websites.</p>
                    <a href="#">Explore My Options <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="howto-order-wrp">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="how-dt">
                    <h4>Order Worry-free</h4>
                    <p>From the kitchen to your location from your favorite stores and we can deliver and save your time, we have an entire team dedicated to your order. Chat with us instantly via our live chat support.</p>
                    <a href="#">Meet Our Team <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="home-content__marketing imgbx">
                    <img src="images/img2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="howto-order-wrp">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div class="client-list-wrp">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="testmin-bx">
                                <h3><img src="images/steamboat-bills.jpg" alt=""> Steamboat Bills</h3>
                                <p>“We would like to extend a sincere thank you to you and your staff for the incredible job you do. We are thoroughly impressed and your staff did a wonderful job of taking care of our every need. You exceeded our highest expectations!”</p>

                                <h6>Katherine – Owner</h6>
                            </div>

                            <div class="testmin-bx">
                                <h3><img src="images/steamboat-bills.jpg" alt=""> Steamboat Bills</h3>
                                <p>“We would like to extend a sincere thank you to you and your staff for the incredible job you do. We are thoroughly impressed and your staff did a wonderful job of taking care of our every need. You exceeded our highest expectations!”</p>

                                <h6>Katherine – Owner</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 rightbar">
                            <div class="testmin-bx">
                                <h3><img src="images/steamboat-bills.jpg" alt=""> Steamboat Bills</h3>
                                <p>“We would like to extend a sincere thank you to you and your staff for the incredible job you do. We are thoroughly impressed and your staff did a wonderful job of taking care of our every need. You exceeded our highest expectations!”</p>

                                <h6>Katherine – Owner</h6>
                            </div>

                            <div class="testmin-bx">
                                <h3><img src="images/steamboat-bills.jpg" alt=""> Steamboat Bills</h3>
                                <p>“We would like to extend a sincere thank you to you and your staff for the incredible job you do. We are thoroughly impressed and your staff did a wonderful job of taking care of our every need. You exceeded our highest expectations!”</p>

                                <h6>Katherine – Owner</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="how-dt">
                    <h4>You don't have to stop</h4>
                    <p>Reach more customers with nProHub Delivery Drop off Service. See why thousands of great local contractors choose nProHub.</p>
                    <!-- <a href="#">Grow Your Business <i class="fa fa-angle-right"></i></a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="howto-order-wrp">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="how-dt">
                    <h4>Drive For nProHub</h4>
                    <a href="#">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="home-content__marketing">
                    <img src="images/img3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End How to Order -->

<!-- Populer Hubs -->
<section class="popular-hubs-wrp">
    <div class="container">
        <h2>Most Popular Suppliers near you</h2>

        <div id="owl-popularhub" class="owl-carousel">
            <div class="item">
                <div class="pop-hub-box">
                    <div class="pop-img">
                        <img src="images/prod-img1.jpg" alt="">
                    </div>
                    <div class="pop-dt">
                        <h4>Papa's John Hubs</h4>
                        <p>Repair <span></span> Home Service <span></span> Like New</p>
                        <ul>
                            <li>Open at 10:00 AM</li>
                            <li>4.7 <i class="fa fa-star"></i> (14)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="pop-hub-box">
                    <div class="pop-img">
                        <img src="images/prod-img2.jpg" alt="">
                    </div>
                    <div class="pop-dt">
                        <h4>Papa's John Hubs</h4>
                        <p>Repair <span></span> Home Service <span></span> Like New</p>
                        <ul>
                            <li>Open at 10:00 AM</li>
                            <li>4.7 <i class="fa fa-star"></i> (14)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="pop-hub-box">
                    <div class="pop-img">
                        <img src="images/prod-img1.jpg" alt="">
                    </div>
                    <div class="pop-dt">
                        <h4>Papa's John Hubs</h4>
                        <p>Repair <span></span> Home Service <span></span> Like New</p>
                        <ul>
                            <li>Open at 10:00 AM</li>
                            <li>4.7 <i class="fa fa-star"></i> (14)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="pop-hub-box">
                    <div class="pop-img">
                        <img src="images/prod-img2.jpg" alt="">
                    </div>
                    <div class="pop-dt">
                        <h4>Papa's John Hubs</h4>
                        <p>Repair <span></span> Home Service <span></span> Like New</p>
                        <ul>
                            <li>Open at 10:00 AM</li>
                            <li>4.7 <i class="fa fa-star"></i> (14)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="pop-hub-box">
                    <div class="pop-img">
                        <img src="images/prod-img1.jpg" alt="">
                    </div>
                    <div class="pop-dt">
                        <h4>Papa's John Hubs</h4>
                        <p>Repair <span></span> Home Service <span></span> Like New</p>
                        <ul>
                            <li>Open at 10:00 AM</li>
                            <li>4.7 <i class="fa fa-star"></i> (14)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="pop-hub-box">
                    <div class="pop-img">
                        <img src="images/prod-img2.jpg" alt="">
                    </div>
                    <div class="pop-dt">
                        <h4>Papa's John Hubs</h4>
                        <p>Repair <span></span> Home Service <span></span> Like New</p>
                        <ul>
                            <li>Open at 10:00 AM</li>
                            <li>4.7 <i class="fa fa-star"></i> (14)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Populer Hubs -->

<!-- Driver -->
@include('components.becomeADriver')
<!-- End Driver -->
@stop