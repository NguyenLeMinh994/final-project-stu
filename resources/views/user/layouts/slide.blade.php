<section class="home-slider owl-carousel">
  {{--
  @foreach($Slide as $slide)
  <div class="slider-item" style="background-image:url(upload/{{$slide->getSanPham->hinhdaidien }});">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
      <div class="col-md-6 text p-4 ftco-animate">
        <h1 class="mb-3">{{$slide->getSanPham->diachi}}</h1>
        <span class="location d-block mb-3"><i class="icon-my_location"> </i>Quận {{$slide->getSanPham->getQuan->ten}}
          , {{$slide->getSanPham->getTinhThanhPho->loai}} {{$slide->getSanPham->getTinhThanhPho->ten}}</span>
        <p>{{$slide->getSanPham->noidung}}</p>
        <span class="price">{{number_format($slide->getSanPham->gia)}} VNĐ</span>
        <a href={{ route("detail",["id"=>$slide['id']]) }} class="btn-custom p-3 px-4 bg-primary">Xem chi tiết <span
            class="icon-plus ml-1"></span></a>
      </div>
    </div>
  </div>
  </div>
  @endforeach --}}

</section>