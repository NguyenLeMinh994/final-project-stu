@extends('user.layouts.master')

@section('title', 'Đăng ký')

@section('css')
    
@endsection

@section('container')
<div class="hero-wrap" style="background-image: url('asset/user/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href={{ route('home')}}>Trang chủ</a></span> <span>Đăng ký</span></p>
                <h1 class="mb-3 bread">Đăng ký</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Thông tin đăng ký</h2>
            </div>
            <div class="col-md-12">
                @if (count($errors)>0)
                    
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    @foreach ($errors->all() as $err)
                        {{ $err }} <br/>
                    @endforeach
                </div>
                @endif
            </div>
            
            
        </div>
        <div class="row block-9">
            <div class="col-md-6 offset-md-3 order-md-last d-flex">
                <form action={{ route('postSignup') }} method="POST" class="bg-white p-5 contact-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtFullName" value="{{ old('txtFullName') }}" placeholder="Họ và tên*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtEmail"  value="{{ old('txtEmail') }}"  placeholder="Email*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtPhone"  value="{{ old('txtPhone') }}" placeholder="Điện thoại*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtAddress" value="{{ old('txtAddress') }}" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="txtPassword" placeholder="Mật khẩu*">
                    </div>
                    <div class="form-group">
                            <input type="password" class="form-control" name="txtPasswordConfirmation" placeholder="Nhập lại mật khẩu*">
                        </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="submit" value="Đăng ký" class="btn  btn-primary py-3 px-5">
                            </div>
                            <div class="col-md-6">
                                <a href={{ url('/auth/google/') }} class="btn btn-sm btn-social btn-google py-3">
                                    <i class="fab fa-google py-3" style="line-height: 19px;"></i>
                                    Đăng ký bằng google
                                </a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            {{-- <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div> --}}
        </div>
    </div>
</section>


@endsection


@section('js')
    <script>
    $(document).ready(function () {
        alert();
        function alert() { 
            if($(".alert").length)
            {
                $(".alert").fadeTo(3000, 500).slideUp(500, function(){
                    $(".alert").slideUp(500);
                });
            }
        }
    });
    </script>
@endsection