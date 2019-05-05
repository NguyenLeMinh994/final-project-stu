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

        <div class="page page-core page-login">

            <div class="text-center">
                <h3 class="text-light text-white"><span class="text-lightred">M</span>INOVATE</h3>
            </div>

            <div class="container w-420 p-15 bg-white mt-40 text-center">
                

                <h2 class="text-light text-greensea">Đăng Nhập</h2>
                @if (count($errors)>0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $err)
                    {{ $err }} <br>
                    @endforeach
                </div>
                @endif
                <form  action={{ route("postLogin") }} name="form" class="form-validation mt-20" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control underline-input" name="txtEmail" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" name="txtPassword" placeholder="Mật khẩu" class="form-control underline-input">
                    </div>

                    <div class="form-group text-left mt-20">
                        <input type="submit" value="Đăng nhập" class="btn btn-greensea b-0 br-2 mr-5">
                        <label class="checkbox checkbox-custom-alt checkbox-custom-sm inline-block">
                                <input type="checkbox"><i></i> Remember me
                            </label>
                        <a href="forgotpass.html" class="pull-right mt-10">Quên mật khẩu?</a>
                    </div>

                </form>

                <hr class="b-3x">

                <div class="social-login text-left">

                    <ul class="pull-right list-unstyled list-inline">
                        <li class="p-0">
                            <a class="btn btn-sm btn-primary b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="p-0">
                            <a class="btn btn-sm btn-info b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="p-0">
                            <a class="btn btn-sm btn-lightred b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="p-0">
                            <a class="btn btn-sm btn-primary b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>

                    <h5>Hoặc đăng nhập với</h5>

                </div>

                <div class="bg-slategray lt wrap-reset mt-40">
                    <p class="m-0">
                        <a href={{ route('signup') }} class="text-uppercase">Tạo tài khoản</a>
                    </p>
                </div>

            </div>

        </div>



    </div>
    <!--/ Application Content -->

    <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
    <script src="asset/admin/js/vendor/jquery/jquery-1.11.2.min.js"></script>
    

    <script src="asset/admin/js/vendor/bootstrap/bootstrap.min.js"></script>

    <script src="asset/admin/js/vendor/jRespond/jRespond.min.js"></script>

    <script src="asset/admin/js/vendor/sparkline/jquery.sparkline.min.js"></script>

    <script src="asset/admin/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="asset/admin/js/vendor/animsition/js/jquery.animsition.min.js"></script>

    <script src="asset/admin/js/vendor/screenfull/screenfull.min.js"></script>
    <!--/ vendor javascripts -->




    <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
    <script src="asset/admin/js/main.js"></script>
    <!--/ custom javascripts -->






    <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
 <script>
        $(document).ready(function () {
            alert();
            function alert() { 
                if($(".alert").length)
                {
                    $(".alert").fadeTo(3000, 500).slideUp(500, function(){
                        $(".alert").slideUp(500);
                    });
                }
            }
        });
    </script>
    <!--/ Page Specific Scripts -->





    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='../../www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

</body>

<!-- Tieu Long Lanh Kute From Baobinh.net Free CSS HTML Responsive template download-->

</html>