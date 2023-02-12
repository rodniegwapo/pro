@extends('masterPage.classifieds.main')
@section('appTitle')
Home
@stop
@section('content')
@include('components.classifieds.megaMenu')
<!-- Banner -->
<section class="main-banner inner-add-banner">
    <div class="banner-info">
        <div class="container">
            <h1>List the $5,800 of pre-loved items found in your Home</h1>

            <div class="add-search-box">
                <div class="add-back">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="dropdown com-drpbx">
                                <button class="btn-add-serch dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> All Categories <i class="fa fa-angle-down downa"></i></button>
                                <ul class="dropdown-menu maindop">
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cars & Vehicles <i class="fa fa-angle-down downa"></i></a>
                                        <ul class="dropdown-menu subdrop">
                                            <li><a href="#">Automotive Services</a></li>
                                            <li><a href="#">Caravans & Campervans</a></li>
                                            <li><a href="#">Cars, Vans & Utes</a></li>
                                            <li><a href="#">Construction Vehicles & Equipment</a></li>
                                            <li><a href="#">Mechanics & Garages</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cars & Vehicles <i class="fa fa-angle-down downa"></i></a>
                                        <ul class="dropdown-menu subdrop">
                                            <li><a href="#">Automotive Services</a></li>
                                            <li><a href="#">Caravans & Campervans</a></li>
                                            <li><a href="#">Cars, Vans & Utes</a></li>
                                            <li><a href="#">Construction Vehicles & Equipment</a></li>
                                            <li><a href="#">Mechanics & Garages</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cars & Vehicles <i class="fa fa-angle-down downa"></i></a>
                                        <ul class="dropdown-menu subdrop">
                                            <li><a href="#">Automotive Services</a></li>
                                            <li><a href="#">Caravans & Campervans</a></li>
                                            <li><a href="#">Cars, Vans & Utes</a></li>
                                            <li><a href="#">Construction Vehicles & Equipment</a></li>
                                            <li><a href="#">Mechanics & Garages</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cars & Vehicles <i class="fa fa-angle-down downa"></i></a>
                                        <ul class="dropdown-menu subdrop">
                                            <li><a href="#">Automotive Services</a></li>
                                            <li><a href="#">Caravans & Campervans</a></li>
                                            <li><a href="#">Cars, Vans & Utes</a></li>
                                            <li><a href="#">Construction Vehicles & Equipment</a></li>
                                            <li><a href="#">Mechanics & Garages</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="saerc-cl">
                                <input type="text" name="" class="form-control" placeholder="I'm looking for...">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="saerc-cl">
                                <input type="text" name="" class="form-control" placeholder="Location">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="dropdown com-drpbx">
                                <button class="btn-add-serch dropdown-toggle" data-toggle="dropdown">0km <i class="fa fa-angle-down downa"></i></button>
                                <ul class="dropdown-menu maindop minibxx">
                                    <li><a href="#">0km</a></li>
                                    <li><a href="#">1km</a></li>
                                    <li><a href="#">2km</a></li>
                                    <li><a href="#">3km</a></li>
                                    <li><a href="#">4km</a></li>
                                    <li><a href="#">5km</a></li>
                                    <li><a href="#">6km</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-8">
                            <button class="btn-main"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Add Details -->
