@extends('masterPage.main')
@section('appTitle')
Food Delivery
@stop

@section('content')

<!-- Banner -->
<section class="main-banner">
    <div class="banner-info">
        <div class="container">
            <h1>Great <span>Local</span> Food Delivered</h1>

            <div class="form-group">
                <input type="text" name="" placeholder="What are you hungry for Lance?" class="form-control">
                <i class="fa fa-search"></i>
                <button>Find Food</button>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Seller Actions -->
<section class="seller-act">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="sell-bx">
                    <a href="#" class="btn-cmn"><img src="images/Schedule Delivery.png" alt=""></a>
                    <a href="#" class="btn-cmn"><img src="images/Schedule Delivery (3).png" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="sell-bx">
                    <a href="#" class="btn-cmn becomedriver"><img src="images/Schedule Delivery (1).png" alt=""></a>
                    <a href="#" class="btn-cmn postbtn"><img src="images/Schedule Delivery (2).png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Seller Actions -->

<!-- Offer Special -->
<div class="container">
    <section class="offer-special-wrp">
        <a href="#" class="btn-main">Learn More</a>
    </section>

    <div class="near-by-block">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="place-img">
                    <img src="images/place-img.jpg" alt="">
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="place-details">
                    <h4>Find food near you.</h4>
                    <p>Select an area below to browse great local food – or enter your address above and skip straight to the restaurants that are nearest you.</p>

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#ch1">Boutte</a></li>
                        <li><a data-toggle="tab" href="#ch2">Laplace</a></li>
                        <li><a data-toggle="tab" href="#ch3">New Orleans</a></li>
                        <li><a data-toggle="tab" href="#ch4">Westbank</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="details-places">
        <div class="tab-content">
            <div id="ch1" class="tab-pane fade in active">
                <div class="inner-places-ava">
                    <div class="plac-hed">
                        <h4>Near You</h4>
                        <p>BASED ON Boutte</p>
                    </div>

                    <div class="products-listing">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="see-all">See More Restaurants</a>
                    </div>
                </div>
            </div>
            <div id="ch2" class="tab-pane fade">
                <div class="inner-places-ava">
                    <div class="plac-hed">
                        <h4>Near You</h4>
                        <p>BASED ON Laplace</p>
                    </div>

                    <div class="products-listing">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="see-all">See More Restaurants</a>
                    </div>
                </div>
            </div>
            <div id="ch3" class="tab-pane fade">
                <div class="inner-places-ava">
                    <div class="plac-hed">
                        <h4>Near You</h4>
                        <p>BASED ON New Orleans</p>
                    </div>

                    <div class="products-listing">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="see-all">See More Restaurants</a>
                    </div>
                </div>
            </div>
            <div id="ch4" class="tab-pane fade">
                <div class="inner-places-ava">
                    <div class="plac-hed">
                        <h4>Near You</h4>
                        <p>BASED ON Westbank</p>
                    </div>

                    <div class="products-listing">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img3.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>

                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img2.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="product-bx comingson">
                                    <div class="prid-img-bx">
                                        <a href="#"><img src="images/prod-img4.jpg" alt=""></a>
                                        <a href="#" class="like-bt"><i class="fa fa-heart-o"></i></a>
                                        <h6>Coming Soon</h6>
                                    </div>
                                    <div class="pr-dt">
                                        <a href="#">
                                            <div class="prnm">
                                                <span>American ; Mexican</span>
                                                <h5>Hank's Supermarket</h5>
                                            </div>
                                        </a>
                                        <div class="pro-st">
                                            <span>Open</span>
                                            <h6>1.5 Mi</h6>
                                            <a href="#"><i class="fa fa-car"></i></a>
                                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="see-all">See More Restaurants</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Offer Special -->

<!-- Driver -->
@include('components.becomeADriver')
<!-- End Driver -->

@stop