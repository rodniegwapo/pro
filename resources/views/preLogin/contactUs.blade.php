@extends('masterPage.main')
@section('appTitle')
Contact Us
@stop

@section('content')
<!-- Banner -->
<section class="main-banner contact-banner">
    <div class="banner-info">
        <div class="container">
            <h1>We're here to help.</h1>
            <p>GET IN TOUCH</p>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Common Que -->
<section class="common-ques-wrp">
    <div class="container">
        <h2>Common Questions</h2>

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="que-bx">
                    <h4>nProHub Basics <a href="#">Read More ></a></h4>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="que-bx">
                    <h4>nProHub Basics <a href="#">Read More ></a></h4>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="que-bx">
                    <h4>nProHub Basics <a href="#">Read More ></a></h4>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="que-bx">
                    <h4>nProHub Basics <a href="#">Read More ></a></h4>
                </div>
            </div>
        </div>

        <a href="#" class="view-ar">View More Help Articles ></a>

        <hr>

        <div class="cnt-dt">
            <h2>Get More Support</h2>

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <a href="mailto:support@nProHubapp.com">
                        <div class="cnbx">
                            <img src="images/email-us.svg" alt="">
                            <h4>Email Us</h4>
                            <h6>support@nProHubapp.com</h6>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <a href="mailto:support@nProHubapp.com">
                        <div class="cnbx">
                            <img src="images/live-chat.svg" alt="">
                            <h4>Get Live Support</h4>
                            <h6>Start a Live Chat</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="address-list">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="main-add">
                        <h3>Lake Charles, LA</h3>
                        <p>844 Ryan St. Suite 300 Lake Charles, LA 70601</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="similer-add">
                        <h4>Lafayette, LA</h4>
                        <p>214 Jefferson St, Suite 200 Lafayette, LA 70501</p>
                    </div>
                    <div class="similer-add">
                        <h4>Lafayette, LA</h4>
                        <p>214 Jefferson St, Suite 200 Lafayette, LA 70501</p>
                    </div>
                    <div class="similer-add">
                        <h4>Lafayette, LA</h4>
                        <p>214 Jefferson St, Suite 200 Lafayette, LA 70501</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="similer-add">
                        <h4>Lafayette, LA</h4>
                        <p>214 Jefferson St, Suite 200 Lafayette, LA 70501</p>
                    </div>
                    <div class="similer-add">
                        <h4>Lafayette, LA</h4>
                        <p>214 Jefferson St, Suite 200 Lafayette, LA 70501</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Common Que -->

<!-- Driver -->
@include('components.becomeADriver')
<!-- End Driver -->

@stop