@extends('admin.layouts.master')

@section('title', 'Slide')

@section('css')
<link href="asset/admin/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/jquery-nice-select/nice-select.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<link href="asset/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Datatables</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Datatables</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bảng danh mục</h4>
                        <a href={{ route('admin.createCategory') }}
                            class="mb-4 btn btn-primary btn-rounded waves-effect waves-light">Thêm</a>

                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hình</th>
                                    <th>Tên</th>
                                    <th>Trạng thái</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($slideList as $slide)
                                <tr id="row_{{ $slide->id }}">
                                    <td>{{ $slide->id }}</td>
                                    <td>
                                        @php
                                        $link =empty($slide->link)?$slide->getSanPham()->hinhdaidien:$slide->link;
                                        @endphp
                                        <img src="upload/{{ $link }}" alt={{ $slide->getSanPham()->ten }} height="70">
                                    </td>
                                    <td>{{ $slide->getSanPham()->ten }}</td>
                                    <td>
                                        <input type="checkbox" data-plugin="switchery" data-color="#1bb99a"
                                            {{ $slide->trangthai==1?'checked':'' }} data-id={{ $danhMuc->id }}
                                            class="clsTrangThai" />
                                    </td>
                                    <td>
                                        <a href={{ route('admin.updateCategory', ['id'=>$danhMuc->id]) }}
                                            class="btn btn-primary waves-effect waves-light"><i
                                                class="la la-pencil-square"></i>
                                        </a>
                                        <button type="button" data-id={{ $danhMuc->id }}
                                            class="clsXoaDanhMuc btn btn-danger waves-effect waves-light">
                                            <i class="la la-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->


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
<script src="asset/admin/libs/jquery-toast/jquery.toast.min.js"></script>
<script src="asset/admin/js/pages/toastr.init.js"></script>

<script src="asset/admin/libs/jquery-nice-select/jquery.nice-select.min.js"></script>
<script src="asset/admin/libs/switchery/switchery.min.js"></script>
<script src="asset/admin/libs/select2/select2.min.js"></script>
<script src="asset/admin/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="asset/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="asset/admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="asset/admin/js/pages/form-advanced.init.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $(".clsXoaDanhMuc").click(function (e) {
            e.preventDefault();
            var id = $(this).attr('data-id');

            if (confirm("Bạn có muốn xóa không?")) {
                var url = "{{ url('admin/xoa-danh-muc') }}/" + id;

                $.ajax({
                    type: "get",
                    url: url,
                    dataType: "html",
                    success: function (response) {
                        if (response == 'true') {
                            $('#row_' + id).remove();
                            $.toast({
                                heading: 'Success',
                                text: 'Xóa thành công',
                                icon: 'success',
                                position: 'top-right'
                            });
                        } else {
                            $.toast({
                                heading: 'oh!',
                                text: 'Không thể xóa',
                                icon: 'error',
                                position: 'top-right'
                            });
                            return false;
                        }
                    }
                });
            }
        });


        $(".clsTrangThai").change(function (e) {
            e.preventDefault();
            var thisTr=this;
            var id=$(thisTr).data('id');

            var url="{{ url('admin/cap-nhat-trang-thai-danh-muc') }}/"+id;

            $.ajax({
                type: "get",
                url: url,
                dataType: "html",
                success: function (response) {
                    if (response == 'true') {
                        $.toast({
                            heading: 'Success',
                            text: 'Cập nhật trạng thái thành công',
                            icon: 'success',
                            position: 'top-right'
                        });
                    } else {
                        $.toast({
                            heading: 'Oh!',
                            text: 'Cập nhật trạng thái thất bại',
                            icon: 'error',
                            position: 'top-right'
                        });
                        $(thisTr).prop('checked', false);
                        return false;
                    }
                }
            });
            
        });
    });
</script>
@endsection