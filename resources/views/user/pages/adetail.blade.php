@extends('user.layouts.master')

@section('title', 'Page Title')

@section('css')
    
@endsection

@section('container')
    
@endsection


@section('js')
    
@endsection

@extends('user.layouts.master') 
@section('title', 'Chi tiết') 
@section('css')

@endsection
 
@section('container')
<div class="hero-wrap" style="background-image: url('asset/user/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span>                    <span>Property Single</span></p>
                <h1 class="mb-3 bread">Property Single</h1>
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
                            <div class="item">
                                <div class="properties-img" style="background-image: url(asset/user/images/{{$getDetail->hinhdaidien}});"></div>
                            </div>
                            <div class="item">
                                <div class="properties-img" style="background-image: url(asset/user/images/{{$getDetail->hinhdaidien}});"></div>
                            </div>
                            <div class="item">
                                <div class="properties-img" style="background-image: url(asset/user/images/{{$getDetail->hinhdaidien}});"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
                        <h2>{{$getDetail->getLoai->ten}}</h2>
                        <p class="gia">Giá: {{number_format($getDetail->gia)}} VNĐ</p>
                        <p class="rate mb-4">
                            <span class="loc"><a href="#"><i class="icon-map"></i> {{$getDetail->diachi}} - Quận {{$getDetail->getQuan->ten}} - Thành Phố {{$getDetail->getTinhThanhPho->ten}}</a></span>
                        </p>
                        <div class="d-md-flex mt-5 mb-5">
                            <ul>
                                <li><span>Số Tầng: </span> {{$getDetail->sotang}} Tầng</li>
                                <li><span>Phòng Ngủ: </span> {{$getDetail->phongngu}} <i class="flaticon-bed"></i></li>
                                <li><span>Phòng Tắm: </span> {{$getDetail->phongtam}} <i class="flaticon-bathtub"></i></li>
                                <li><span>Diện Tích: </span> {{$getDetail->dientich}} <sup>m2</sup></li>
                            </ul>
                        </div>
                        <p>{{$getDetail->noidung}}</p>
                    </div>

                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                        <h3 class="mb-4">Take A Tour</h3>
                        <div class="block-16">
                            <figure>
                                <img src="asset/user/images/properties-6.jpg" alt="Image placeholder" class="img-fluid">
                                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Review &amp; Ratings</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <form method="post" class="star-rating">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                                  <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
                                              </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                             <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
                                       </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                                          </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-4">xxxx</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="map" style="height:500px;width:700px"></div>
                                </div>
                            </div>
                        </div>
                   
                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-5">
                        <h4 class="mb-4">Related Properties</h4>
                        <div class="row">
                            <div class="col-md-6 ftco-animate">
                                <div class="properties">
                                    <a href="property-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(asset/user/images/properties-1.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="property-single.html">North Parchmore Street</a></h3>
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
                            <div class="col-md-6 ftco-animate">
                                <div class="properties">
                                    <a href="property-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(asset/user/images/properties-2.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="property-single.html">North Parchmore Street</a></h3>
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
                        </div>
                    </div>

                </div>
            </div>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        <li><a href="#">Properties <span>(12)</span></a></li>
                        <li><a href="#">Home <span>(22)</span></a></li>
                        <li><a href="#">House <span>(37)</span></a></li>
                        <li><a href="#">Villa <span>(42)</span></a></li>
                        <li><a href="#">Apartment <span>(14)</span></a></li>
                        <li><a href="#">Condominium <span>(140)</span></a></li>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(asset/user/images/image_1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(asset/user/images/image_2.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(asset/user/images/image_3.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">dish</a>
                        <a href="#" class="tag-cloud-link">menu</a>
                        <a href="#" class="tag-cloud-link">food</a>
                        <a href="#" class="tag-cloud-link">sweet</a>
                        <a href="#" class="tag-cloud-link">tasty</a>
                        <a href="#" class="tag-cloud-link">delicious</a>
                        <a href="#" class="tag-cloud-link">desserts</a>
                        <a href="#" class="tag-cloud-link">drinks</a>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate
                        quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore
                        eos fugit cupiditate numquam!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .section -->



<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Subcribe to our Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                        blind texts. Separated they live in</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
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
    var map;
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
          });
        }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKHzJKZMdYDokKiTxug3iuxfTgFf1w220&callback=initMap" async defer>

</script>
      
@endsection