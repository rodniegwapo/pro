@extends('masterPage.main')
@section('appTitle')
How It Works
@stop

@section('content')

<!-- Video Popup -->
<div id="videopop" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/dNNCGRhJmCU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- Video Popup -->

<!-- Video Banner -->
<section class="video-banner">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#videopop"><img src="images/icon-play.svg" alt=""></a>
</section>
<!-- End Video Banner -->

<!-- Work -->
<section class="work-wrp">
    <div class="container-fluid">
        <ul>
            <li>
                <div class="inn-erdt">
                    <h4>How It Works</h4>
                    <p>nProHub was designed with professional like you in mind. Instead of having to leave the site for much need parts, simply schedule us to bring the missing items to you. You can continuing working and save time and money by having us drop off the supplies you need to finish your task. Our user-friendly mobile and desktop ordering platforms make browsing great local suppliers, and paying securely from your phone or computer easier than ever.</p>
                    <a href="#" class="btn-main">Start Pickup</a>
                </div>
            </li>
            <li>
                <div class="img-wrok">
                    <img src="images/video-still-02.jpg" alt="">
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- End Work -->

<!-- Togather Man -->
<section class="togather-man">
    <h1>Together We Win</h1>
</section>

<section class="work-wrp spocer-wrp">
    <div class="container-fluid">
        <ul>
            <div class="row">
                <li class="col-md-6 col-sm-6">
                    <div class="inn-erdt">
                        <div class="imgbx-sg">
                            <a href="#"><img src="images/spo1.jpg" alt=""></a>
                        </div>
                        <h4>Louisiana Entertainment</h4>
                        <p>Louisiana Economic Development is responsible for strengthening the state's business environment and creating a more vibrant Louisiana economy. nProHub is one of many Louisiana-based businesses developed with support from Louisiana Economic Development’s Office of Entertainment Industry Development.</p>
                    </div>
                </li>
                <li class="col-md-6 col-sm-6">
                    <div class="inn-erdt">
                        <div class="imgbx-sg">
                            <a href="#"><img src="images/spo2.png" alt=""></a>
                        </div>
                        <h4>Eat Fit</h4>
                        <p>Ochsner Eat Fit combines the community’s passion for good food with their zest for life and enjoying time with family and friends. The program encourages local chefs to offer healthy – and flavorful – options for diners who want to eat clean and maintain a healthy lifestyle. Enjoy healthy dining options more conveniently by looking for the Eat Fit seal on your favorite local nProHub restaurants.</p>
                    </div>
                </li>
            </div>

            <div class="row">
                <li class="col-md-6 col-sm-6">
                    <div class="inn-erdt">
                        <div class="imgbx-sg">
                            <a href="#"><img src="images/spo3.png" alt=""></a>
                        </div>
                        <h4>Opportunity Machine</h4>
                        <p>The Opportunity Machine is an initiative of Lafayette Economic Development Authority developed to grow business and entrepreneurship, create quality jobs, economic diversity, and prosperity in the Greater Lafayette/Acadiana region.</p>
                    </div>
                </li>
                <li class="col-md-6 col-sm-6">
                    <div class="inn-erdt">
                        <div class="imgbx-sg">
                            <a href="#"><img src="images/spo4.jpg" alt=""></a>
                        </div>
                        <h4>Seed Center</h4>
                        <p>The SEED Center Business Incubator serves as the economic catalyst to facilitate the development and sustainability of early-stage ventures and existing businesses. Business Incubators such as the SEED Center Business Incubator, reduce the risk of small business failures and foster growth in communities. They provide companies (like nProHub) affordable office space and an array of targeted resources and services.</p>
                    </div>
                </li>
            </div>

            <div class="row">
                <li class="col-md-offset-3 col-md-6 col-sm-6">
                    <div class="inn-erdt">
                        <div class="imgbx-sg">
                            <a href="#"><img src="images/spo5.jpg" alt=""></a>
                        </div>
                        <h4>Lafayette Economic Development Authority (LEDA)</h4>
                        <p>The Lafayette Economic Development Authority (LEDA) works with businesses as they make decisions to start, expand or relocate to Lafayette, Louisiana. Through innovative collaborations with business, government and education, LEDA strives to grow the community’s business base for future development and diversification.</p>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</section>
<!-- End Togather Man -->

<!-- Driver -->
@include('components.becomeADriver')
<!-- End Driver -->

@stop