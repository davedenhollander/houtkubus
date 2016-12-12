<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Smarty Admin</title>
    <meta name="description" content="" />
    <meta name="Author" content="Niels Steenman" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

    <!-- WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="dashboard/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="dashboard/assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="dashboard/assets/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="dashboard/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

</head>

<body>


<!-- WRAPPER -->
<div id="wrapper">

    <!-- ASIDE -->
    <aside id="aside">

        @include('admin.templates.nav')

    </aside>
    <!-- /ASIDE -->


    <!-- HEADER -->
    <header id="header">

        @include('admin.templates.header')

    </header>
    <!-- /HEADER -->

    <!-- MIDDLE -->
    <section id="middle">

        <!-- page title -->
        <header id="page-header">
            <h1>@yield('title')</h1>
            <ol class="breadcrumb">
                @yield('breadcrumb')
            </ol>
        </header>
        <!-- /page title -->

        <!-- page content -->
        <div id="content" class="padding-20">
            @yield('content')
        </div>
        <!-- /page content -->

    </section>
    <!-- /MIDDLE -->

</div>


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = 'dashboard/assets/plugins/';</script>
<script type="text/javascript" src="dashboard/assets/plugins/jquery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="dashboard/assets/js/app.js"></script>

</body>
</html>