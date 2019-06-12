<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">BÀI VIẾT NỖI BẬT</h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      @foreach($SanPham_highlights as $sanpham_noibat)
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="properties">
          <a href={{ route("detail",["id"=>$sanpham_noibat['id']]) }} class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(asset/user/images/{{$sanpham_noibat->hinhdaidien}});">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <span class="status sale">{{$sanpham_noibat->getLoai->ten}}</span>
            <div class="d-flex">
              <div class="gia1">
                <span class="price">{{number_format($sanpham_noibat->gia)}} VNĐ</span>
              </div>
            </div>
            <p>{{$sanpham_noibat->noidung}}</p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="flaticon-selection">  {{$sanpham_noibat->dientich}}  <sup>m2</sup></i></span>
              <span class="ml-auto"><i class="flaticon-bathtub"></i>  {{$sanpham_noibat->phongtam}}</span>
              <span><i class="flaticon-bed"></i>  {{$sanpham_noibat->phongngu}}</span>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>