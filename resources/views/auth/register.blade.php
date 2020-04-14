@extends('pages.layouts.basic')

@section('content')
    <!-- **Main** -->
    <div id="main">
        <!-- **Breadcrumb Section** -->
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Register</h1>
                <div class="breadcrumb">
                    <a href="index.html" title="">Home</a> / <span>404</span>
                </div>
            </div>
        </div> <!-- **Breadcrumb Section Ends** -->

        <!-- **Content Main** -->
        <section class="content-main">

            <!-- **Primary** -->
            <div class="content-full-width" id="primary">

                <div class="fullwidth-section">
                    <div class="fullwidth-bg">
                        <div class="container">

                            <div class="page_info">
                                <h3 class="title center"><span> <i class="fa fa-user"></i></span> Account Center - Member Registration </h3>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="fullwidth-section dt-sc-parallax" style="background-image: url(http://placehold.it/1920x930/&text=Parallax);">
                    <div class="fullwidth-bg">
                        <div class="container">

                            <div class="dt-sc-hr-invisible-medium"></div>
                            <div class="dt-sc-clear"></div>

                            <div class="form-wrapper register">
                                <form id="reg_form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <p class="dt-sc-one-half column first">
                                        <input type="text" placeholder="{{ __('First Name') }}" id="fname"  class="@error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus />
                                        @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </p>

                                    <p class="dt-sc-one-half column">
                                        <input type="text" placeholder="{{ __('Last Name') }}" id="lname" value="{{ old('lname') }}" name="lname" />
                                    </p>

                                    <p class="dt-sc-one-half column first">
                                        <input id="email" placeholder="{{ __('Email Address') }}" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </p>

                                    <p class="dt-sc-one-half column">
                                        <input id="password" type="password" placeholder="{{ __('Password') }}" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    </p>

                                    <p class="dt-sc-one-half column first">
                                        <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password" />
                                    </p>
                                    <div class="dt-sc-clear"></div>
                                    <button type="submit" class="dt-sc-button small"> {{ __('Create an Account') }} </button>
                                </form>
                            </div>

                            <div class="dt-sc-hr-invisible-medium"></div>
                            <div class="dt-sc-clear"></div>

                        </div>
                    </div>
                </div>

                <div class="fullwidth-section">
                    <div class="fullwidth-bg">
                        <div class="container">

                            <div class="dt-sc-hr-invisible-medium"></div>
                            <div class="dt-sc-clear"></div>

                            <div class="newsletter-container">
                                <h2>Subscribe Newsletter for updates</h2>
                                <div class="dt-sc-one-half column first">
                                    <p>Nam libero tempore, eu volutpat enim diam eget metus cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>
                                </div>

                                <div class="dt-sc-one-half column last">
                                    <form name="frmnewsletter" class="newsletter-form" action="php/subscribe.php" method="post">
                                        <input type="email" required="" placeholder="Enter Your Email ID" name="mc_email">
                                        <input type="submit" value="Submit" class="dt-sc-button" name="btnsubscribe">
                                    </form>
                                    <div id="ajax_subscribe_msg"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div><!-- **Primary - End** -->
        </section> <!-- **Content Main Ends** -->
    </div> <!-- **Main Ends** -->
   @endsection
