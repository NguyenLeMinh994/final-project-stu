@extends('admin.layouts.master')

@section('title', 'Bài đăng')

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
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Thông tin</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
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
                        <h4 class="header-title">Bài đăng chưa duyệt</h4>
<a href={{ route(Auth::user()->quyen==1?'user.createPost':'admin.createPost') }}
    class="mb-4 btn btn-primary btn-rounded waves-effect waves-light">Thêm</a>
                        <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hình</th>
                                    <th>Tên</th>
                                    <th>Ngày đăng</th>
                                    <th>Ngày hết hạn</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($postHideList as $post)
                                <tr id="row_{{ $post->id }}">
                                    <td>{{ $post->id }}</td>
                                    <td>
                                        <img src="upload/{{ $post->hinhdaidien }}" alt={{ $post->ten }} height="60">
                                    </td>
                                    <td>
                                        {{ str_limit($post->ten, $limit = 10, $end = ' ...') }}
                                    </td>
                                    <td>
                                        {{ date('d-m-Y', strtotime($post->created_at)) }}
                                    </td>
                                    <td>
                                        {{ date('d-m-Y', strtotime($post->expired_at)) }}
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.confirmPost', ['idPost'=>$post->id]) }}"
                                            class="btn btn-info btn-xs waves-effect" data-id="{{ $post->id }}">
                                            Xác nhận
                                        </a>
                                        <button type="button" class="clsInfoPost btn btn-primary btn-xs waves-effect waves-light"
                                            data-id="{{ $post->id }}">
                                            Xem
                                        </button>
                                        @if($post->id_user===Auth::user()->id)
                                            <a href="{{ route('admin.updatePost', ['id'=>$post->id]) }}" class="btn btn-primary btn-xs" data-id="{{ $post->id }}">
                                                <i class="la la-pencil-square"></i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bài đăng</h4>
                      

                        <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hình</th>
                                    <th>Tên</th>
                                    <th>Ngày đăng</th>
                                    <th>Ngày hết hạn</th>
                                    <th>Views</th>
                                    <th>Trạng thái</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($posts as $post)
                                <tr id="row_{{ $post->id }}">
                                    <td>{{ $post->id }}</td>
                                    <td>
                                        <img src="upload/{{ $post->hinhdaidien }}" alt={{ $post->ten }} height="60">
                                    </td>
                                    <td>
                                        {{ str_limit($post->ten, $limit = 10, $end = ' ...') }}
                                    </td>
                                    <td>
                                        {{ date('d-m-Y', strtotime($post->created_at)) }}
                                    </td>
                                    <td>
                                        {{ date('d-m-Y', strtotime($post->expired_at)) }}
                                    </td>
                                    <td>
                                        {{ $post->views }}
                                    </td>
                                    <td>
                                        <input type="checkbox" data-plugin="switchery" data-color="#1bb99a"
                                            {{ $post->trangthai==1?'checked':'' }} data-id={{ $post->id }}
                                            class="clsTrangThai" />
                                    </td>
                                    <td>


                                        <button type="button" class="clsSlide btn btn-light btn-xs"
                                            data-id="{{ $post->id }}">
                                            Add Slide
                                        </button>
                                        <button type="button" class="clsInfoPost btn btn-primary btn-xs" data-id="{{ $post->id }}">
                                            Xem
                                        </button>
                                        @if($post->id_user===Auth::user()->id)
                                            <a href="{{ route('admin.updatePost', ['id'=>$post->id]) }}" class="btn btn-primary btn-xs" data-id="{{ $post->id }}">
                                                <i class="la la-pencil-square"></i>
                                            </a>
                                        @endif
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

<script src="asset/admin/libs/jquery-nice-select/jquery.nice-select.min.js"></script>
<script src="asset/admin/libs/switchery/switchery.min.js"></script>
<script src="asset/admin/libs/select2/select2.min.js"></script>
<script src="asset/admin/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="asset/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="asset/admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="asset/admin/js/pages/form-advanced.init.js"></script>
<script src="asset/admin/js/pages/toastr.init.js"></script>
<script src="asset/admin/js/pages/datatables.init.js"></script>
<script type="text/javascript">
    $(document).ready(function () {


        $('.clsTrangThai').change(function (e) {
            e.preventDefault();

            const thisTr = this;
            if (window.confirm("Bạn có muốn thay đổi trạng thái bài viết này không?")) {

                var idPost = $(this).data('id');
                var url = "{{ url('/ajax/cap-nhat-trang-thai-bai-dang/') }}/" + idPost;

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
                            return;
                        } else {
                            $.toast({
                                heading: 'Oh!',
                                text: 'Cập nhật trạng thái thất bại',
                                icon: 'error',
                                position: 'top-right'
                            });
                            $(thisTr).prop('checked', false);
                            return;
                        }
                    }
                });
            }
        });

        $('.clsSlide').click(function (e) {
            const postId = $(this).data('id');
            const thisSlide = this;

            const url = "{{ url('admin/ajax/them-slide') }}/" + postId;
            if (window.confirm(`Bạn có muốn chọn bài ${postId} này làm slide ko?`)) {
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "html",
                    success: function (response) {
                        console.log('Show', response);

                        if (response == 'false') {
                            $.toast({
                                heading: 'Oh!',
                                text: 'Thêm thất bại',
                                icon: 'error',
                                position: 'top-right'
                            });
                            return;

                        } else
                        if (response == -1) {
                            $.toast({
                                heading: 'Oh!',
                                text: `Bài ${postId} tồn tại`,
                                icon: 'warning',
                                position: 'top-right'
                            });
                        } else {
                            console.log(response);

                            $.toast({
                                heading: 'Success',
                                text: 'Thêm thành công',
                                icon: 'success',
                                position: 'top-right'
                            });
                            $(thisSlide).remove();
                        }

                    },
                    error: function (err) {
                        console.log(err);
                    }

                });
            }
        });
        
        $('.clsInfoPost').click(function (e) { 
            e.preventDefault();
            const thisPost=$(this);
            const idPost=thisPost.data('id');
            console.log('idPost',idPost);
            
            const url="{{url('/admin/ajax/thong-tin-post/')}}/"+idPost;
            $.ajax({
                type: "GET",
                url: url,
                success: function (response) {
                    $('.modal-body').html(response);
                    $('#myModal').modal('show');
                }
            });
            
        });

    });
</script>
@endsection