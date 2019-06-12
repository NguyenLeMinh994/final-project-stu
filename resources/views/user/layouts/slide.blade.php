

<section class="home-slider owl-carousel">
	@foreach($Silde as $silde)
  <div class="slider-item" style="background-image:url(asset/user/images/{{$silde->getSanPham->hinhdaidien}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
        <div class="col-md-6 text p-4 ftco-animate">
          <h1 class="mb-3">{{$silde->getSanPham->diachi}}</h1>
          <span class="location d-block mb-3"><i class="icon-my_location"> </i>Quận {{$silde->getSanPham->getQuan->ten}} , {{$silde->getSanPham->getTinhThanhPho->loai}} {{$silde->getSanPham->getTinhThanhPho->ten}}</span>
          <p>{{$silde->getSanPham->noidung}}</p>
          <span class="price">{{number_format($silde->getSanPham->gia)}} VNĐ</span>
          <a href={{ route("detail",["id"=>$silde['id']]) }} class="btn-custom p-3 px-4 bg-primary">Xem chi tiết <span class="icon-plus ml-1"></span></a>
        </div>
      </div>
    </div>
  </div>
    @endforeach

</section>