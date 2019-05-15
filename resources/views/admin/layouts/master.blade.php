<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->




<!-- Tieu Long Lanh Kute From Baobinh.net Free CSS HTML Responsive template download-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Minovate - Admin Dashboard</title>
    <base href="{{ asset('') }}" > 
    <link rel="icon" type="image/ico" href="asset/admin/images/favicon.ico" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
    <!-- vendor css files -->
    <link rel="stylesheet" href="asset/admin/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="asset/admin/css/vendor/animate.css">
    <link rel="stylesheet" href="asset/admin/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="asset/admin/js/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" href="asset/admin/js/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="asset/admin/css/vendor/weather-icons.min.css">
    @yield('css')
    <!-- project main css files -->
    <link rel="stylesheet" href="asset/admin/css/main.css">
    <!--/ stylesheets -->


    <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
    <script src="asset/admin/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!--/ modernizr -->




</head>





<body id="minovate" class="appWrapper">


    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
    <div id="wrap" class="animsition">

        <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
        @include('admin/layouts/header')
        <!--/ HEADER Content  -->





        <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
        @include('admin/layouts/sidebar')
        
        <!--/ CONTROLS Content -->




        <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
        @yield('container')
        
        <!--/ CONTENT -->






    </div>
    <!--/ Application Content -->














    <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->

    <script src="asset/admin/js/vendor/jquery/jquery-1.11.2.min.js"></script>
    
    <script src="asset/admin/js/vendor/bootstrap/bootstrap.min.js"></script>
    {{--  --}}
    <script src="asset/admin/js/vendor/jRespond/jRespond.min.js"></script>
        {{--  --}}
    <script src="asset/admin/js/vendor/sparkline/jquery.sparkline.min.js"></script>
        {{--  --}}
    <script src="asset/admin/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>
        {{--  --}}
    <script src="asset/admin/js/vendor/animsition/js/jquery.animsition.min.js"></script>
        {{--  --}}
    <script src="asset/admin/js/vendor/screenfull/screenfull.min.js"></script>
    <!--/ vendor javascripts -->



    <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
    <script src="asset/admin/js/main.js"></script>
    <!--/ custom javascripts -->
    @yield('js')





    <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
    
    <!--/ Page Specific Scripts -->





    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        //     function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        //     e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        //     e.src='../../www.google-analytics.com/analytics.js';
        //     r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        //     ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

</body>

<!-- Tieu Long Lanh Kute From Baobinh.net Free CSS HTML Responsive template download-->

</html>