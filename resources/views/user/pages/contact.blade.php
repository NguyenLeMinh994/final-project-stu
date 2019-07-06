@extends('user.layouts.master')

@section('container')

<div class="hero-wrap" style="background-image: url('asset/user/images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Liên Hệ</span></p>
        <h1 class="mb-3 bread">Liên Hệ CHúng Tôi</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h3">THÔNG TIN LIÊN HỆ:</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Địa chỉ:</span> 180 Cao Lổ, Phường 4 Quận 8 Thành Phố Hồ Chí Minh</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Điện thoại 1:</span> <a href="tel://1234567920">084.786.000.286</a></p>
          <p><span>Điện thoại 2:</span> <a href="tel://1234567920">084.909.331.312</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Email:</span> <a href="mailto:info@yoursite.com">stranthanhtuans@gmail.com</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Website</span> <a href="#">Chưa cập nhật</a></p>
        </div>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="#" class="bg-white p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Vui lòng nhập Tên ...">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Vui lòng nhập Email của bạn ...">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Vui lòng nhập tiêu đề ...">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control"
              placeholder="Vui lòng nhập nội dung ..."></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Gửi Email" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>

      <div class="col-md-6 d-flex">
        <div id="map" class="bg-white"></div>
      </div>
    </div>
  </div>
</section>


@endsection

@section('js')
<script>
  function initMap() {
        var uluru = {lat: 10.746297, lng: 106.679722};
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 18, center: uluru});
        var marker = new google.maps.Marker({position: uluru, map: map});
      }
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwM5SEKHHjuZb8na2Z3zfd7NuyhBPfOmU&callback=initMap">
</script>
@endsection