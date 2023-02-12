@extends('masterPage.main')
@section('appTitle')
Reset Password
@stop

@section('content')

<!-- Reset Password -->
<section class="some-terms-wrp">
    <div class="container">
        <form class="reset-password-form">
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="reset_password" placeholder="Type password here" class="form-control">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="reset_confirm_password" placeholder="Type password here" class="form-control">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn-main resetSubmitBtn">Reset Password</button>
            <button type="button" class="btn-default hide-element resetLoadingBtn" readonly>Loading ...</button>

            <div class="reset_server_side_error">
                <br><br><br>
                <div class="alert alert-danger reset_error_message" role="alert">
                </div>
            </div>
        </form>
        <div class="reset_server_side_success">
            <br><br><br>
            <div class="alert alert-success reset_success_message" role="alert">
            </div>
        </div>
        Go To <a href="/"> Home</a>
    </div>
</section>
<!-- End Reset Password -->

<!-- Driver -->
@include('components.becomeADriver')
<!-- End Driver -->

@stop