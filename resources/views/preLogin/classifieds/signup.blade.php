@extends('masterPage.classifieds.main')
@section('appTitle')
Home
@stop
@section('content')

<!-- Login & Register -->
<section class="add-login-wrp">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="login-add-frm">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#frm1">LOGIN</a></li>
                        <li><a data-toggle="tab" href="#frm2">REGISTER</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="frm1" class="tab-pane fade in active">
                            <div class="frm-box">
                                <form  class="login-form">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="login_email" placeholder="Type your email address here" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="login_password" placeholder="Type password here" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <a href="#" class="frgli">Forgot your password?</a>
                                    </div>
                                    <!-- <button class="btn-main">Login</button> -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn-main loginSubmitBtn">Sign In</button>
                                    <button type="button" class="btn-default hide-element loginLoadingBtn" readonly>Loading ...</button>
                                </form>
                                <p>*By using social login, you agree to our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Notice</a>.</p>
                            </div>
                        </div>
                        <div id="frm2" class="tab-pane fade">
                            <div class="frm-box">
                                <form class="register-form">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="register_firstName" placeholder="Type your first name here" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="register_lastName" placeholder="Type your last name here" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="register_email" placeholder="Type your email address here" class="form-control">
                                        <label class="error from server" for="" >{{ $errors->register->first('register_email') }}</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" id="register_password" name="register_password" placeholder="Type password here" class="form-control">
                                        <button type="button" class="show show-password">Show</button>
                                        <button type="button" class="show hide-password">hide</button>
                                    </div>
                                    <div class="form-group">
                                        <p>We will regularly send you emails with offers regarding our services. You can unsubscribe from receiving these marketing emails at any time, free of charge, via the link in the emails, My Details or <a href="#">this link</a>.</p>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn-main registerSubmitBtn">Register</button>
                                    <button type="button" class="btn-default hide-element registerLoadingBtn" readonly>Loading ...</button>
                                    <div  class="register_server_side_error">
                                        <br><br><br>
                                        <div class="alert alert-danger register_error_message" role="alert">
                                        </div>
                                    </div>
                                        
                                    <p>By selecting <strong>Register</strong> you agree you've read and accepted our <a href="#">Terms of Use</a>. Please see our <a href="#">Privacy Notice</a> for information regarding the processing of your data.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login & Register -->
@stop