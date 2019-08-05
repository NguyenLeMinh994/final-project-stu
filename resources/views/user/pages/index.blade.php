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
          <h1 class="mb-3">{{ $slide->getSanPham->ten }}</h1>
          <span class="location d-block mb-3"><i class="icon-my_location"></i> {{ $slide->getSanPham->diachi }}</span>
          <p>
            {!! str_limit($slide->getSanPham->ten, $limit = 20, $end = '...') !!}
          </p>
          <span class="price"> {{ jamReadNumForVietnamese($slide->getSanPham->gia) }} </span>
          <a href="{{ route('detail', ['id'=> $slide->getSanPham->id]) }}" class="btn-custom p-3 px-4 bg-primary">View
            Details <span class="icon-plus ml-1"></span></a>
        </div>
      </div>
    </div>
  </div>


  @endforeach


</section>


@include('user.pages.includes.search')

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
              <a href="{{ route('detail', ['id'=> $newPost->id]) }}"
                class="img d-flex justify-content-center align-items-center"
                style="background-image: url(upload/{{ $newPost->hinhdaidien }});">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <span class="status sale">Mới</span>
                <div class="d-flex">

                  <div class="gia">
                    <span class="price">{{ jamReadNumForVietnamese($newPost->gia) }}</span>
                  </div>
                </div>

                <div class="ten3">
                  <h3><a href="{{ route('detail', ['id'=> $newPost->id]) }}">
                      {!! str_limit($newPost->ten, $limit = 20, $end = '...') !!}
                    </a>
                  </h3>
                </div>

                {{-- <p>Apartment</p> --}}

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
                <div class="btn-group float-left">
                  <ul class="nav nav-tabs pgl-pro-tabs text-center animation" role="tablist">
                    <li class="active">
                      <a href="#all" role="tab" data-toggle="tab" class="btn btn-sm">
                        <i class="fas fa-th"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#house" role="tab" data-toggle="tab" class="btn btn-sm"><i class="fas fa-th-list"></i>
                      </a>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="all">
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
                                <span class="status rent">Hot</span>
                                <div class="d-flex">
                                    <div class="gia">
                                        <span class="price">{{ jamReadNumForVietnamese($post->gia) }}</span>
                                    </div>

                                </div>
                                <div class="ten3">
                                    <h3><a href="{{ route('detail', ['id'=>$post->id]) }}">{{ $post->ten }}</a></h3>
                                    {{-- <p>Apartment</p> --}}
                                </div>
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
            <div class="tab-pane" id="house">
                <div class="row">
                    @foreach ($featuredPosts as $post)

                    <div class="card mb-3 col-md-12">
                        <div class="row no-gutters">
                            <div class="col-md-4 properties">
                                <a href="{{ route('detail', ['id'=>$post->id]) }}"
                                    class="img img-2 d-flex justify-content-center align-items-center"
                                    style="background-image: url(upload/{{ $post->hinhdaidien }});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$post->ten}}</h5>
                                    <p class="card-text gia">{{ jamReadNumForVietnamese($post->gia) }}</p>
                                    <p class="card-text">{!! str_limit($post->noidung, $limit = 20, $end = '...') !!}
                                    </p>
                                    <p class="card-text"><i class="icon-my_location"></i> {{$post->diachi}},
                                        {{$post->getQuan->ten}},
                                        {{$post->getTinhThanhPho->ten}}</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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