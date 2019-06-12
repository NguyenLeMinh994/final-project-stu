<section class="ftco-section ftco-properties">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">BÀI VIẾT GẦN ĐÂY</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="properties-slider owl-carousel ftco-animate">
          @foreach($SanPham_new as $sanpham_new)
          <div class="item">
            <div class="properties">
              <a href={{ route("detail",["id"=>$sanpham_new['id']]) }} class="img d-flex justify-content-center align-items-center" style="background-image: url(asset/user/images/{{$sanpham_new->hinhdaidien}});">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <span class="status sale">{{$sanpham_new->getLoai->ten}}</span>
                <div class="d-flex">
                  <div class="gia">
                    <span class="price">{{number_format($sanpham_new->gia)}} VNĐ</span>
                  </div>
                </div>
                <p>{{$sanpham_new->noidung}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>