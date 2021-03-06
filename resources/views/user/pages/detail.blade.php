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
                        <p>{{ $getDetail->getLoai->ten}}</p>
                        <p class="gia">Giá: {{number_format($getDetail->gia)}} VNĐ</p>
                        <p class="rate mb-4">
                            <span class="loc"><a href="#"><i class="icon-map"></i> {{$getDetail->diachi}} -
                                    {{$getDetail->getQuan->ten}} - {{$getDetail->getTinhThanhPho->ten}}</a></span>

                        </p>
                        <div class="d-md-flex mt-5 mb-5">
                            <ul>
                                <li><span>Số Tầng: </span> {{$getDetail->sotang}} Tầng</li>
                                <li><span>Phòng Ngủ: </span> {{$getDetail->phongngu}} <i class="flaticon-bed"></i></li>
                                <li><span>Phòng Tắm: </span> {{$getDetail->phongtam}} <i class="flaticon-bathtub"></i>
                                </li>
                                <li><span>Diện Tích: </span> {{$getDetail->dientich}} <sup>m2</sup></li>
                            </ul>
                        </div>
                        <p>{!!$getDetail->noidung!!}</p>
                    </div>


                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">VỊ TRÍ - TIỆN ÍCH XUNG QUANH</h4>
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
                        {{-- <h3>LOẠI BẤT ĐỘNG SẢN</h3> --}}
                        {{-- @if (count($loaiOfMenus)>0)
                        @foreach ($loaiOfMenus as $item)
                        <li>{{ $item->ten }}</li>
                        @if (count($item->getChildren)>0)
                        @foreach ($item->getChildren as $child)
                        <li>
                            <a href="#">{{ $child->ten }}
                                @foreach($child->getSanPhams as $dem)
                                <span>
                                    {{count($child->getSanPhams)}}
                                </span>
                                @endforeach
                            </a>
                        </li>
                        @endforeach
                        @endif
                        @endforeach
                        @endif --}}
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