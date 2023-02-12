<nav class="navbar navbar-default fixed-bar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="/images/logo.png" alt="LOGO"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="locato-bx" data-toggle="modal" data-target="#location-popup">
                <div class="locb">
                    <div class="pin-ic">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="pin-nm">
                        <span>YOUR ADDRESS:</span>
                        <h4>Enter Your Address</h4>
                    </div>

                    <i class="fa fa-caret-down opmo"></i>
                </div>

                <div class="wharebx">
                    <h5>Where are you?</h5>
                    <p>Add an address to see suppliers in your area.</p>
                </div>
            </div>
            <ul class="nav navbar-nav pull-right" id="menu">
                <li><a href="#">Start Delivery</a></li>
                <li><a href="#">Post On nProHub</a></li>
                <li><a href="#">Cities</a></li>
                <li><a href="#">Directory</a></li>
                @if (Session::get('pk_userId'))
                <li><a href="/profile" class="user-lg"><img src="/images/user_profiles/{{ Session::get('profileImage') }}" onerror="this.src='/images/user_profiles/watt-avatar.png'" alt=""></a></li>
                @else
                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#login-popup">Login/Register</a></li>
                @endif
                <li><a href="/logout"><img src="/images/silverware.svg" alt=""></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>