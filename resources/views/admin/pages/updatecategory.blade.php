@extends('admin.layouts.master')

@section('title', 'Cập nhật danh mục')

@section('css')
    <link rel="stylesheet" href="asset/admin/js/vendor/colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="asset/admin/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="asset/admin/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="asset/admin/js/vendor/chosen/chosen.css">
    <link rel="stylesheet" href="asset/admin/js/vendor/summernote/summernote.css">
@endsection

@section('container')
    <section id="content">

        <div class="page page-forms-common">

            <div class="pageheader">

                <h2>Cập nhật danh mục</h2>

                <div class="page-bar">

                    <ul class="page-breadcrumb">
                        <li>
                            <a href={{ route('user.home') }}><i class="fa fa-home"></i> Minovate</a>
                        </li>
                        <li>
                            <a href="#">Cập nhật danh mục</a>
                        </li>
                    </ul>
                    
                </div>

            </div>

            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-md-12">

                    <!-- tile -->
                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font">Form nhập liệu</h1>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> Indicates a successful or positive action.
                                </div>
                            @elseif(count($errors)>0)
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    @foreach ($errors->all() as $err)
                                            {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                            <form class="form-horizontal" role="form" action={{ route('admin.postUpdateCategory',['id'=>$danhmuc->id]) }}  method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="input01" class="col-sm-2 control-label">Tên</label>
                                    <div class="col-sm-10 col-md-5">
                                        <input type="text" class="form-control" name="txtTen" id="input01" value={{$danhmuc->ten}}>
                                    </div>
                                </div>

                                <hr class="line-dashed line-full"/>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Chosen</label>
                                    <div class="col-sm-10">
                                        <select tabindex="3" class="chosen-select" style="width: 240px;" name="sltParent">
                                            <option value=>Chọn loại</option>
                                            @foreach ($categories as $category)
                                                <option value={{$category->id}} {{$category->id==$danhmuc->parent_id?'selected':''}}>{{ $category->ten  }}</option>
                                                @if (count($category->getChildren)>0)
                                                    @foreach ($category->getChildren as $child)
                                                        <option value={{$child->id}} {{$child->id==$danhmuc->parent_id?'selected':''}}>---{{ $child->ten }}</option>
                                                    @endforeach
                                                @endif
                                                
                                            @endforeach
                                            
                                            
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button type="submit" class="btn btn-lightred">Lưu</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <!-- /tile body -->

                    </section>
                    <!-- /tile -->



                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

        </div>
        
    </section>
@endsection


@section('js')
        <script src="asset/admin/js/vendor/slider/bootstrap-slider.min.js"></script>

        <script src="asset/admin/js/vendor/colorpicker/js/bootstrap-colorpicker.min.js"></script>

        <script src="asset/admin/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js"></script>

        <script src="asset/admin/js/vendor/daterangepicker/moment.min.js"></script>

        <script src="asset/admin/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="asset/admin/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="asset/admin/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>

        <script src="asset/admin/js/vendor/summernote/summernote.min.js"></script>
@endsection