<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <base href="{{ asset('') }}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="stylesheet" href="asset/user/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="asset/user/css/animate.css">

  <link rel="stylesheet" href="asset/user/css/owl.carousel.min.css">
  <link rel="stylesheet" href="asset/user/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="asset/user/css/magnific-popup.css">

  <link rel="stylesheet" href="asset/user/css/aos.css">

  <link rel="stylesheet" href="asset/user/css/ionicons.min.css">

  <link rel="stylesheet" href="asset/user/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="asset/user/css/jquery.timepicker.css">


  <link rel="stylesheet" href="asset/user/css/flaticon.css">
  <link rel="stylesheet" href="asset/user/css/icomoon.css">
  <link rel="stylesheet" href="asset/user/css/style.css">
  <style type="text/css">
    .ten {
      width: 300px;
    }

    .gia {
      width: 200px;
      color: red;
    }

    .ten1 {
      width: 150px;
    }

    .gia1 {
      width: 150;
      color: red;
    }

    .ten3 {
      height: 40px;
    }
  </style>
  @yield('css')

</head>

<body>
  @include('user.layouts.header')
  <!-- END nav -->

  @yield('container')




  @include('user.layouts.footer')
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg>
      </div>


  <script src="asset/user/js/jquery.min.js"></script>
  <script src="asset/user/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="asset/user/js/popper.min.js"></script>
  <script src="asset/user/js/bootstrap.min.js"></script>
  <script src="asset/user/js/jquery.easing.1.3.js"></script>
  <script src="asset/user/js/jquery.waypoints.min.js"></script>
  <script src="asset/user/js/jquery.stellar.min.js"></script>
  <script src="asset/user/js/owl.carousel.min.js"></script>
  <script src="asset/user/js/jquery.magnific-popup.min.js"></script>
  <script src="asset/user/js/aos.js"></script>
  <script src="asset/user/js/jquery.animateNumber.min.js"></script>
  <script src="asset/user/js/bootstrap-datepicker.js"></script>
  <script src="asset/user/js/jquery.timepicker.min.js"></script>
  <script src="asset/user/js/scrollax.min.js"></script>
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="asset/user/js/google-map.js"></script>-->
  <script src="asset/user/js/main.js"></script>

  @yield('js')
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    $("input[name='keyFrom'], input[name='keyTo']").on('keyup focus', function () {
        const thisPrice = $(this);
        let input = thisPrice.val();
        input = input.replace(/[\D\s\._\-]+/g, "");

        input = input ? parseInt(input, 10) : 0;

        thisPrice.val(function () {
            return (input === 0) ? "" : input;
        });
    });
    window.fbAsyncInit = function() {
          FB.init({
          xfbml            : true,
          version          : 'v4.0'
          });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your customer chat code -->
  <div class="fb-customerchat" attribution=setup_tool page_id="101845817826617"
    logged_in_greeting="Chào! chúng tôi có thể giúp gì cho bạn?"
    logged_out_greeting="Chào! chúng tôi có thể giúp gì cho bạn?">
  </div>

  {{-- chat FaceBook --}}

</body>

</html>