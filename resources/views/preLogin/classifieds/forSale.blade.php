@extends('masterPage.classifieds.main')
@section('appTitle')
Cars
@stop
@section('content')
<!-- For Sale -->
<section class="for-sale-wrp">
    <div class="container">
        <div class="breadcrumb-box">
            <ul>
                <li><a href="#">Home</a></li>
                <li>For Sale</li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-9 col-sm-8">
                <h2>1,401,679 ads in Stuff for Sale</h2>

                <div class="sale-head">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <a href="#" class="btn-main"><i class="fa fa-bell"></i> Search alert set</a>
                        </div>
                        <div class="col-md-4 col-sm-4"></div>
                        <div class="col-md-4 col-sm-4">
                            <div class="srtby">
                                <select class="form-control">
                                    <option>Sort by</option>
                                    <option>Most recent first</option>
                                    <option>Price : Low to High</option>
                                    <option>Price : High to Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="add-wrpper-mini">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="left-sidebars">
                                <h3>Location</h3>

                                <form>
                                    <div class="form-group">
                                        <input type="text" name="" placeholder="Postcode or location" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="0.0001" selected="">
                                                Choose distance
                                            </option>
                                            <option value="1">
                                                + 1 mile
                                            </option>
                                            <option value="3">
                                                + 3 miles
                                            </option>
                                            <option value="5">
                                                + 5 miles
                                            </option>
                                            <option value="10">
                                                + 10 miles
                                            </option>
                                            <option value="15">
                                                + 15 miles
                                            </option>
                                            <option value="30">
                                                + 30 miles
                                            </option>
                                            <option value="50">
                                                + 50 miles
                                            </option>
                                            <option value="75">
                                                + 75 miles
                                            </option>
                                            <option value="100">
                                                + 100 miles
                                            </option>
                                            <option value="1000">
                                                Nationwide
                                            </option>
                                        </select>
                                    </div>
                                    <button class="btn-main">GO</button>
                                </form>

                                <div class="nearby-bx">
                                    <h4>United Kingdom <i class="fa fa-check"></i></h4>
                                    <ul class="inner-loc">
                                        <li><a href="#">England <span>1,103,310</span></a></li>
                                        <li><a href="#">England <span>1,103,310</span></a></li>
                                        <li><a href="#">England <span>1,103,310</span></a></li>
                                        <li><a href="#">England <span>1,103,310</span></a></li>
                                    </ul>
                                </div>

                                <h3>Category</h3>
                                <a href="#" class="all-sigbtn"><i class="fa fa-angle-left"></i> All Categories</a>

                                <div class="nearby-bx">
                                    <h4>United Kingdom <i class="fa fa-check"></i></h4>
                                    <ul class="inner-loc">
                                        <li><a href="#">England <span>1,103,310</span></a></li>
                                        <li><a href="#">England <span>1,103,310</span></a></li>
                                        <li><a href="#">England <span>1,103,310</span></a></li>
                                        <li><a href="#">England <span>1,103,310</span></a></li>
                                    </ul>
                                </div>

                                <form>
                                    <div class="form-group">
                                        <input type="text" name="" placeholder="Price" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="" placeholder="Min - Max" class="form-control">
                                    </div>
                                    <button class="btn-main">GO</button>
                                </form>

                                <div class="other-choicebx">
                                    <h3>Other options</h3>
                                    <div class="form-group">
                                        <input type="checkbox" id="ch1">
                                        <label for="ch1">Urgent ads <span>1,316</span></label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="ch2">
                                        <label for="ch2">Feature ads <span>6,359</span></label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="ch3">
                                        <label for="ch3">Ads with pictures <span>1,316</span></label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="ch4">
                                        <label for="ch4">Search title & description</label>
                                    </div>
                                </div>

                                <div class="new-challenge-bx">
                                    <h4>Ready for a new challenge?</h4>
                                    <p>From electrician to head chef, care assistant to courier, you'll find thousands of new opportunities on Jobs From Gumtree</p>

                                    <form>
                                        <div class="form-group">
                                            <input type="text" name="" placeholder="Enter role e.g. chef" class="form-control">
                                        </div>
                                        <button class="btn-main">Search Jobs</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="fevrite-listing-block add-listing-admn">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                                <div class="fev-pro-img">
                                                    <img src="/images/prod-img1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-8">
                                                <div class="fev-inf">
                                                    <a href="#">
                                                        <h4>EXPERIENCED SALES PEOPLE ONLY UNCAPPED COMMISSION</h4>
                                                    </a>
                                                    <h5 class="ad-bbxs"><span>Ad</span> www.smergers.com/investor/ma-advisors</h5>
                                                    <p>We have an opportunity for 25 experienced sales executives to join our rapidly growing team.</p>

                                                    <a href="#" class="btn-main">➤ Visit Website</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                                <div class="fev-pro-img">
                                                    <img src="/images/prod-img1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-8">
                                                <div class="fev-inf">
                                                    <a href="#">
                                                        <h4>EXPERIENCED SALES PEOPLE ONLY UNCAPPED COMMISSION</h4>
                                                    </a>
                                                    <h5 class="ad-bbxs"><span>Ad</span> www.smergers.com/investor/ma-advisors</h5>
                                                    <p>We have an opportunity for 25 experienced sales executives to join our rapidly growing team.</p>

                                                    <a href="#" class="btn-main">➤ Visit Website</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                                <div class="fev-pro-img">
                                                    <img src="/images/prod-img1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-8">
                                                <div class="fev-inf">
                                                    <a href="#">
                                                        <h4>EXPERIENCED SALES PEOPLE ONLY UNCAPPED COMMISSION</h4>
                                                    </a>
                                                    <h5 class="ad-bbxs"><span>Ad</span> www.smergers.com/investor/ma-advisors</h5>
                                                    <p>We have an opportunity for 25 experienced sales executives to join our rapidly growing team.</p>

                                                    <a href="#" class="btn-main">➤ Visit Website</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                                <div class="fev-pro-img">
                                                    <img src="/images/prod-img1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-8">
                                                <div class="fev-inf">
                                                    <a href="#">
                                                        <h4>EXPERIENCED SALES PEOPLE ONLY UNCAPPED COMMISSION</h4>
                                                    </a>
                                                    <h5 class="ad-bbxs"><span>Ad</span> www.smergers.com/investor/ma-advisors</h5>
                                                    <p>We have an opportunity for 25 experienced sales executives to join our rapidly growing team.</p>

                                                    <a href="#" class="btn-main">➤ Visit Website</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                                <div class="fev-pro-img">
                                                    <img src="/images/prod-img1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-8">
                                                <div class="fev-inf">
                                                    <a href="#">
                                                        <h4>EXPERIENCED SALES PEOPLE ONLY UNCAPPED COMMISSION</h4>
                                                    </a>
                                                    <h5 class="ad-bbxs"><span>Ad</span> www.smergers.com/investor/ma-advisors</h5>
                                                    <p>We have an opportunity for 25 experienced sales executives to join our rapidly growing team.</p>

                                                    <a href="#" class="btn-main">➤ Visit Website</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                                <div class="fev-pro-img">
                                                    <img src="/images/prod-img1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-8">
                                                <div class="fev-inf">
                                                    <a href="#">
                                                        <h4>EXPERIENCED SALES PEOPLE ONLY UNCAPPED COMMISSION</h4>
                                                    </a>
                                                    <h5 class="ad-bbxs"><span>Ad</span> www.smergers.com/investor/ma-advisors</h5>
                                                    <p>We have an opportunity for 25 experienced sales executives to join our rapidly growing team.</p>

                                                    <a href="#" class="btn-main">➤ Visit Website</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">

            </div>
        </div>
    </div>
</section>
<!-- End For Sale -->

@stop