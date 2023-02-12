<div id="login-popup" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="login-wrp">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="left-logo">
                            <div class="enter-logo">
                                <h1>Welcome to</h1>
                                <img src="/images/logo.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="right-part nav nav-tabs">
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <h2>It's Great To See You Again</h2>

                                    <a class="fb-btn"><i class="fa fa-facebook-official" aria-hidden="true"></i> Log in With Facebook</a>

                                    <span class="sepret">OR</span>

                                    <form  class="login-form">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" name="login_email" placeholder="Type your email address here" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="login_password" placeholder="Type password here" class="form-control">
                                        </div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn-main loginSubmitBtn">Sign In</button>
                                        <button type="button" class="btn-default hide-element loginLoadingBtn" readonly>Loading ...</button>
                                        
                                        <div  class="login_server_side_error">
                                            <br><br><br>
                                            <div class="alert alert-danger login_error_message" role="alert">
                                            </div>
                                        </div>
                                        <a data-toggle="tab" href="#fg-po" class="frgps">Forgot Password?</a>

                                        <h6>Don't have an account? <a data-toggle="tab" href="#reg-po">Register Now</a></h6>
                                    </form>
                                </div>
                                <div id="fg-po" class="tab-pane fade">
                                    <h2>You aren't the first person to forget a password.</h2>

                                    <p>Enter the email registered to your nProHub account, and we’ll send you a link to reset your password.</p>
                                    <div  class="forget_server_side_success">
                                        <br><br><br>
                                        <div class="alert alert-success forget_success_message" role="alert">
                                        </div>
                                    </div>
                                    <form class='forget-password-form'>
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="text" name="forget_email" placeholder="Type your email address here" class="form-control">
                                        </div>

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn-main forgetSubmitBtn">Send Password Reset Email</button>
                                        <button type="button" class="btn-default hide-element forgetLoadingBtn" readonly>Loading ...</button>
                                        <div  class="forget_server_side_error">
                                            <br><br><br>
                                            <div class="alert alert-danger forget_error_message" role="alert">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    </form>
                                    <h6>Or, Return to <a data-toggle="tab" href="#home">Login</a></h6>
                                </div>
                                <div id="reg-po" class="tab-pane fade">
                                    <h2>Let's Get To Know You!</h2>

                                    <form class="register-form">
                                        <div class="form-group">
                                            <label>First Name*</label>
                                            <input type="text" name="register_firstName" placeholder="Type your first name here" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="register_lastName" placeholder="Type your last name here" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address*</label>
                                            <input type="email" name="register_email" placeholder="Type your email address here" class="form-control">
                                            <label class="error from server" for="" >{{ $errors->register->first('register_email') }}</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Password*<a><i class="fa fa-info-circle"></i></a></label>
                                            <input type="password" id="register_password" name="register_password" placeholder="Type password here" class="form-control">
                                            <button type="button" class="show show-password">Show</button>
                                            <button type="button" class="show hide-password">hide</button>
                                        </div>

                                        <div class="privacy-bx">
                                            <p>By clicking Register, I agree to the <a href="/terms">Terms of Use</a> and <a href="/privacy-policy">Privacy Policy</a>.</p>
                                        </div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn-main registerSubmitBtn">Register</button>
                                        <button type="button" class="btn-default hide-element registerLoadingBtn" readonly>Loading ...</button>
                                        
                                        <div  class="register_server_side_error">
                                            <br><br><br>
                                            <div class="alert alert-danger register_error_message" role="alert">
                                            </div>
                                        </div>
                                        
                                        <br>
                                        <h6>Already have an account? <a data-toggle="tab" href="#home">Sign In</a></h6>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>