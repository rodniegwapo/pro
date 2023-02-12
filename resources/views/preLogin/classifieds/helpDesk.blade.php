@extends('masterPage.classifieds.main')
@section('appTitle')
Cars
@stop
@section('content')
<!-- Banner -->
<section class="main-banner">
    <div class="banner-info helpdesk-ban">
        <div class="container">
            <h1>nProads Help Desk</h1>

            <div class="form-group">
                <input type="text" name="" placeholder="Search by issue or keyword" class="form-control">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Help Tabs -->
<section class="help-tbs-wrp">
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#helptb1">Basics</a></li>
            <li><a data-toggle="tab" href="#helptb2">Payments & Promotions</a></li>
            <li><a data-toggle="tab" href="#helptb3">Technical Issues</a></li>
            <li><a data-toggle="tab" href="#helptb4">Policies</a></li>
            <li><a data-toggle="tab" href="#helptb5">Safety</a></li>
            <li><a data-toggle="tab" href="#helptb6">Contact Us</a></li>
        </ul>
    </div>
</section>
<!-- End Help Tabs -->

<!-- Details Block -->
<section class="main-detail-wrp">
    <div class="container-fluid">
        <div class="tab-content">
            <div id="helptb1" class="tab-pane fade in active">
                <div class="inner-help-wrp">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="help-left-bar">
                                <h2>Basics</h2>

                                <div class="faq-helps">
                                    <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingfour">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapsefne" aria-expanded="false" aria-controls="collapsefne"> What's New at nProads?</a>
                                                </h4>
                                            </div>
                                            <div id="collapsefne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfour">
                                                <div class="panel-body">
                                                    <p>What's Not Allowed on nProads?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Accounts & Profiles</a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <ul>
                                                        <li><a href="#">How to Create an Account</a></li>
                                                        <li><a href="#">How to Login & Logout</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Creating Ads</a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingfor">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapsefor" aria-expanded="false" aria-controls="collapsefor">Delivery</a>
                                                </h4>
                                            </div>
                                            <div id="collapsefor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfor">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading5">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapse5" aria-expanded="false" aria-controls="collapse5">Managing Ads</a>
                                                </h4>
                                            </div>
                                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading6">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapse6" aria-expanded="false" aria-controls="collapse6">Searching & Replying</a>
                                                </h4>
                                            </div>
                                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="help-left-bar helpdesk-right">
                                <h2>What's Not Allowed on nProads?</h2>

                                <p>nProads’s first priority is to ensure that our community remains safe for all members. We don’t allow the sale of anything illegal or dangerous. We also prohibit certain items at the request of our community. If we feel you’ve posted a banned item, we’ll ask you to take it down or remove it ourselves.</p>

                                <p>The list below details what can’t be posted on nProads, in alphabetical order:</p>

                                <h4>Adult-only</h4>

                                <ul>
                                    <li>Adult entertainment (like blue movies)</li>
                                    <li>Adult toys or other erotic products</li>
                                </ul>

                                <h4>Alcohol</h4>
                                <h4>Animal parts</h4>

                                <ul>
                                    <li>Including parts of protected species</li>
                                    <li>Ivory</li>
                                    <li><strong>Note:</strong> taxidermy is fine, unless it’s a protected animal</li>
                                </ul>

                                <h4>Animal traps</h4>
                                <ul>
                                    <li><strong>Note:</strong> Fish traps and pony traps (which are actually carts) are permitted</li>
                                </ul>

                                <h4>Botox and Dermal Fillers</h4>
                                <ul>
                                    <li>Including related equipment and services</li>
                                </ul>
                            </div>

                            <div class="helpfullbc">
                                <h4>Was this article helpful?</h4>
                                <ul>
                                    <li><a href="#">Yes</a></li>
                                    <li><a href="#">No</a></li>
                                </ul>
                            </div>

                            <div class="linked-blockers">
                                <h5>ARTICLES RELATED TO WHAT'S NOT ALLOWED ON nProads?</h5>

                                <ul>
                                    <li><a href="#">Pets Policies</a></li>
                                    <li><a href="#">Animals We Do Not Allow</a></li>
                                    <li><a href="#">Reporting an Ad</a></li>
                                    <li><a href="#">General Posting Policies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="helptb2" class="tab-pane fade">

            </div>
            <div id="helptb3" class="tab-pane fade">

            </div>
            <div id="helptb4" class="tab-pane fade">

            </div>
            <div id="helptb5" class="tab-pane fade">

            </div>
            <div id="helptb6" class="tab-pane fade">

            </div>
        </div>
    </div>
</section>
<!-- End Details Block -->

<!-- FAQ -->
<section class="faq-wrpper">
    <div class="container-fluid">
        <h2>Top FAQ</h2>

        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="faq-links">
                    <h4>Basics</h4>

                    <ul>
                        <li><a href="#">How to Post an Ad</a></li>
                        <li><a href="#">How to Delete an Ad</a></li>
                        <li><a href="#">Sending & Receiving Messages</a></li>
                        <li><a href="#">Profiles</a></li>
                        <li><a href="#">Searching Effectively</a></li>
                        <li><a href="#">Creating & Managing Alerts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="faq-links">
                    <h4>Payments & Promotions</h4>

                    <ul>
                        <li><a href="#">Are Ads on nProads Free?</a></li>
                        <li><a href="#">Cost of Promoting Ads</a></li>
                        <li><a href="#">Featured Ads</a></li>
                        <li><a href="#">Spotlight Feature</a></li>
                        <li><a href="#">Bump Up Feature</a></li>
                        <li><a href="#">Business Accounts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="faq-links">
                    <h4>Technical Issues</h4>

                    <ul>
                        <li><a href="#">Where Is My Ad?</a></li>
                        <li><a href="#">I Can't Edit My Ad</a></li>
                        <li><a href="#">My Ad was Removed</a></li>
                        <li><a href="#">I Can't Add Photos</a></li>
                        <li><a href="#">I Can't Find My Featured Ad</a></li>
                        <li><a href="#">Issues with the nProads App</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="faq-links">
                    <h4>Safety & Policies</h4>

                    <ul>
                        <li><a href="#">Trading During COVID-19</a></li>
                        <li><a href="#">Quick Safety Tips</a></li>
                        <li><a href="#">Reporting to the Police</a></li>
                        <li><a href="#">Safe Payments</a></li>
                        <li><a href="#">Pets Policies</a></li>
                        <li><a href="#">What's Not Allowed on nProads?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ -->
@stop