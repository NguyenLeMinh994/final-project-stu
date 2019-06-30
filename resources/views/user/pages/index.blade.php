@extends('user.layouts.master')
@section('title', 'Trang chủ')
@section('css')
@endsection

@section('container')

<section class="home-slider owl-carousel">
  @foreach ($slideList as $slide)
  <div class="slider-item" style="background-image:url(upload/{{ $slide->getSanPham->hinhdaidien }});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
        <div class="col-md-6 text p-4 ftco-animate">
          <h1 class="mb-3">
            {{ $slide->getSanPham->ten }}
          </h1>
          <span class="location d-block mb-3"><i class="icon-my_location"></i> Melbourne, Vic 3004</span>
          <p>
            {!! str_limit($slide->getSanPham->noidung, $limit = 150, $end = '...') !!}
          </p>
          <span class="price">$28,000</span>
          <a href="{{ route('detail', ['id'=>$slide->getSanPham->id]) }}" class="btn-custom p-3 px-4 bg-primary">Xem chi
            tiết <span class="icon-plus ml-1"></span></a>
        </div>
      </div>
    </div>
  </div>
  @endforeach


</section>


<section class="ftco-search">
  <div class="container">
    <div class="row">
      <div class="col-md-12 search-wrap">
        <h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Tìm Kiếm Bất
          Động Sản
        </h2>
        <form action="{{route('timkiem')}}" method="get" class="search-property">

          <div class="row">

            <div class="col-md align-items-end">
              <div class="form-group">
                <label for="#">Tìm kiếm</label>
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-search"></span></div>
                    <input type="search" class="form-control" id="usr" name="key">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md align-items-end">
              <div class="form-group">
                <label for="#">Tỉnh/Thành Phố</label>
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="idThanhPho" class="form-control">
                      <option value="">Tỉnh/Thành Phố</option>
                      @foreach ($tinhThanhPhos as $thanhPho)
                      <option value={!! $thanhPho->id !!}>{{$thanhPho->ten}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md align-items-end">
              <div class="form-group">
                <label for="#">Quận/Huyện</label>
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="idQuan" class="form-control">
                      <option value="">Quận</option>

                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md align-self-end">
              <div class="form-group">
                <div class="form-field">
                  <input type="submit" value="Tìm kiếm" class="form-control btn btn-primary">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-properties">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        {{-- <span class="subheading">Recent Posts</span> --}}
        <h2 class="mb-4">Bài mới</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="properties-slider owl-carousel ftco-animate">

          @foreach ($newPostList as $newPost)
          <div class="item">
            <div class="properties">
              <a href="{{ route('detail', ['id'=>$newPost->id]) }}"
                class="img d-flex justify-content-center align-items-center"
                style="background-image: url(upload/{{ $newPost->hinhdaidien }});">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <span class="status sale">Sale</span>
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="{{ route('detail', ['id'=>$newPost->id]) }}"> {{ $newPost->ten }}</a></h3>
                    {{-- <p>Apartment</p> --}}
                  </div>
                  <div class="two">
                    <span class="price">$20,000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach


        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        {{-- <span class="subheading">Special Offers</span> --}}
        <h2 class="mb-4">Bài viết nổi bật</h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">

      @foreach ($featuredPosts as $post)
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="properties">
          <a href="{{ route('detail', ['id'=>$post->id]) }}"
            class="img img-2 d-flex justify-content-center align-items-center"
            style="background-image: url(upload/{{ $post->hinhdaidien }});">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <span class="status sale">Sale</span>
            <div class="d-flex">
              <div class="one">
                <h3><a href="{{ route('detail', ['id'=>$post->id]) }}">{{ $post->ten }}</a></h3>
                <p>Apartment</p>
              </div>
              <div class="two">
                <span class="price">$20,000</span>
              </div>
            </div>
            <p>Far far away, behind the word mountains, far from the countries</p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="flaticon-selection"></i> 250sqft</span>
              <span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
              <span><i class="flaticon-bed"></i> 4</span>
            </p>
          </div>
        </div>
      </div>
      @endforeach



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