@extends('masterPage.main')
@section('appTitle')
Profile
@stop

@section('content')


<!-- Profile -->
<section class="profile-wrp">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-5">
                <div class="left-bar-profile">
                    <div class="profile-box">
                        <div class="pro-img">
                            <img src="/images/user_profiles/{{ Session::get('profileImage') }}" onerror="this.src='/images/user_profiles/watt-avatar.png'" alt="">
                        </div>
                        <div class="pro-nm">
                            <h4>{{ Session::get('firstName') }}</h4>
                            <p>{{ Session::get('email') }}</p>
                        </div>

                        <a href="javascript:void(0);" data-toggle="modal" data-target="#add-profil" class="editbtn">Edit</a>
                    </div>

                    <div class="editable-list">
                        <ul>
                            <li>
                                <h5><i class="fa fa-phone"></i> PHONE NUMBERS</h5>
                                <div class="viewbx">
                                    <p><span>635165556</span> 216-355-6516</p>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#add-numberpop">Edit</a>
                                </div>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#add-numberpop"><i class="fa fa-plus-circle"></i> Add a Phone Number</a>
                            </li>
                            <li>
                                <h5><i class="fa fa-home"></i> ADDRESSES</h5>
                                <div class="viewbx">
                                    <p><span>OFFice</span> Lore soem dsiour ofjkapfj</p>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#add-adders">Edit</a>
                                </div>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#add-adders"><i class="fa fa-plus-circle"></i> Add a Address</a>
                            </li>
                            <li>
                                <h5><i class="fa fa-credit-card-alt"></i> PAYMENT METHODS</h5>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#add-payment"><i class="fa fa-plus-circle"></i> Add a Payment Method</a>
                            </li>
                        </ul>

                        <a href="#" class="trubtn">Having Trouble With Your Order?</a>

                        <a href="#" class="fb-btn"><i class="fa fa-facebook-official"></i> Connect with Facebook</a>

                        <div class="roglbc">
                            <h6>Send Me Promos & News</h6>

                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <a href="#" class="logbtn">Log Out</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7">
                <div class="right-profile">
                    <div class="right-header">
                        <div class="row">
                            <div class="col-md-8 col-sm-7">
                                <div class="tabs-bx">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#home">My Favorites</a></li>
                                        <li><a data-toggle="tab" href="#menu1">My Recent Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <div class="search-bx">
                                    <input type="text" name="" placeholder="Search Favorite Restaurants" class="form-control">
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="innner-detailswr">
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="cmn-box">
                                    <div class="products-listing">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                                <div class="product-bx comingson">
                                                    <div class="prid-img-bx">
                                                        <a href="#"><img src="images/prod-img1.jpg" alt=""></a>
                                                        <a href="#" class="like-bt"><i class="fa fa-heart"></i></a>
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
                                                        <a href="#" class="like-bt"><i class="fa fa-heart"></i></a>
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
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="cmn-box">
                                    <div class="not-found-bx">
                                        <img src="images/no-favorites.svg" alt="">
                                        <h4>You Know What You Want</h4>
                                        <p>Save yourself some time by adding your favorite restaurants here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Profile -->

<!-- Driver -->
@include('components.becomeADriver')
<!-- End Driver -->

@stop