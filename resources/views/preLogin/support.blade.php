@extends('masterPage.main')
@section('appTitle')
Support
@stop

@section('content')

<!-- Banner -->
<section class="main-banner contact-banner support-banner">
    <div class="banner-info">
        <div class="container">
            <div class="support-search">
                <input type="text" name="" placeholder="Search" class="form-control">
                <i class="fa fa-search"></i>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Support Part -->
<section class="suport-wrp">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <a href="#" class="suport-btn">Customer Support</a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="#" class="suport-btn">Partner Support</a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="#" class="suport-btn">Driver Support</a>
            </div>
        </div>

        <div class="recent-activity-wrp">
            <h4>Recent activity</h4>

            <ul>
                <li>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="mini-suip">
                                <a href="#">
                                    <h5>COMPLETING DELIVERIES</h5>
                                </a>
                                <p>Is there any Covid-19 impact on the driver experience?</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="msgvx">
                                <p>Article created 8 days ago <i class="fa fa-comment-o"></i> 0</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="mini-suip">
                                <a href="#">
                                    <h5>COMPLETING DELIVERIES</h5>
                                </a>
                                <p>Is there any Covid-19 impact on the driver experience?</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="msgvx">
                                <p>Article created 8 days ago <i class="fa fa-comment-o"></i> 0</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="mini-suip">
                                <a href="#">
                                    <h5>COMPLETING DELIVERIES</h5>
                                </a>
                                <p>Is there any Covid-19 impact on the driver experience?</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="msgvx">
                                <p>Article created 8 days ago <i class="fa fa-comment-o"></i> 0</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="mini-suip">
                                <a href="#">
                                    <h5>COMPLETING DELIVERIES</h5>
                                </a>
                                <p>Is there any Covid-19 impact on the driver experience?</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="msgvx">
                                <p>Article created 8 days ago <i class="fa fa-comment-o"></i> 0</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="mini-suip">
                                <a href="#">
                                    <h5>COMPLETING DELIVERIES</h5>
                                </a>
                                <p>Is there any Covid-19 impact on the driver experience?</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="msgvx">
                                <p>Article created 8 days ago <i class="fa fa-comment-o"></i> 0</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="mini-suip">
                                <a href="#">
                                    <h5>COMPLETING DELIVERIES</h5>
                                </a>
                                <p>Is there any Covid-19 impact on the driver experience?</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="msgvx">
                                <p>Article created 8 days ago <i class="fa fa-comment-o"></i> 0</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End Support Part -->

<!-- Driver -->
@include('components.becomeADriver')
<!-- End Driver -->

@stop