<section class="add-deatils-wrp">
    <div class="container">
        <div class="classified-tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tb1">Homepage Gallery</a></li>
                <li><a data-toggle="tab" href="#tb2">Recently Viewed</a></li>
                <li><a data-toggle="tab" href="#tb3">Watchlist</a></li>
                <li><a data-toggle="tab" href="#tb4">Search Alerts</a></li>
            </ul>

            <div class="tab-content">
                <div id="tb1" class="tab-pane fade in active">
                    <div class="add-listing-block">
                        <div class="row">
                            <div class="col-sm-4 col-md-3">
                                <div class="class-add-box">
                                    <div class="add-img">
                                        <img src="/images/prod-img1.jpg" alt="">
                                        <div class="priclbl">
                                            <h4><i class="fa fa-usd"></i>3,900 <span>Negotible</span></h4>
                                        </div>
                                    </div>
                                    <div class="add-data">
                                        <a href="#">
                                            <h5>Concrete Labourer’s wanted</h5>
                                        </a>
                                        <h6>Henley Brook</h6>

                                        <div class="like-box">
                                            <div>
                                                <i class="heart fa fa-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="class-add-box">
                                    <div class="add-img">
                                        <img src="/images/prod-img2.jpg" alt="">
                                        <div class="priclbl">
                                            <h4><i class="fa fa-usd"></i>3,900 <span>Negotible</span></h4>
                                        </div>
                                    </div>
                                    <div class="add-data">
                                        <a href="#">
                                            <h5>Concrete Labourer’s wanted</h5>
                                        </a>
                                        <h6>Henley Brook</h6>

                                        <div class="like-box">
                                            <div>
                                                <i class="heart fa fa-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="class-add-box">
                                    <div class="add-img">
                                        <img src="/images/prod-img3.jpg" alt="">
                                        <div class="priclbl">
                                            <h4><i class="fa fa-usd"></i>3,900 <span>Negotible</span></h4>
                                        </div>
                                    </div>
                                    <div class="add-data">
                                        <a href="#">
                                            <h5>Concrete Labourer’s wanted</h5>
                                        </a>
                                        <h6>Henley Brook</h6>

                                        <div class="like-box">
                                            <div>
                                                <i class="heart fa fa-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="class-add-box">
                                    <div class="add-img">
                                        <img src="/images/prod-img4.jpg" alt="">
                                        <div class="priclbl">
                                            <h4><i class="fa fa-usd"></i>3,900 <span>Negotible</span></h4>
                                        </div>
                                    </div>
                                    <div class="add-data">
                                        <a href="#">
                                            <h5>Concrete Labourer’s wanted</h5>
                                        </a>
                                        <h6>Henley Brook</h6>

                                        <div class="like-box">
                                            <div>
                                                <i class="heart fa fa-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="class-add-box">
                                    <div class="add-img">
                                        <img src="/images/prod-img4.jpg" alt="">
                                        <div class="priclbl">
                                            <h4><i class="fa fa-usd"></i>3,900 <span>Negotible</span></h4>
                                        </div>
                                    </div>
                                    <div class="add-data">
                                        <a href="#">
                                            <h5>Concrete Labourer’s wanted</h5>
                                        </a>
                                        <h6>Henley Brook</h6>

                                        <div class="like-box">
                                            <div>
                                                <i class="heart fa fa-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="class-add-box">
                                    <div class="add-img">
                                        <img src="/images/prod-img3.jpg" alt="">
                                        <div class="priclbl">
                                            <h4><i class="fa fa-usd"></i>3,900 <span>Negotible</span></h4>
                                        </div>
                                    </div>
                                    <div class="add-data">
                                        <a href="#">
                                            <h5>Concrete Labourer’s wanted</h5>
                                        </a>
                                        <h6>Henley Brook</h6>

                                        <div class="like-box">
                                            <div>
                                                <i class="heart fa fa-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="class-add-box">
                                    <div class="add-img">
                                        <img src="/images/prod-img2.jpg" alt="">
                                        <div class="priclbl">
                                            <h4><i class="fa fa-usd"></i>3,900 <span>Negotible</span></h4>
                                        </div>
                                    </div>
                                    <div class="add-data">
                                        <a href="#">
                                            <h5>Concrete Labourer’s wanted</h5>
                                        </a>
                                        <h6>Henley Brook</h6>

                                        <div class="like-box">
                                            <div>
                                                <i class="heart fa fa-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="class-add-box">
                                    <div class="add-img">
                                        <img src="/images/prod-img1.jpg" alt="">
                                        <div class="priclbl">
                                            <h4><i class="fa fa-usd"></i>3,900 <span>Negotible</span></h4>
                                        </div>
                                    </div>
                                    <div class="add-data">
                                        <a href="#">
                                            <h5>Concrete Labourer’s wanted</h5>
                                        </a>
                                        <h6>Henley Brook</h6>

                                        <div class="like-box">
                                            <div>
                                                <i class="heart fa fa-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn-main"> See all</a>
                    </div>
                </div>
                <div id="tb2" class="tab-pane fade">

                </div>
                <div id="tb3" class="tab-pane fade">

                </div>
                <div id="tb4" class="tab-pane fade">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Add Details -->

<!-- Featured Categories -->
<section class="featured-cat-wrp">
    <div class="container">
        <h2>Featured Categories</h2>
        <h6>Browse through some of our most popular categories</h6>

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <div class="featured-box">
                        <img src="/images/featured-1.jpg" alt="">

                        <div class="fater-info">
                            <h3>Cars</h3>
                            <p>95,800 ads</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <div class="featured-box">
                        <img src="/images/featured-2.jpg" alt="">

                        <div class="fater-info hogard">
                            <h3>Home & Garden</h3>
                            <p>653,900 ads</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <div class="featured-box">
                        <img src="/images/featured-3.jpg" alt="">

                        <div class="fater-info jobst">
                            <h3>Jobs</h3>
                            <p>18,600 ads</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <div class="featured-box">
                        <img src="/images/featured-4.jpg" alt="">

                        <div class="fater-info freb">
                            <h3>Freebies</h3>
                            <p>18,700 ads</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Categories -->

<!-- Populer Items -->
<section class="populer-items-wrp">
    <div class="container">
        <ul>
            <li>Popular Items:</li>
            <li><a href="#">Caravan </a></li>
            <li><a href="#">Puppies </a></li>
            <li><a href="#">Fridge </a></li>
            <li><a href="#">Car </a></li>
            <li><a href="#">Puppy</a></li>
            <li><a href="#">Boat</a></li>
            <li><a href="#">Hilux</a></li>
            <li><a href="#">Dining</a></li>
            <li><a href="#">Table</a></li>
            <li><a href="#">Trailer</a></li>
            <li><a href="#">Camper</a></li>
            <li><a href="#">Trailer</a></li>
            <li><a href="#">Lounge</a></li>
            <li><a href="#">Ute</a></li>
            <li><a href="#">Washing Machine</a></li>
            <li><a href="#">Couch</a></li>
            <li><a href="#">Desk</a></li>
        </ul>
    </div>
</section>
<!-- End Populer Items -->

<!-- Sponcers -->
<section class="sponcer-wrp">
    <div id="owl-add-slide" class="owl-carousel">
        <div class="item">
            <div class="classified-add-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="add-info">
                                <h3>Looking to make some extra cash?</h3>
                                <p>Find out your car's value with our instant car valuation & sell where the buyers are.</p>

                                <a href="#" class="btn-main">Start now</a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <div class="add-img-spon">
                                <img src="/images/carval_large.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="classified-add-block" style="background: #211927;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="add-info">
                                <h3>Looking to make some extra cash?</h3>
                                <p>Find out your car's value with our instant car valuation & sell where the buyers are.</p>

                                <a href="#" class="btn-main">Start now</a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <div class="add-img-spon">
                                <img src="/images/generic_large.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Sponcers -->

<!-- Driver -->
@include('components.becomeADriver')
<!-- End Driver -->
@stop