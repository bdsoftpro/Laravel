@extends('pages.layouts.basic')

@section('content')
<!-- **Main** -->
<div id="main">
    <!-- **Breadcrumb Section** -->
    <div class="breadcrumb-section">
        <div class="container">
            <h1>404</h1>
            <div class="breadcrumb">
                <a href="index.html" title="">Home</a> / <span>404</span>
            </div>
        </div>
    </div> <!-- **Breadcrumb Section Ends** -->

    <!-- **Content Main** -->
    <section class="content-main">
        <!-- **Container** -->
        <div class="container">
            <!-- **Primary** -->
            <div class="content-full-width" id="primary">
                <div class="error-info">
                    <h3>Oops the page you are looking for is not found</h3>
                    <h2>404 Error !</h2>
                    <span class="msg">Let us know what you were looking for</span>
                    <div class="contact-info">
                        <p> <i class="fa fa-envelope"> </i> <span>Email</span> : <a href="mailto:raven@someemail.com">yourname@someemail.com</a> </p>
                        <span class="msg"> or </span>
                        <p> <i class="fa fa-phone"> </i> <span>Phone</span> : +1 200 258 2145 </p>
                    </div>
                </div>
            </div><!-- **Primary - End** -->
        </div> <!-- **Container Ends** -->
    </section> <!-- **Content Main Ends** -->

    <div class="tweet-box">
        <div class="container">
            <div id="tweets_container"></div>
        </div>
    </div>
</div> <!-- **Main Ends** -->
@endsection
