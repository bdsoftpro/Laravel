<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js has-loader"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/ico">

    <!-- CSS Stylesheets -->
    <link id="default-css" rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css">
    <link id="default-css" rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link id="shortcodes-css" rel="stylesheet" href="{{ asset('css/shortcodes.css') }}" type="text/css">
    <link id="responsive-css" rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css">
    <link id="skin-css" rel="stylesheet" href="{{ asset('css/skins/electricblue/style.css') }}" type="text/css">

    <!-- Additional Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/component.css') }}" type="text/css">
    <link href="{{ asset('css/pace-theme-loading-bar.css') }}" rel="stylesheet" media="all" />
    @yield('top-css')

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset( 'css/font-awesome.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset( 'css/layerslider/css/layerslider.css') }}" type="text/css">

    <script type="text/javascript" src="{{ asset( 'js/modernizr-2.6.2.min.js') }}"></script>

</head>

<body class="page-template-tpl-fullwidth-php">
<!-- **Wrapper** -->
<div class="wrapper">
    @include('pages.partials.menu')
    @yield('content')
    @include('pages.partials.footer')
</div>
<!-- **jQuery** -->

<script src="{{ asset( 'js/jquery.js') }}"></script>
<script src="{{ asset( 'js/jquery-migrate-1.2.1.min.js') }}"></script>

<script type="text/javascript" src="{{ asset( 'js/pace.min.js') }}"></script>

<script type="text/javascript" src="{{ asset( 'js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.dlmenu.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.ui.totop.min.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery-easing-1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.carouFredSel-6.2.0-packed.js') }}"></script>
@yield('bottom-script')
<script type="text/javascript" src="{{ asset( 'js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/custom.js') }}"></script>
</body>
</html>
