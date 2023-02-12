@extends('masterPage.main')
@section('appTitle')
Accessibility Statement
@stop

@section('content')

<!-- Banner -->
<section class="main-banner contact-banner accesibl-banner">
    <div class="banner-info">
        <div class="container">
            <h1>Accessibility <br>Statement</h1>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Common Que -->
<section class="some-terms-wrp">
    <div class="container">
        <p>nProHub, Inc. is committed to making its website usable by all people by meeting or exceeding the requirements of the Web Content Accessibility Guidelines 2.1 Level AA (WCAG 2.1 AA).</p>

        <p>At this time, nProHub’s website is the recommended channel for accessible digital ordering.</p>

        <p>Please be aware that our efforts are ongoing as our current website provider implements the relevant improvements to meet WCAG 2.1 AA guidelines over time. If you need assistance in using the processes found within this site, or have specific questions or concerns about the accessibility of this site, please contact us at accessibility@nProHubapp.com.</p>

        <p>If you do encounter an accessibility issue, please be sure to specify the Web page and we will make all reasonable efforts to make that page accessible.</p>
    </div>
</section>
<!-- End Common Que -->


<!-- Driver -->
@include('components.becomeADriver')
<!-- End Driver -->

@stop