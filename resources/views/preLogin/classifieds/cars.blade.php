@extends('masterPage.classifieds.main')
@section('appTitle')
Cars
@stop
@section('content')
<!-- Inner Banner -->
<section class="inner-banner-carpg">
    <div class="ibner-centbx">
        <div class="container">
            <h1>Find Cars for Sale</h1>
            <p>Search over 160,000 ads on the UK’s local motors marketplace *</p>
        </div>
    </div>
</section>
<!-- End Inner Banner -->

<section class="filtwer-mall">
    <div class="container">
        <div class="filter-block">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <label>Make</label>
                        <select class="form-control">
                            <option>Select make</option>
                            <option value="">Any</option>
                            <option value="abarth">Abarth</option>
                            <option value="ac">AC</option>
                            <option value="aixam">Aixam</option>
                            <option value="alfa_romeo">Alfa Romeo</option>
                            <option value="aston_martin">Aston Martin</option>
                            <option value="audi">Audi</option>
                            <option value="austin">Austin</option>
                            <option value="bentley">Bentley</option>
                            <option value="bmc">BMC</option>
                            <option value="bmw">BMW</option>
                            <option value="bristol">Bristol</option>
                            <option value="cadillac">Cadillac</option>
                            <option value="caterham">Caterham</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="chrysler">Chrysler</option>
                            <option value="citroen">Citroen</option>
                            <option value="corvette">Corvette</option>
                            <option value="dacia">Dacia</option>
                            <option value="daewoo">Daewoo</option>
                            <option value="daf_trucks">DAF Trucks</option>
                            <option value="daihatsu">Daihatsu</option>
                            <option value="daimler">Daimler</option>
                            <option value="dodge">Dodge</option>
                            <option value="ds">DS</option>
                            <option value="ferrari">Ferrari</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="great_wall">Great Wall</option>
                            <option value="honda">Honda</option>
                            <option value="hummer">Hummer</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="infiniti">Infiniti</option>
                            <option value="isuzu">Isuzu</option>
                            <option value="isuzu_trucks">Isuzu Trucks</option>
                            <option value="iveco">Iveco</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="jeep">Jeep</option>
                            <option value="jensen">Jensen</option>
                            <option value="kia">Kia</option>
                            <option value="ktm">KTM</option>
                            <option value="lada">Lada</option>
                            <option value="lamborghini">Lamborghini</option>
                            <option value="lancia">Lancia</option>
                            <option value="land_rover">Land Rover</option>
                            <option value="ldv">LDV</option>
                            <option value="lexus">Lexus</option>
                            <option value="lotus">Lotus</option>
                            <option value="lti">LTI</option>
                            <option value="marcos">Marcos</option>
                            <option value="marlin">Marlin</option>
                            <option value="maserati">Maserati</option>
                            <option value="mazda">Mazda</option>
                            <option value="mclaren">Mclaren</option>
                            <option value="mercedes_benz">Mercedes-Benz</option>
                            <option value="mg">MG</option>
                            <option value="mg_motor_uk">MG Motor UK</option>
                            <option value="mia">MIA</option>
                            <option value="microcar">Microcar</option>
                            <option value="mini">Mini</option>
                            <option value="mitsubishi">Mitsubishi</option>
                            <option value="mitsubishi_fuso">Mitsubishi Fuso</option>
                            <option value="morgan">Morgan</option>
                            <option value="nissan">Nissan</option>
                            <option value="noble">Noble</option>
                            <option value="opel">Opel</option>
                            <option value="perodua">Perodua</option>
                            <option value="peugeot">Peugeot</option>
                            <option value="pgo">PGO</option>
                            <option value="piaggio">Piaggio</option>
                            <option value="porsche">Porsche</option>
                            <option value="proton">Proton</option>
                            <option value="reliant">Reliant</option>
                            <option value="renault">Renault</option>
                            <option value="renault_trucks">Renault Trucks</option>
                            <option value="rolls_royce">Rolls-Royce</option>
                            <option value="rover">Rover</option>
                            <option value="saab">Saab</option>
                            <option value="scania">Scania</option>
                            <option value="seat">Seat</option>
                            <option value="skoda">Skoda</option>
                            <option value="smart">Smart</option>
                            <option value="ssangyong">Ssangyong</option>
                            <option value="subaru">Subaru</option>
                            <option value="suzuki">Suzuki</option>
                            <option value="talbot">Talbot</option>
                            <option value="tata">Tata</option>
                            <option value="tesla">Tesla</option>
                            <option value="toyota">Toyota</option>
                            <option value="tvr">TVR</option>
                            <option value="vauxhall">Vauxhall</option>
                            <option value="volkswagen">Volkswagen</option>
                            <option value="volvo">Volvo</option>
                            <option value="westfield">Westfield</option>
                            <option value="other_manufacturer">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <label>Model</label>
                        <select data-q="model" class="form-control">
                            <option>Select model</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <label>Price range</label>
                        <select data-q="priceRangeMin" class="form-control">
                            <option>Min</option>
                            <option value="0">£0</option>
                            <option value="500">£500</option>
                            <option value="1000">£1,000</option>
                            <option value="1500">£1,500</option>
                            <option value="2000">£2,000</option>
                            <option value="2500">£2,500</option>
                            <option value="3000">£3,000</option>
                            <option value="3500">£3,500</option>
                            <option value="4000">£4,000</option>
                            <option value="4500">£4,500</option>
                            <option value="5000">£5,000</option>
                            <option value="5500">£5,500</option>
                            <option value="6000">£6,000</option>
                            <option value="6500">£6,500</option>
                            <option value="7000">£7,000</option>
                            <option value="7500">£7,500</option>
                            <option value="8000">£8,000</option>
                            <option value="8500">£8,500</option>
                            <option value="9000">£9,000</option>
                            <option value="9500">£9,500</option>
                            <option value="10000">£10,000</option>
                            <option value="11000">£11,000</option>
                            <option value="12000">£12,000</option>
                            <option value="13000">£13,000</option>
                            <option value="14000">£14,000</option>
                            <option value="15000">£15,000</option>
                            <option value="16000">£16,000</option>
                            <option value="17000">£17,000</option>
                            <option value="18000">£18,000</option>
                            <option value="19000">£19,000</option>
                            <option value="20000">£20,000</option>
                            <option value="22500">£22,500</option>
                            <option value="25000">£25,000</option>
                            <option value="27500">£27,500</option>
                            <option value="30000">£30,000</option>
                            <option value="35000">£35,000</option>
                            <option value="40000">£40,000</option>
                            <option value="45000">£45,000</option>
                            <option value="50000">£50,000</option>
                            <option value="55000">£55,000</option>
                            <option value="60000">£60,000</option>
                            <option value="65000">£65,000</option>
                            <option value="70000">£70,000</option>
                            <option value="75000">£75,000</option>
                            <option value="100000">£100,000</option>
                            <option value="250000">£250,000</option>
                            <option value="500000">£500,000</option>
                            <option value="1000000">£1,000,000</option>
                            <option value="2000000">£2,000,000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <label>Price range</label>
                        <select data-q="priceRangeMin" class="form-control">
                            <option>Max</option>
                            <option value="0">£0</option>
                            <option value="500">£500</option>
                            <option value="1000">£1,000</option>
                            <option value="1500">£1,500</option>
                            <option value="2000">£2,000</option>
                            <option value="2500">£2,500</option>
                            <option value="3000">£3,000</option>
                            <option value="3500">£3,500</option>
                            <option value="4000">£4,000</option>
                            <option value="4500">£4,500</option>
                            <option value="5000">£5,000</option>
                            <option value="5500">£5,500</option>
                            <option value="6000">£6,000</option>
                            <option value="6500">£6,500</option>
                            <option value="7000">£7,000</option>
                            <option value="7500">£7,500</option>
                            <option value="8000">£8,000</option>
                            <option value="8500">£8,500</option>
                            <option value="9000">£9,000</option>
                            <option value="9500">£9,500</option>
                            <option value="10000">£10,000</option>
                            <option value="11000">£11,000</option>
                            <option value="12000">£12,000</option>
                            <option value="13000">£13,000</option>
                            <option value="14000">£14,000</option>
                            <option value="15000">£15,000</option>
                            <option value="16000">£16,000</option>
                            <option value="17000">£17,000</option>
                            <option value="18000">£18,000</option>
                            <option value="19000">£19,000</option>
                            <option value="20000">£20,000</option>
                            <option value="22500">£22,500</option>
                            <option value="25000">£25,000</option>
                            <option value="27500">£27,500</option>
                            <option value="30000">£30,000</option>
                            <option value="35000">£35,000</option>
                            <option value="40000">£40,000</option>
                            <option value="45000">£45,000</option>
                            <option value="50000">£50,000</option>
                            <option value="55000">£55,000</option>
                            <option value="60000">£60,000</option>
                            <option value="65000">£65,000</option>
                            <option value="70000">£70,000</option>
                            <option value="75000">£75,000</option>
                            <option value="100000">£100,000</option>
                            <option value="250000">£250,000</option>
                            <option value="500000">£500,000</option>
                            <option value="1000000">£1,000,000</option>
                            <option value="2000000">£2,000,000</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="" placeholder="Postcode or location" class="form-control">
                        <i class="fa fa-map-marker"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <button class="btn-main">Search Cars <span>193,424 ads found</span></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="havecar-sell">
    <div class="container">
        <h3>Have a car to sell, why not sell it with nProads?</h3>

        <div class="row">
            <div class="col-md-offset-2 col-md-3 col-sm-6">
                <div class="sellbx">
                    <h4><i class="fa fa-car"></i> Sell your car for FREE</h4>
                    <p>Selling a car is free for private sellers</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="form-group">
                    <input placeholder="ENTER REG" name="" type="text" maxlength="9" value="" class="form-control">
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <a href="#" class="btn-main"><i class="fa fa-thumb-tack"></i> Sell your car</a>
            </div>
        </div>

        <a href="#" class="readfm">Learn more about how to sell your car</a>
    </div>
