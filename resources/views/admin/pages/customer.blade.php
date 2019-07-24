@extends('admin.layouts.master')

@section('title', 'Thành viên')

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


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Alternative Pagination</h4>
                        <p class="text-muted font-13 mb-4">
                            The default page control presented by DataTables (forward and backward buttons with up to 7
                            page numbers in-between)
                            is fine for most situations, but there are cases where you may wish to customise the options
                            presented to the end
                            user.
                        </p>

                        <table id="alternative-page-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>SĐT</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>


                            <tbody>
                                @if(count($userList)>0)
                                    @foreach ($userList as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->hoten }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->dienthoai ?? "Không có" }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                @endif


                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->













    </div> <!-- end container -->
</div>
<!-- end wrapper -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
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

<script src="asset/admin/js/pages/datatables.init.js"></script>
<script type="text/javascript">

</script>
@endsection