@extends('masterPage.main')
@section('appTitle')
Signup
@stop

@section('content')

<!-- Inner Banner -->
<section class="inner-banner">
    <div class="inner-info">
        <div class="container">
            <h1>Grow your Business</h1>
            <p>Partner with nProHub</p>
        </div>
    </div>
</section>
<!-- End Inner Banner -->

<!-- Signup -->
<section class="signup-wrp">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="singupdt">
                    <h3>Become a nProHub partner today!</h3>
                    <p>Increase your sales and reach new hungry customers. No setup fees or upfront costs, get started below!</p>

                    <a href="#" class="btn-main">Sign Up Here!</a>

                    <h4>nProHub helps to:</h4>
                    <ul>
                        <li>Allow your staff to focus on the customer experience</li>
                        <li>Show real time analytics to streamline your kitchen flow</li>
                        <li>Increase ticket averages and grow your profits</li>
                        <li>Manage your menu and customer data</li>
                        <li>Expand your market reach with carryout and delivery</li>
                    </ul>

                    <h4>Calculate your potential profits</h4>
                    <p>Use our calculation tool to find out how much you can earn!</p>

                    <a href="#" class="btn-main">ESTIMATE YOUR EARNINGS</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="signup-frm">
                    <h4>Need more information about our partnership?</h4>
                    <p>Fill out this form to check out our Why nProHub FAQ to get more details about our partnership and services.</p>

                    <form>
                        <div class="form-group">
                            <label>First name <span>*</span></label>
                            <input type="text" name="" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Last name <span>*</span></label>
                            <input type="text" name="" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile phone number <span>*</span></label>
                            <input type="text" name="" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Restaurant Phone Number <span>*</span></label>
                            <input type="text" name="" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email <span>*</span></label>
                            <input type="text" name="" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company name<span>*</span></label>
                            <input type="text" name="" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Number of Locations<span>*</span></label>
                            <select class="form-control">
                                <option value="" disabled="" selected="" data-reactid=".hbspt-forms-0.1:$6.$number_of_locations.0.0">Please Select</option>
                                <option value="1" data-reactid=".hbspt-forms-0.1:$6.$number_of_locations.0.1:$1">1</option>
                                <option value="2-10" data-reactid=".hbspt-forms-0.1:$6.$number_of_locations.0.1:$2-10">2-10</option>
                                <option value="11-19" data-reactid=".hbspt-forms-0.1:$6.$number_of_locations.0.1:$11-19">11-19</option>
                                <option value="20+" data-reactid=".hbspt-forms-0.1:$6.$number_of_locations.0.1:$20+">20+</option>
                            </select>
                        </div>

                        <button class="btn-main">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Signup -->

@stop