</section>

<section class="populer-model">
    <div class="container">
        <h3>Popular models</h3>

        <div class="row">
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
        </div>

        <a href="#" class="btn-main">See All Makes</a>

        <div class="cate-car">
            <h3>Browse by body type</h3>

            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <a href="#">
                        <div class="model-box">
                            <svg viewBox="0 0 50.39 25.28" id="svg-body-hatchback">
                                <title>clp</title>
                                <path class="aca" d="M49.32 13.41S49 10.77 49 9.7a2.38 2.38 0 0 0-.83-1.7 10.59 10.59 0 0 0-2.84-5.64c.54-.59.83-.49.68-1S44.55.43 41.91.19C34.3-.26 25.35.23 22.77 1.32A38.92 38.92 0 0 0 14 8.06c-4.29.29-5.42.38-8.76 1.49a7.5 7.5 0 0 0-4.79 6A9.42 9.42 0 0 0 0 16.61c0 .93.46 2.39.49 3.31a1.75 1.75 0 0 0 1.95 1.83h.8v-1.69a6.49 6.49 0 1 1 13 0v2.05h18.69v-2.05a6.49 6.49 0 1 1 13 0v.66h.74a1.45 1.45 0 0 0 1.41-1.22c.1-.54.33-3.43.33-4.1a5.29 5.29 0 0 0-1.09-1.99zm-44.81.18c-.88 1-2.35 1.38-2.35.89a3.85 3.85 0 0 1 1.32-2.69 3.45 3.45 0 0 1 2.39-1.13c.54.09-.48 1.9-1.36 2.92zM32.35 8c-4.18.1-11.51.34-12.64.34s-1.24-.7-.71-1.63a11 11 0 0 1 2.49-2.3 7.72 7.72 0 0 1 3.81-1.65 59.4 59.4 0 0 1 7.7-.39zm11.88 0h-9.29l.26-5.7s6.24-.12 6.76.07c1.24.13 2.59 3.13 2.92 4.47.2.82.27 1.16-.64 1.1zm-34.5 6.84a5.22 5.22 0 1 0 5.22 5.22 5.22 5.22 0 0 0-5.22-5.22zm0 8a2.82 2.82 0 1 1 2.82-2.82 2.82 2.82 0 0 1-2.82 2.86zm31.7-8a5.22 5.22 0 1 0 5.22 5.22 5.22 5.22 0 0 0-5.23-5.22zm0 8a2.82 2.82 0 1 1 2.82-2.82 2.82 2.82 0 0 1-2.83 2.86z"></path>
                            </svg>
                            <h4>Hatchback</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-4">
                    <a href="#">
                        <div class="model-box">
                            <svg viewBox="0 0 61.66 25.28" id="svg-body-sedan">
                                <title>clp</title>
                                <path class="aea" d="M13.93 14.3a5.49 5.49 0 1 0 5.49 5.49 5.49 5.49 0 0 0-5.49-5.49zm0 8.46a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm35.18-8.46a5.49 5.49 0 1 0 5.49 5.49 5.49 5.49 0 0 0-5.49-5.49zm0 8.46a3 3 0 1 1 3-3 3 3 0 0 1-3 3zM61 13.32a6.8 6.8 0 0 1-.32-2.2c0-1.65-.64-4-3.16-4.32a8.54 8.54 0 0 1-3.24-1.28C53 4.91 51.14 3.41 48.55 2A17.5 17.5 0 0 0 41.49.1a61.08 61.08 0 0 0-7.05 0 14.81 14.81 0 0 0-5.18 1 54.38 54.38 0 0 0-8.92 5.3 2.47 2.47 0 0 1-1.12.6c-2.83.31-13.38 1.51-16.51 3.49-1.05.4-1.62 2.88-1.86 4.51-.05.33-.85.69-.85 1.06A12.58 12.58 0 0 0 .74 19c.3 1.14.61 1.83 1.94 1.83h4.39v-1a6.86 6.86 0 0 1 13.72 0v1h21.54a6.85 6.85 0 1 1 13.63-1s2.49-.33 3.39-.52a2 2 0 0 0 1.6-1.36 15.27 15.27 0 0 0 .71-3.05 6.83 6.83 0 0 0-.66-1.58zM7.5 13.3c-.74.6-4.84 1.54-4.78 1.18 0-3.6 6.07-4 6.07-4s-.55 2.23-1.29 2.82zm16.25-5.48a.52.52 0 0 1-.32-.82c.56-.76 4.84-4.07 7.71-4.82a30.76 30.76 0 0 1 6.34-.63 21.61 21.61 0 0 1 .65 5.42s-7.68.23-14.38.85zm27.67-.67c-2.58 0-11.1-.15-11.1-.15a26 26 0 0 0-.67-5.37A16.39 16.39 0 0 1 44 2c2.7.53 7.29 3.92 7.76 4.45s.24.7-.34.7z"></path>
                            </svg>
                            <h4>Saloon</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-4">
                    <a href="#">
                        <div class="model-box">
                            <svg viewBox="0 0 71.38 26.12" id="svg-body-wagon">
                                <title>clp</title>
                                <path class="aja" d="M14.38 14.78A5.67 5.67 0 1 0 20 20.45a5.67 5.67 0 0 0-5.62-5.67zm0 8.74a3.07 3.07 0 1 1 3.07-3.07 3.07 3.07 0 0 1-3.07 3.06zm41.38-8.74a5.67 5.67 0 1 0 5.67 5.67 5.67 5.67 0 0 0-5.67-5.67zm0 8.74a3.07 3.07 0 1 1 3.07-3.07 3.07 3.07 0 0 1-3.07 3.06zm15-9.74a16.34 16.34 0 0 1-.11-2.24 11.64 11.64 0 0 0-1-3.94s-2-3.15-2.82-4.54a3.46 3.46 0 0 0-2.84-1.93C59.68.39 48 .21 43.42.07a68.3 68.3 0 0 0-7.87.05 15.29 15.29 0 0 0-5.35 1A56.13 56.13 0 0 0 21 6.61a2.55 2.55 0 0 1-1.16.59c-2.92.32-13.81 1.56-17 3.6-1.09.45-1.67 3-1.92 4.68-.1.37-.92.74-.92 1.11a13 13 0 0 0 .76 3c.31 1.18.63 1.88 2 1.88H7.3v-1.06a7.08 7.08 0 0 1 14.16 0v1.06h27.31a7.07 7.07 0 1 1 14.07-1.06s5.24-.34 6.17-.54a2.11 2.11 0 0 0 1.65-1.4 15.76 15.76 0 0 0 .73-3.15 7 7 0 0 0-.64-1.55zm-63.45 0c-.76.62-4.55 1.59-4.49 1.22 0-3.71 5.81-4.18 5.81-4.18s-.57 2.32-1.34 2.93zm30.78-6.59s-6.66.26-13.58.9a.54.54 0 0 1-.33-.87c.57-.78 5-4.2 8-5a31.76 31.76 0 0 1 6.55-.65s-.46 2.93-.64 5.62zM40.2 7c.18-3.26.47-5.43.47-5.43s4.29 0 8.18.32a22.87 22.87 0 0 1 1 5C42.69 7 40.2 7 40.2 7zm24.87.2C62.66 7.09 51.75 7 51.75 7a23.17 23.17 0 0 0-1.19-5.07s11.7.32 12.79.54a1.71 1.71 0 0 1 1.54 1.27A15.39 15.39 0 0 1 66 6.51c.1.49 0 .71-.93.74z"></path>
                            </svg>
                            <h4>Estate</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-4">
                    <a href="#">
                        <div class="model-box">
                            <svg viewBox="0 0 64 27.37" id="svg-body-suv">
                                <title>clp</title>
                                <path class="afa" d="M50.11 15.62A5.88 5.88 0 1 0 56 21.49a5.88 5.88 0 0 0-5.89-5.87zm0 9.06a3.18 3.18 0 1 1 3.18-3.18 3.18 3.18 0 0 1-3.18 3.17zm13.27-10c0-.31-.24-4.32-.42-6.51a3.37 3.37 0 0 0-.93-2c-.74-1-3.66-4.69-4.44-5.08C56-.1 49 .14 44.22 0A82.62 82.62 0 0 0 35 .27a14.89 14.89 0 0 0-5.21 1 60.39 60.39 0 0 0-9 5.69 2.49 2.49 0 0 1-1.13.58C16.81 7.86 6.8 8.88 4.2 10.46S1.54 14 1.3 15.65C1.25 16 0 16.67 0 17a19.32 19.32 0 0 0 .42 4c.3 1.15.77 1.84 2.11 1.84h2.75a7.53 7.53 0 1 1 14.79 0h22.65a7.53 7.53 0 1 1 14.92-1.38v.19c0 .06 1.7-.06 3.47-.06a2.75 2.75 0 0 0 2.61-2 15.12 15.12 0 0 0 .28-2.67 19.91 19.91 0 0 0-.62-2.29zm-57-.72C5.67 14.51 3 15.46 3 15.1c.33-3.87 4.42-4 4.42-4s-.26 2.21-1.01 2.81zm30.15-6a113.22 113.22 0 0 0-11.64.53.52.52 0 0 1-.32-.85c.56-.76 4.87-4.44 7.75-5.21a21.13 21.13 0 0 1 5-.63s-.73 5.64-.75 6.07zM49 7.72c-1.86 0 .94 0-9.66.13l.39-6.1a50.19 50.19 0 0 1 6.72-.08S49.11 7.72 49 7.72zm10.37-.2a.35.35 0 0 1-.28.21h-7.4l-2.62-5.91a49.43 49.43 0 0 1 5.32.29 1.84 1.84 0 0 1 1.45.74c.34.5 3.16 3.58 3.45 4.32.09.26.09.23.04.35zm-46.65 8.1a5.88 5.88 0 1 0 5.88 5.88 5.88 5.88 0 0 0-5.92-5.88zm0 9.06a3.18 3.18 0 1 1 3.18-3.18 3.18 3.18 0 0 1-3.22 3.17z"></path>
                            </svg>
                            <h4>MPV</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-4">
                    <a href="#">
                        <div class="model-box">
                            <svg viewBox="0 0 55.99 19.01" id="svg-body-coupe">
                                <title>clp</title>
                                <path class="aba" d="M55.25 8.31a3.63 3.63 0 0 0-2.92-2.89 15.62 15.62 0 0 1-4.64-1.48 28.34 28.34 0 0 1-3.11-2.1A12.65 12.65 0 0 0 38.14 0c-2.28-.09-2.46 0-3.4 0A9 9 0 0 0 31 .87a40 40 0 0 0-7.61 4.18 2 2 0 0 1-1 .51C16 5.56 7.74 6 3.75 7.63 1.86 8.51 0 10.22 0 11.73a11.49 11.49 0 0 0 .3 2.94c.27 1 .54 1.62 1.72 1.62h4.43v-.91-.45a6.12 6.12 0 1 1 12.13 0v1.36h19.55c0-.3-.08-1.79-.08-2.1a3.25 3.25 0 0 1 0-.47 6.12 6.12 0 0 1 12.23.41v1.14s2.63-.19 3.42-.36a1.81 1.81 0 0 0 1.42-1.21 16.24 16.24 0 0 0 .88-3.23 11.3 11.3 0 0 0-.75-2.16zM4.87 10.24c-.66.53-3.25 1.37-3.2 1.05-.05-2.77 5.39-3.66 5.39-3.66a23.07 23.07 0 0 1-2.19 2.61zm14.68-.47a.27.27 0 0 1 0-.29.28.28 0 0 1 .25-.15h1.84a.27.27 0 0 1 .24.15l.36.72h-2.35zm.84 1.23h2.22l.56 1.1H21c-.17-.34-.39-.72-.61-1.1zm3.35 2.5a.27.27 0 0 1-.21.14h-.11a5.35 5.35 0 0 1-.65 0 1.39 1.39 0 0 1-1.46-.83h2.24l.19.37a.28.28 0 0 1 0 .34zM38.61 2.75s-.18 2.52-.86 2.86h-.12c-3.24.1-4.91.19-7.51.19-1.27 0-3 .11-3 .11a.31.31 0 0 1-.18-.57 20.79 20.79 0 0 1 6.57-3.54h.07A6 6 0 0 1 35 1.69c1 0 1.95 0 2.57.06a.9.9 0 0 1 1.04 1zm-26.08 6.5a4.88 4.88 0 1 0 4.88 4.88 4.88 4.88 0 0 0-4.88-4.88zm0 7.51a2.64 2.64 0 1 1 2.64-2.64 2.64 2.64 0 0 1-2.64 2.65zm31.59-7.51A4.88 4.88 0 1 0 49 14.13a4.88 4.88 0 0 0-4.88-4.88zm0 7.51a2.64 2.64 0 1 1 2.64-2.64 2.64 2.64 0 0 1-2.64 2.65z"></path>
                            </svg>
                            <h4>Coupe</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-4">
                    <a href="#">
                        <div class="model-box">
                            <svg viewBox="0 0 60.07 22.57" id="svg-body-convertible">
                                <title>clp</title>
                                <path class="aaa" d="M13.57 11.86a5.35 5.35 0 1 0 5.35 5.35 5.35 5.35 0 0 0-5.35-5.35zm0 8.25a2.89 2.89 0 1 1 2.89-2.89 2.89 2.89 0 0 1-2.89 2.89zM47.84 11.86a5.35 5.35 0 1 0 5.35 5.35 5.35 5.35 0 0 0-5.35-5.35zm0 8.25a2.89 2.89 0 1 1 2.89-2.89 2.89 2.89 0 0 1-2.89 2.89zM54.6 18.93z"></path>
                                <path class="aaa" d="M59.47 12.62a6.63 6.63 0 0 1-.32-2.14c0-1.61-.62-3.9-3.08-4.21-1.06-.07-8-.71-11-.36-2.68.8-5.95.93-11.17 1.09s-5.27.22-9.4.31a.51.51 0 0 1-.31-.82A20.08 20.08 0 0 1 31.43 2c.95-.28 1.22-.5 1.76-.61S33.73 0 33.08 0a9.72 9.72 0 0 0-3.48 1 48.06 48.06 0 0 0-8.42 4.89 2.41 2.41 0 0 1-1.09.56c-2.76.31-13.31 1.07-16.3 3.33a6.77 6.77 0 0 0-3 4.48c-.05.35-.83.7-.83 1a12.26 12.26 0 0 0 .72 2.86c.3 1.11.59 1.78 1.89 1.78.21 0 2.07-.05 4.33-.05V16.8a6.71 6.71 0 0 1 13.45.2v2.9h20.77v-2.75a6.72 6.72 0 0 1 13.44 0v1.7c.4-.05 2.44-.33 3.22-.5a2 2 0 0 0 1.56-1.32 14.88 14.88 0 0 0 .69-3 6.65 6.65 0 0 0-.56-1.41zm-53.24 0c-.72.58-3.64 1.5-3.58 1.16.29-2.88 4.61-3.89 4.61-3.89S7 12 6.23 12.61z"></path>
                                <path class="aaa" d="M41.29 4v1.4a6.39 6.39 0 0 1-3 .52c0-1.12.68-2.73 1.51-2.73s1.49.37 1.49.81z"></path>
                            </svg>
                            <h4>Convertible</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <h3>Recently listed</h3>

        <div class="row">
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <div class="populerbx">
                        <div class="pop-img">
                            <img src="/images/car1.jpg" alt="">
                        </div>
                        <h4>Vauxhall Corsa</h4>
                    </div>
            </div></a>
        </div>

        <a href="#" class="btn-main">See All Cars</a>
    </div>
</section>

@stop