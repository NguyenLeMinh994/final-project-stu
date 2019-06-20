<!doctype html>

<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <title>Xeria - Responsive Admin Dashboard Template</title>
    <base href={{asset('')}}>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="asset/admin/images/favicon.ico">

    <!-- third party css -->
    @yield('css')

    <!-- third party css end -->
    <!-- App css -->
    <link href="asset/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="asset/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="asset/admin/css/app.min.css" rel="stylesheet" type="text/css" />


</head>

<body>
    @include('admin.layouts.header')

    @yield('container')
    <!-- Footer Start -->
    @include('admin.layouts.footer')
    <!-- end Footer -->


    <!-- Vendor js -->
    <script src="asset/admin/js/vendor.min.js"></script>

    <!-- Third Party js-->
    @yield('js')


    <!-- Dashboard init -->
    <script src="asset/admin/js/pages/datatables.init.js"></script>

    <!-- App js-->
    <script src="asset/admin/js/app.min.js"></script>

</body>


</html>