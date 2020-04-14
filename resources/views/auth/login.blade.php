@extends('pages.layouts.basic')

@section('content')
    <!-- **Main** -->
    <div id="main">
        <!-- **Breadcrumb Section** -->
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Log-in</h1>
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
                                <h3 class="title center"><span> <i class="fa fa-user"></i></span> Account Center - Member Login Area </h3>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="fullwidth-section dt-sc-parallax" style="background-image: url(http://placehold.it/1920x930/&text=Parallax);">
                    <div class="fullwidth-bg">
                        <div class="container">

                            <div class="dt-sc-hr-invisible-medium"></div>
                            <div class="dt-sc-clear"></div>

                            <div class="form-wrapper login">
                                <form method="POST" action="{{ route('login') }}" id="loginform">
                                    @csrf
                                    <p>
                                        <input id="email" type="email" placeholder="{{ __('Username or Email') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </p>

                                    <p>
                                        <input id="password" type="password" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </p>
                                    <label><input type="checkbox" name="rememberme" id="rememberme" {{ old('rememberme') ? 'checked' : '' }}>Remember Me</label>
                                    <button type="submit" class="dt-sc-button small">
                                        {{ __('Log-In') }}
                                    </button>
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

                            <div class="dt-sc-hr-invisible"></div>
                            <div class="dt-sc-hr-invisible-small"></div>
                            <div class="dt-sc-clear"></div>

                            <div class="page_info aligncenter">
                                <h4 class="title">Need help logging-in?</h4>
                                <p>If you don't have an account yet, @if (Route::has('register')) <a href="{{ route('register') }}">Register here</a> @endif and get started..</p>
                                <p>Lost or Forgot your password? You can change it with @if (Route::has('password.request')) <a href="{{ route('password.request') }}"> {{ __('Reset Password') }} </a> @endif here..</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div><!-- **Primary - End** -->
        </section> <!-- **Content Main Ends** -->
    </div> <!-- **Main Ends** -->
@endsection
