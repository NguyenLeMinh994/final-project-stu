@extends('admin.layouts.master')

@section('title', 'Danh mục')

@section('css')
<link rel="stylesheet" href="asset/admin/js/vendor/toastr/toastr.min.css">
<link rel="stylesheet" href="asset/admin/js/vendor/footable/css/footable.core.min.css">
@endsection

@section('container')
<section id="content">

    <div class="page page-tables-footable">

        <div class="pageheader">

            <h2>Bảng danh mục</h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i> Minovate</a>
                    </li>
                    <li>
                        <a href="tables-footable.html">Bảng danh mục</a>
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
                        <h1 class="custom-font"><strong>Bảng danh mục</strong></h1>
                    </div>
                    <!-- /tile header -->

                    <!-- tile body -->
                    <div class="tile-body">
                        <div class="form-group">
                            <label for="filter" style="padding-top: 5px">Search:</label>
                            <input id="filter" type="text" class="form-control input-sm w-sm mb-10 inline-block" />
                            <a href={{ route('admin.createCategory') }} class="pull-right btn btn-primary mb-2">Thêm
                                danh mục</a>
                        </div>


                        <table id="searchTextResults" data-filter="#filter" data-page-size="5"
                            class="footable table table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th data-hide="phone">Level</th>
                                    <th data-hide="phone">Trang thái</th>
                                    <th data-hide='phone, tablet'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($danhMucs as $danhMuc)
                                <tr id="row_{{ $danhMuc->id }}">
                                    <td>{{ $danhMuc->id }}</td>
                                    <td>{{ $danhMuc->ten }}</td>
                                    <td>{{ $danhMuc->parent_id!=null?$danhMuc->parent_id:'0' }}</td>
                                    <td> <button class="clsTrangThai btn btn-default {{ $danhMuc->trangthai==1?'bg-greensea':'bg-danger'}}" data-id={{ $danhMuc->id }}> {{ $danhMuc->trangthai==1?'Hiện':'Ẩn' }} </button></td>
                                    <td>
                                        <a href={{ route('admin.updateCategory', ['id'=>$danhMuc->id]) }}
                                            class="btn btn-info"><i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="clsXoaDanhMuc btn btn-danger" data-id={{ $danhMuc->id }}><i
                                                class="fa fa-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="hide-if-no-paging">
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <ul class="pagination"></ul>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
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
<script src="asset/admin/js/vendor/toastr/toastr.min.js"></script>
<script src="asset/admin/js/vendor/footable/footable.all.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
            $('.footable').footable();
            toastr.options = {
                "closeButton"      : true,
                "debug"            : false,
                "newestOnTop"      : false,
                "progressBar"      : false,
                "positionClass"    : "toast-top-right",
                "preventDuplicates": false,
                "onclick"          : null,
                "showDuration"     : "300",
                "hideDuration"     : "1000",
                "timeOut"          : "3000",
                "extendedTimeOut"  : "1000",
                "showEasing"       : "linear",
                "hideEasing"       : "swing",
                "showMethod"       : "fadeIn",
                "hideMethod"       : "slideUp"
            };

            $(".clsXoaDanhMuc").click(function (e) {
                e.preventDefault();
                var id=$(this).attr('data-id');

                if(confirm("Bạn có muốn xóa không?"))
                {
                    var url="{{ url('admin/xoa-danh-muc') }}/"+id;

                    $.ajax({
                        type: "get",
                        url: url,
                        dataType: "html",
                        success: function (response) {
                            if(response=='true'){
                                toastr.success('Xóa thành công', 'Thông báo');
                                $('#row_'+id).remove();
                            }
                            else{
                                toastr.error('Không được phép xóa.', 'Thông báo!');
                                return false;
                            }
                        }
                    });
                }
            });


            $(".clsTrangThai").click(function (e) {
                e.preventDefault();
                var id=$(this).data('id');
                var thisTr=this;
                var trangthai=$(thisTr).text();

                var url="{{ url('admin/cap-nhat-trang-thai-danh-muc') }}/"+id;
                $.ajax({
                    type: "get",
                    url: url,
                    dataType: "html",
                    success: function (response) {
                        if(response=='true'){
                            toastr.success('Cập nhật trạng thái thành công', 'Thông báo');
                            if(trangthai=="Ẩn")
                            {
                                $(thisTr).text("Hiện");
                                $(thisTr).removeClass("bg-danger");
                                $(thisTr).addClass("bg-greensea");
                            }
                            else{
                                $(thisTr).text("Ẩn");
                                $(thisTr).removeClass("bg-greensea");
                                $(thisTr).addClass("bg-danger");
                            }
                        }
                        else{
                            toastr.error('Không cập nhật được', 'Thông báo!');
                            return false;
                        }
                    }
                });

            });
        });
</script>
@endsection