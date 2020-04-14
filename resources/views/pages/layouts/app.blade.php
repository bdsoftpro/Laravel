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
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}" type="text/css">
    <link href="{{ asset('css/pace-theme-loading-bar.css') }}" rel="stylesheet" media="all" />

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
    @include('pages.partials.menu', ['page' => $page])
    @include('pages.partials.slider', ['page' => $page])
    @yield('content')
    @include('pages.partials.footer', ['page' => $page])
</div>
<!-- **jQuery** -->

<script src="{{ asset( 'js/jquery.js') }}"></script>
<script src="{{ asset( 'js/jquery-migrate-1.2.1.min.js') }}"></script>

<script type="text/javascript" src="{{ asset( 'js/pace.min.js') }}"></script>

<script type="text/javascript" src="{{ asset( 'js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.dlmenu.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/inview.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.tabs.min.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.tipTip.minified.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.donutchart.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.ui.totop.min.js') }}"></script>

<script type="text/javascript" src="{{ asset( 'js/jquery-easing-1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.prettyPhoto.js') }}"></script>

<script type="text/javascript" src="{{ asset( 'js/jquery.carouFredSel-6.2.0-packed.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.fitvids.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.bxslider.js') }}"></script>

<script type="text/javascript" src="{{ asset( 'js/jquery.parallax-1.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset( 'js/jquery.animateNumber.min.js') }}"></script>

<script type="text/javascript" src="{{ asset( 'js/jquery.validate.min.js') }}"></script>

<script type="text/javascript" src="{{ asset( 'js/custom.js') }}"></script>

<script src="{{ asset( 'js/layerslider/js/greensock.js') }}" type="text/javascript"></script>
<script src="{{ asset( 'js/layerslider/js/layerslider.transitions.js') }}" type="text/javascript"></script>
<script src="{{ asset( 'js/layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    var lsjQuery = jQuery;
    lsjQuery(document).ready(function() {
        if(typeof lsjQuery.fn.layerSlider == "undefined") {
            lsShowNotice('layerslider_6','jquery');
        }
        else {
            lsjQuery("#layerslider_6").layerSlider({
                responsiveUnder	: 	1170,
                layersContainer	: 	1170,
                pauseOnHover	: 	false,
                forceLoopNum	: 	false,
                autoPlayVideos	: 	false,
                skinsPath		:   "{{ asset( 'js/layerslider/skins/') }}"})
        }
    });

    jQuery(window).load(function() {

        //PAGE SLIDER...
        if(jQuery('.left-slide').length) {
            jQuery('.left-slide').each(function(){
                var $this = jQuery(this).find('.page-slider');
                $this.carouFredSel({
                    responsive: true,
                    auto: false,
                    width: '100%',
                    height: 'auto',
                    scroll: {
                        fx: "cover-fade",
                        duration: 800
                    },
                    items: { width: $this.find("li").width(), height: 'auto', visible: { min: 1, max: 1 } },
                    pagination: {
                        container: ".left-slide-nav-links",
                        anchorBuilder: false
                    }
                });
            });
        }

    });

</script>
</body>
</html>
