@extends('admin.layouts.master')

@section('title', 'Hình')

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
                            <li class="breadcrumb-item active">Image List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Image List</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Hình của bài viết số {{ $post->id }} </h4>
                        <a href={{ route(Auth::user()->quyen==1?'user.image':'admin.image',['id'=>$post->id]) }}
                            class="mb-4 btn btn-primary btn-rounded waves-effect waves-light">Thêm hình
                        </a>

                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hình</th>
                                    <th>Ngày đăng</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>


                            <tbody>
                                @php
                                $imageList=$post->getDanhSachHinhs;
                                @endphp
                                @foreach ($imageList as $image)
                                <tr id="row_{{ $image->id }}">
                                    <td>{{ $image->id }}</td>
                                    <td>
                                        <img src="upload/images/{{ $image->link }}" alt={{ $image->link }} height="70">
                                    </td>
                                    <td>
                                        {{ date('d-m-Y', strtotime($image->created_at)) }}
                                    </td>

                                    <td>
                                        <button type="button" data-id="{{ $image->id }}"
                                            class="clsXoaHinh btn btn-danger waves-effect waves-light">
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
<script src="asset/admin/js/pages/datatables.init.js"></script>
<script src="asset/admin/libs/jquery-nice-select/jquery.nice-select.min.js"></script>
<script src="asset/admin/libs/switchery/switchery.min.js"></script>
<script src="asset/admin/libs/select2/select2.min.js"></script>
<script src="asset/admin/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="asset/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="asset/admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="asset/admin/js/pages/form-advanced.init.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('.clsXoaHinh').click(function () {
            const thisImage = this;
            const idImage = $(thisImage).data('id');
            if (window.confirm(`Bạn có muốn xóa hình ${idImage} không?`)) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('image/remove/') }}/" + idImage,
                    success: function (response) {
                        if (response.success) {
                            $('#row_' + idImage).remove();
                            $.toast({
                                heading: 'Success',
                                text: 'Xóa thành công',
                                icon: 'success',
                                position: 'top-right'
                            });
                        }
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            }
        });
    });
</script>
@endsection