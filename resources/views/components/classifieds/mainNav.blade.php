<div class="inner-hader-box">
    <div class="container">
        <div class="inner-logo">
            <a href="<?=getClaasifiedsUrl()?>"><img src="/images/logo-2.png" alt=""></a>
        </div>
        <div class="righ-listing">
            <ul>
                <li><a href="<?=getClaasifiedsUrl('signup')?>">Login/Register</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                <li><a href="javascript:void(0);" data-toggle="collapse" data-target="#demo"><i class="fa fa-search"></i></a></li>
                <li><a href="<?=getClaasifiedsUrl('prePostAd')?>" class="pin-btn"><i class="fa fa-thumb-tack"></i> Post an ad</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="search-block" id="demo" class="collapse" style="height: 0px;overflow: hidden;">
    <div class="container">
        <ul>
            <li>
                <input type="text" name="" placeholder="I'm looking for..." class="form-control">
            </li>
            <li>
                <span>in</span>
            </li>
            <li class="poloc">
                <input type="text" name="" placeholder="Postcode or location" class="form-control">
            </li>
            <li>
                <button class="btn-search">Go</button>
            </li>
        </ul>
    </div>
</div>