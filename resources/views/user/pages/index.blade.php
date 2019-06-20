<?php
  include("../resources/views/user/layouts/catchuoi.php");
?>

@extends('user.layouts.master')
@section('title', 'Trang chủ')
@section('css')
@endsection

@section('container')

@include('user.layouts.slide')

@include('user.layouts.search')


</div>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-pin"></span></div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">TÌM ĐỊA ĐIỂM</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-detective"></span></div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">THÀNH VIÊN</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-house"></span></div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">MUA &amp; THUÊ BẤT ĐỘNG SẢN</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-purse"></span></div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">CƠ HỘI KIẾM TIỀN</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">CÁC TIN BẤT ĐỘNG SẢN</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      @foreach($SanPham as $All)
      <div class="col-md-4 ftco-animate">
        <div class="properties">
          <a href={{ route("detail",["id"=>$All['id']]) }}
            class="img img-2 d-flex justify-content-center align-items-center"
            style="background-image: url(upload/{{$All->hinhdaidien}});">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <span class="status sale">{{$All->getLoai->ten}}</span>
            <div class="d-flex">
              <div class="gia">
                <span class="price">{{number_format($All->gia)}} VNĐ</span>
              </div>
            </div>
            <p class="ten3">{{catchuoi($All->ten)}}</p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="flaticon-selection"></i> {{$All->dientich}} <sup>m2</sup></span>
              <span class="ml-auto"><i class="flaticon-bathtub"></i> {{$All->phongtam}}</span>
              <span><i class="flaticon-bed"></i> {{$All->phongngu}}</span>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        {{$SanPham->links()}}
      </div>
    </div>
  </div>
</section>



<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-4">CÓ THỂ BẠN CHƯA BIẾT VỀ CHÚNG TÔI ?</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="9000">0</strong>
                <span>SỰ HÀI LÒNG</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="10000">0</strong>
                <span>BẤT ĐỘNG SẢN</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1000">0</strong>
                <span>Agents</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="100">0</strong>
                <span>ƯU ĐÃI</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 ftco-animate">
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(asset/user/images/Tuan.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary
                      regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                      mouth.</p>
                    <p class="name">TRẦN THANH TUẤN</p>
                    <span class="position">Quản Lý</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(asset/user/images/Minh.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary
                      regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                      mouth.</p>
                    <p class="name">NGUYỄN LÊ MINH</p>
                    <span class="position">Quản Lý</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(asset/user/images/Tuan.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary
                      regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                      mouth.</p>
                    <p class="name">TRẦN THANH TUẤN</p>
                    <span class="position">Thành Viên</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(asset/user/images/Minh.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary
                      regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                      mouth.</p>
                    <p class="name">NGUYỄN LÊ MINH</p>
                    <span class="position">Thành Viên</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Read Articles</span>
        <h2>Recent Blog</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
          </a>
          <div class="text mt-3 d-block">
            <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
            </h3>
            <div class="meta mb-3">
              <div><a href="#">Dec 6, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
          </a>
          <div class="text mt-3">
            <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
            </h3>
            <div class="meta mb-3">
              <div><a href="#">Dec 6, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
          </a>
          <div class="text mt-3">
            <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
            </h3>
            <div class="meta mb-3">
              <div><a href="#">Dec 6, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
          </a>
          <div class="text mt-3">
            <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
            </h3>
            <div class="meta mb-3">
              <div><a href="#">Dec 6, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('user.layouts.dangky')

@endsection

@section('js')
<script>
  $(document).ready(function () {

  $('#idThanhPho').change(function (e) { 
    e.preventDefault();
    var idThanhPho=$(this).val();
    var idQuan=$('#idQuan');
    
    var htmlQuan=`<option value="">Quận</option>`;
    if(idThanhPho=='')
    {
      idQuan.html(htmlQuan);
    }
    else{
      $.ajax({
        type: "get",
        url: "{{ url('/ajax/danh-sach-quan/') }}/"+idThanhPho,
        success: function (response) {

          $.each( response, function( key, value ) {
            htmlQuan+=`<option value="`+value.id+`">`+value.ten+`</option>`
            
          });
          idQuan.html(htmlQuan);
          
        }
      });
    }
    
  });


});
</script>
@endsection