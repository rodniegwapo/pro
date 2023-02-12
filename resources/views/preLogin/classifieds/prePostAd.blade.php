@extends('masterPage.classifieds.main')
@section('appTitle')
Home
@stop
@section('content')

<!-- Login & Register -->
<section class="add-login-wrp">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4">
                <div class="login-add-frm wthb">
                    <div class="frm-box">
                        <a href="<?=getClaasifiedsUrl('signup')?>" class="btn-enter">I have an account</a>
                        <a href="<?=getClaasifiedsUrl('signup')?>" class="btn-enter">I'm new</a>
                    </div>
                </div>
                <p class="opnot">*By using social login, you agree to our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Notice</a>.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Login & Register -->
@stop