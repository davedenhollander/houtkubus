<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Onze vloeren leggen zichzelf - Houtkubus</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="De Houtkubus legt vloeren" />
    <meta name="Author" content="Flint Webmedia" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
</head>

<!--
    AVAILABLE BODY CLASSES:

    smoothscroll 			= create a browser smooth scroll
    enable-animation		= enable WOW animations

    bg-grey					= grey background
    grain-grey				= grey grain background
    grain-blue				= blue grain background
    grain-green				= green grain background
    grain-blue				= blue grain background
    grain-orange			= orange grain background
    grain-yellow			= yellow grain background

    boxed 					= boxed layout
    pattern1 ... patern11	= pattern background
    menu-vertical-hide		= hidden, open on click

    BACKGROUND IMAGE [together with .boxed class]
    data-background="assets/images/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation">

<!-- wrapper -->
<div id="wrapper">

    <div id="header" class="sticky clearfix">
        @include('app.templates.header')
    </div>

    <section class="page-header">
        <div class="container">

            <h1>BLANK PAGE</h1>

            <!-- breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Blank Page</li>
            </ol><!-- /breadcrumbs -->

        </div>
    </section>
    <!-- /PAGE HEADER -->

    <!-- -->
    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>
    <!-- / -->

    <!-- FOOTER -->
    <footer id="footer">
        @include('app.templates.footer')
    </footer>
    <!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

<script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html>