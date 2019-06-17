@extends('admin.layouts.master')

@section('title', 'Tạo bài đăng')

@section('css')
<link href="asset/admin/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

<link href="asset/admin/libs/jquery-nice-select/nice-select.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" />

@endsection

@section('container')
<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Xeria</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Basic Elements</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Basic Elements</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <!-- Form row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Form row</h4>
                        @if (count($errors)>0)
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            @foreach ($errors->all() as $err)
                            {{ $err}} <br>
                            @endforeach
                        </div>
                        @elseif(session()->has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action={{ route('user.postCreatePost') }} method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="inputAddress" class="col-form-label">Tên bài</label>
                                <input type="text" class="form-control" id="inputAddress" name="txtTen"
                                    placeholder="Nhập tên bài">
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <textarea id="summernote-editor" name="txtNoiDung"></textarea>

                                    <!-- end summernote-editor-->
                                </div>
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="inputState" class="col-form-label">Danh mục</label>
                                        <select class="form-control" data-toggle="select2" name="sltDanhMuc">
                                            <option value="">Select</option>
                                            @foreach ($danhMucChas as $danhMucCha)
                                            <option value={{ $danhMucCha->id }}>
                                                {{ $danhMucCha->ten }}</option>
                                                @foreach ($danhMucCha->getChildren as $danhMucCon)
                                                <option value={{ $danhMucCon->id }}>
                                                    --{{ $danhMucCon->ten }}</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputState" class="col-form-label">Thành phố</label>
                                        <select class="form-control" data-toggle="select2" id="idThanhPho" name="sltThanhPho">
                                            <option value="">Chọn thành phố</option>
                                            @foreach ($thanhPhos as $thanhPho)
                                            <option value={{ $thanhPho->id }}>
                                                {{ $thanhPho->ten }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputState" class="col-form-label">Quận</label>
                                        <select class="form-control" data-toggle="select2" name="sltQuan" id="idQuan">
                                            <option value="">Select</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Diện tích</label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtDienTich"
                                            placeholder="Nhập diện tích">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Số tầng</label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtSoTang"
                                            placeholder="Nhập số tầng">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Phòng ngủ</label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtPhongNgu"
                                            placeholder="Nhập phòng ngủ">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Phòng tắm</label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtPhongTam"
                                            placeholder="Nhập phòng tắm">
                                    </div>
                                    <div class="form-group ">
                                        <label for="inputAddress" class="col-form-label">Giá </label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtGia"
                                            placeholder="Nhập giá">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Địa chỉ </label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtDiaChi"
                                            placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Vĩ độ</label>
                                            <input type="text" class="form-control" id="inputEmail4" name="txtViDo"
                                                placeholder="Nhập vĩ độ">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Kinh độ</label>
                                            <input type="text" class="form-control" id="inputPassword4" name="txtKinhDo"
                                                placeholder="Nhập kinh độ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Hình </label>
                                        <input type="file" class="filestyle" data-text="Choose image" data-placeholder="No file" data-btnClass="btn-primary" name="fileHinh" />
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>

                        </form>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


    </div> <!-- end container -->
</div>
@endsection


@section('js')
<script src="asset/admin/libs/datatables/jquery.dataTables.min.js"></script>
<script src="asset/admin/libs/datatables/dataTables.bootstrap4.js"></script>
<script src="asset/admin/libs/datatables/dataTables.responsive.min.js"></script>
<script src="asset/admin/libs/datatables/responsive.bootstrap4.min.js"></script>
<script src="asset/admin/libs/datatables/dataTables.buttons.min.js"></script>
<script src="asset/admin/libs/datatables/buttons.bootstrap4.min.js"></script>
<script src="asset/admin/libs/datatables/buttons.html5.min.js"></script>
<script src="asset/admin/libs/datatables/buttons.flash.min.js"></script>
<script src="asset/admin/libs/datatables/buttons.print.min.js"></script>
<script src="asset/admin/libs/datatables/dataTables.keyTable.min.js"></script>
<script src="asset/admin/libs/datatables/dataTables.select.min.js"></script>
<script src="asset/admin/libs/pdfmake/pdfmake.min.js"></script>
<script src="asset/admin/libs/pdfmake/vfs_fonts.js"></script>

<script src="asset/admin/libs/jquery-nice-select/jquery.nice-select.min.js"></script>
<script src="asset/admin/libs/switchery/switchery.min.js"></script>
<script src="asset/admin/libs/select2/select2.min.js"></script>
<script src="asset/admin/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="asset/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="asset/admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="asset/admin/js/pages/form-advanced.init.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
<script src="asset/admin/libs/summernote/summernote-bs4.min.js"></script>
<script src="asset/admin/js/pages/form-summernote.init.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(":file").filestyle();
        $('div.note-editable').height(920);

        $('#idThanhPho').change(function (e) {
            e.preventDefault();
            var idThanhPho = $(this).val();
            var idQuan = $('#idQuan');
            var url = "{{ url('/user/ajax/danh-sach-quan/') }}/" + idThanhPho;
            var htmlQuan = `<option value="">Quận</option>`;
            if (idThanhPho == '') {
                idQuan.html(htmlQuan);
            } else {
                $.ajax({
                    type: "get",
                    url: url,
                    success: function (response) {

                        $.each(response, function (key, value) {
                            htmlQuan += `<option value=${value.id}> ${value.ten} </option>`;
                        });
                        idQuan.html(htmlQuan);

                    }
                });
            }

        });
    });
</script>
@endsection