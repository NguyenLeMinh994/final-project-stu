@extends('admin.layouts.master')

@section('title', 'Home')

@section('css')
<link rel="stylesheet" href="asset/admin/js/vendor/colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="asset/admin/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css">
<link rel="stylesheet" href="asset/admin/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="asset/admin/js/vendor/chosen/chosen.css">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection

@section('container')
<section id="content">

    <div class="page page-forms-common">

        <div class="pageheader">

            <h2>Common Elements <span>// You can place subtitle here</span></h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href={{ route('user.home') }}><i class="fa fa-home"></i> Minovate</a>
                    </li>
                    <li>
                        <a href="#">Form Stuff</a>
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
                        <h1 class="custom-font"><strong>Form</strong> Elements</h1>
                        <ul class="controls">
                            <li class="dropdown">

                                <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <i class="fa fa-spinner fa-spin"></i>
                                </a>
                            </li>
                    </div>
                    <!-- /tile header -->

                    <!-- tile body -->
                    <div class="tile-body">

                        <form class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Tên</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input01">
                                </div>
                            </div>

                            <hr class="line-dashed line-full" />

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Loại</label>
                                <div class="col-sm-10">
                                    <select tabindex="3" class="chosen-select" style="width: 240px;">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <hr class="line-dashed line-full" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Thành phố</label>
                                <div class="col-sm-10">
                                    <select tabindex="3" class="chosen-select" style="width: 240px;">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <hr class="line-dashed line-full" />

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Quận</label>
                                <div class="col-sm-10">
                                    <select tabindex="3" class="chosen-select" style="width: 240px;">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <hr class="line-dashed line-full" />
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Địa chỉ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input01">
                                </div>
                            </div>
                            <hr class="line-dashed line-full" />
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Diện tích</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input01">
                                </div>
                            </div>
                            <hr class="line-dashed line-full" />
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Số tầng</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input01">
                                </div>
                            </div>
                            <hr class="line-dashed line-full" />
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Số phòng</label>
                                <div class="col-sm-10">

                                    <input type="text" class="form-control" id="input01">
                                </div>
                            </div>
                            <hr class="line-dashed line-full" />
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Số phòng tắm</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input01">
                                </div>
                            </div>
                            <hr class="line-dashed line-full" />
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Giá</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input01">
                                </div>
                            </div>
                            <hr class="line-dashed line-full" />
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Tọa độ</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="input01" placeholder="Vĩ độ">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="input01" placeholder="Kinh độ">
                                    </div>
                                </div>
                            </div>

                            <hr class="line-dashed line-full" />
                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Nội dung</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" rows="6" name="message" id="message"
                                        placeholder="Type your message" required=""></textarea>
                                </div>
                            </div>
                            <hr class="line-dashed line-full" />

                            <div class="form-group">
                                <label class="col-sm-2 control-label">File Input</label>
                                <div class="col-sm-10">
                                    <input type="file" class="filestyle" data-buttonText="Find file"
                                        data-iconName="fa fa-inbox">
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

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<script>
    $(document).ready(function() {
        $(".note-btn").click(function() {
            debugger;
            $('.modal-backdrop').remove();
            console.log('xxxx');
        });
        $('.summernote').summernote({
            height: 300,
        });
    });
</script>

@endsection