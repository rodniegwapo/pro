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
                <li><a href="#">Motors</a></li>
                <li><a href="#">Cars</a></li>
                <li><a href="#">Vauxhall</a></li>
                <li><a href="#">ADAM</a></li>
                <li>Manual</li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="products-left-part">
                    <h4>2018 Vauxhall Adam 1.2i Energised 3dr HATCHBACK Petrol Manual</h4>
                    <h6>Weston-super-Mare, Somerset <span>£7,940.00 </span></h6>
                    <div class="proprod">
                        <img src="/images/watt-avatar.png" alt="">
                        <a href="#">Get insurance quote</a>
                    </div>

                    <div class="produc-detsl">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#protb1"><i class="fa fa-camera"></i> Images</a></li>
                            <li><a data-toggle="tab" href="#protb2"><i class="fa fa-map-marker"></i> Map</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="protb1" class="tab-pane fade in active">
                                <div class="products-listi">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="prosl">
                                                    <img src="/images/car.jpg" alt="">

                                                    <a data-fancybox="gallery" href="/images/car.jpg" data-caption="Money Plant"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="prosl">
                                                    <img src="/images/car.jpg" alt="">

                                                    <a data-fancybox="gallery" href="/images/car.jpg" data-caption="Money Plant"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="prosl">
                                                    <img src="/images/car.jpg" alt="">

                                                    <a data-fancybox="gallery" href="/images/car.jpg" data-caption="Money Plant"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="protb2" class="tab-pane fade">
                                <div class="map-block">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15280120.483704528!2d73.72876181077612!3d20.771124736526268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1600424854028!5m2!1sen!2sin" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="car-info-wrp">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h4>Seller Type <span>Trade</span></h4>
                                <div class="car-tbl">
                                    <h5><i class="fa fa-car"></i>Key Information</h5>

                                    <table class="table table-striped">
                                        <thead>
                                        <tbody>
                                            <tr>
                                                <td>Year</td>
                                                <td>2018</td>
                                            </tr>
                                            <tr>
                                                <td>Body Type</td>
                                                <td>Saloon</td>
                                            </tr>
                                            <tr>
                                                <td>Mileage</td>
                                                <td>12,132 miles</td>
                                            </tr>
                                            <tr>
                                                <td>Transmission</td>
                                                <td>Manual</td>
                                            </tr>
                                            <tr>
                                                <td>Brochure Engine Size</td>
                                                <td>1.2 L</td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Type</td>
                                                <td>Petrol</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="car-tbl">
                                    <h5><i class="fa fa-car"></i>Performance</h5>

                                    <table class="table table-striped">
                                        <thead>
                                        <tbody>
                                            <tr>
                                                <td>Year</td>
                                                <td>2018</td>
                                            </tr>
                                            <tr>
                                                <td>Body Type</td>
                                                <td>Saloon</td>
                                            </tr>
                                            <tr>
                                                <td>Mileage</td>
                                                <td>12,132 miles</td>
                                            </tr>
                                            <tr>
                                                <td>Transmission</td>
                                                <td>Manual</td>
                                            </tr>
                                            <tr>
                                                <td>Brochure Engine Size</td>
                                                <td>1.2 L</td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Type</td>
                                                <td>Petrol</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h4>Posted <span>1 Day Ago</span></h4>
                                <div class="car-tbl">
                                    <h5><i class="fa fa-car"></i>Running Cost</h5>

                                    <table class="table table-striped">
                                        <thead>
                                        <tbody>
                                            <tr>
                                                <td>Year</td>
                                                <td>2018</td>
                                            </tr>
                                            <tr>
                                                <td>Body Type</td>
                                                <td>Saloon</td>
                                            </tr>
                                            <tr>
                                                <td>Mileage</td>
                                                <td>12,132 miles</td>
                                            </tr>
                                            <tr>
                                                <td>Transmission</td>
                                                <td>Manual</td>
                                            </tr>
                                            <tr>
                                                <td>Brochure Engine Size</td>
                                                <td>1.2 L</td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Type</td>
                                                <td>Petrol</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="car-tbl">
                                    <h5><i class="fa fa-car"></i>Vehicle Description</h5>

                                    <table class="table table-striped">
                                        <thead>
                                        <tbody>
                                            <tr>
                                                <td>Year</td>
                                                <td>2018</td>
                                            </tr>
                                            <tr>
                                                <td>Body Type</td>
                                                <td>Saloon</td>
                                            </tr>
                                            <tr>
                                                <td>Mileage</td>
                                                <td>12,132 miles</td>
                                            </tr>
                                            <tr>
                                                <td>Transmission</td>
                                                <td>Manual</td>
                                            </tr>
                                            <tr>
                                                <td>Brochure Engine Size</td>
                                                <td>1.2 L</td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Type</td>
                                                <td>Petrol</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="car-other-dt">
                        <h4>Description</h4>
                        <p>1 Owner From New With Service History - The Vauxhall Adam Combines Bold Design With Urban Attitude - Fitted With 800 Of Extras Including, Exterior Light Pack And Privacy Glass - Mp3 iPhone iPod USB & Aux Music Ports, Bluetooth Wireless SmartPhone Connectivity, DAB Digital Radio For A Myriad Of Stations To Suit Your Mood, Cruise Control, Day Running Lights, Tinted Glass, Electric Hill Holder, Cornering Brake Control, Sports Suspension, Stability Control System, Electronic Brake Distribution, Hydraulic Emergency Brake Assist, Isofix, Flat Tyre Indicator, Air Conditioning, Front Electric Windows, Rear Privacy Glass, Euro 6 Compliant Emissions, All our vehicles may have previously been used for business purposes. Please check in store for the specific history of this car.</p>

                        <p>Air Conditioning; Cruise Control; AM/FM Stereo; Electric Windows; Safety Belt Pretensionersreviously</p>

                        <p>RAC Buysure Approved Dealer. For details visit [Website URL removed] or call us on 01934 807574. Used car retailer of the year 2019.</p>

                        <p><strong>About Us:</strong>
                            Welcome to Carbase. As the largest independent used car dealership in the South West we have up to 2000 competitively priced, quality cars for sale. We are very proud that 94% of our customers are happy to recommend us to their families and friends. All our cars are high specification vehicles with plenty of extras, safety inspected and HPI checked, in fact we do everything required to ensure that the car you buy from Carbase is a great car. Located in Bristol and with more branches between junctions 21 and 22 of the M5 motorway, we are within easy reach of anyone with access to the M4, M5, M6 or M25 motorways. RAC Approved. Cars price checked daily. HPI & safety checked. Finance & Part Exchange available. Open late 7 days. Live chat 24/7. To learn more or reserve this car, call or chat now!</p>

                        <p>To learn more about Carbase, our excellent vehicles and the products we have to offer or to reserve a car or book a test drive, call 0117 405 8535 or visit [Website URL removed]</p>

                        <p><strong>Warranty:</strong>
                            We are pleased to offer our customers a choice of one, two or three year RAC Approved Warranty on our vehicles, along with ongoing motoring support via our main dealer standard Auto Centres (Excludes Clearance Cars). Please contact one of our Sales Executives on 0117 405 8535 to specify your requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="products-rightpar">
                    <h3>Carbase</h3>

                    <h4>Posting for 4+ years <a href="#">See all ads</a></h4>

                    <h5>Contact Carbase</h5>

                    <a href="#" class="logcall"><i class="fa fa-phone"></i> Login to reveal phone number</a>

                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Hi Carbase, I'm interested in your item. Is this still available? Thanks"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="" placeholder="Your Phone Number" class="form-control">
                    </div>
                    <button class="btn-main">Send Message</button>

                    <div class="linkbc">
                        <a href="https://www.carbase.co.uk/?utm_source=nProads&utm_medium=referral&utm_campaign=nProads-lympsham">https://www.carbase.co.uk/?utm_source=nProads&utm_medium=referral&utm_campaign=nProads-lympsham</a>
                    </div>

                    <div class="btn-group">
                        <a href="#" class="btn-act"><i class="fa fa-heart"></i> Favourite</a>
                        <a class="btn-act" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-exclamation-triangle"></i> Report</a>
                    </div>

                    <div class="report-list collapse" id="collapseExample">
                        <ul>
                            <li>
                                <div class="cus-radio">
                                    <input type="radio" id="test1" name="radio-group" checked>
                                    <label for="test1">This is illegal/fraudulent</label>
                                </div>
                            </li>
                            <li>
                                <div class="cus-radio">
                                    <input type="radio" id="test2" name="radio-group" checked>
                                    <label for="test2">This ad is spam</label>
                                </div>
                            </li>
                            <li>
                                <div class="cus-radio">
                                    <input type="radio" id="test3" name="radio-group" checked>
                                    <label for="test3">This ad is a duplicate</label>
                                </div>
                            </li>
                        </ul>

                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Please provide more information"></textarea>
                        </div>

                        <div class="btn-group actb">
                            <a href="#" class="btn-main canbn">Cancel</a>
                            <a href="#" class="btn-main">Send Report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop