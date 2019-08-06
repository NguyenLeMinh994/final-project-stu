@extends('user.layouts.master')
@section('title', 'Chi tiết')
@section('css')

@endsection

@section('container')
{{-- {{ dd($getDetail->getQuan) }} --}}
<div class="hero-wrap" style="background-image: url('asset/user/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2"><a href="{{ route('home') }}">Trang chủ</a></span> <span class="mr-2"></span>
                    <span>Chi tiết</span></p>
                <h1 class="mb-3 bread">Chi tiết</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            @foreach($getDetail->getDanhSachHinhs as $hinh)
                            <div class="item">
                                <div class="properties-img"
                                    style="background-image: url(upload/images/{{$hinh->link}});">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
                        <h2>{{ $getDetail->ten }}</h2>
                        <p>Mã bài viết: {{ $getDetail->id }}</p>
                        <p class="gia">Giá: {{number_format($getDetail->gia)}} VNĐ</p>
                        <p class="rate mb-4">
                            <span class="loc">
                                <i class="icon-map"></i> {{$getDetail->diachi}} -
                                {{$getDetail->getQuan->loai}} {{$getDetail->getQuan->ten}} -
                                {{$getDetail->getTinhThanhPho->loai}} {{$getDetail->getTinhThanhPho->ten}}
                            </span>

                        </p>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <h5>Đặc điểm chính</h5>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr class="row m-0">
                                            <th class="d-inline-block col-5">Tình trạng pháp lý</th>
                                            <td class="d-inline-block col-7">
                                                <span> {{$getDetail->tinhtrangphaply}} </span>
                                            </td>
                                        </tr>
                                        <tr class="row m-0">
                                            <th class="d-inline-block col-5">Diện tích</th>
                                            <td class="d-inline-block col-7">
                                                <span>{{$getDetail->dientich}} <sup>m2</sup></span>
                                            </td>
                                        </tr>

                                        <tr class="row m-0">
                                            <th class="d-inline-block col-5">Số tầng</th>
                                            <td class="d-inline-block col-7">
                                                <span>{{$getDetail->sotang}} Tầng </span>
                                            </td>
                                        </tr>
                                        <tr class="row m-0">
                                            <th class="d-inline-block col-5">Phòng ngủ</th>
                                            <td class="d-inline-block col-7">
                                                <span>
                                                    {{$getDetail->phongngu}} <i class="flaticon-bed"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="row m-0">
                                            <th class="d-inline-block col-5">Phòng ngủ</th>
                                            <td class="d-inline-block col-7">
                                                <span>
                                                    {{$getDetail->phongtam}} <i class="flaticon-bathtub"></i>
                                                </span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12 col-sm-12">
                                <h5>Mô tả chi tiết</h5>
                            </div>
                            <div class="col-12 col-md-12 col-sm-12">
                                {!!$getDetail->noidung!!}
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">VỊ TRÍ</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div id="map" style="height:500px;width:700px"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>THÔNG TIN CHỦ BIÊN</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <label for="">Mã thành viên:</label>
                                        <span>{{$getDetail->getUser->id}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <label for="">Họ tên:</label>
                                        <span>{{$getDetail->getUser->hoten}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <label for="">Email:</label>
                                        <span>{{$getDetail->getUser->email}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <label for="">Số điện thoại:</label>
                                        <span>{{$getDetail->getUser->dienthoai}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3>BÀI VIẾT LIÊN QUAN</h3>
                    @foreach($randomPost as $post)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(upload/{{$post->hinhdaidien}});"></a>
                        <div class="text">
                            <h3 class="ten4"><a href="{{ route('detail', ['id'=>$post->id]) }}">
                                    <h6>{{$post->ten}}</h6>
                                </a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                {{-- <div><a href="#"><span class="icon-chat"></span> 19</a></div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        @foreach ($otherCategories as $categories)
                        <a href="{{ route('list', ['id'=>$categories->id]) }}"
                            class="tag-cloud-link">{{$categories->ten}}</a>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- .section -->


@endsection

@section('js')
<script>
    function initMap() {
       
        const infoItem=`<div style='float:left'><img src='upload/{{$getDetail->hinhdaidien}}' width='100' height='100'></div>
        <div style='float:right; padding: 10px;'><b>{{$getDetail->ten}}</b><br /> {{  $getDetail->diachi }}, {{ $getDetail->getQuan->ten }},{{$getDetail->getTinhThanhPho->ten}}</div>`;
        const uluru = {lat: {{$getDetail->latitude}}, lng: {{$getDetail->longitude}} };
        const map = new google.maps.Map(
            document.getElementById('map'), {zoom: 17, center: uluru
        });

        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
           
        const infowindow = new google.maps.InfoWindow({
            content:infoItem
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
      }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}&callback=initMap">
</script>
@endsection