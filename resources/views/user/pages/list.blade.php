<?php
  include("../resources/views/user/layouts/catchuoi.php");
?>

@extends('user.layouts.master') 
@section('title', 'Danh sách') 
@section('css')
@endsection
 
@section('container')
<div class="hero-wrap" style="background-image: url('asset/user/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Danh sách</span></p>
                <h1 class="mb-3 bread">Dang sách</h1>
            </div>
        </div>
    </div>
</div>

@include('user.layouts.search')

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($listSanPham as $listSP)
            <div class="col-md-4 ftco-animate">
                <div class="properties">
                    <a href={{ route("detail",["id"=>$listSP['id']]) }} class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(upload/{{$listSP->hinhdaidien}});">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <span class="status sale">{{$listSP->getLoai->ten}}</span>
                        <div class="d-flex">
                            <div class="gia">
                                <span class="price">{{number_format($listSP->gia)}} VNĐ</span>
                            </div>
                        </div>
                        <p class="ten3">{{catchuoi($listSP->ten)}}</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="flaticon-selection"></i>   {{$listSP->dientich}}  <sup>m2</sup></span>
                            <span class="ml-auto"><i class="flaticon-bathtub"></i>  {{$listSP->phongtam}}</span>
                            <span><i class="flaticon-bed"></i>  {{$listSP->phongngu}}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                        {{$listSanPham->links()}}
            </div>
        </div>
    </div>
</section>

@include('user.layouts.dangky')

@endsection

@section('js')
<script >
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