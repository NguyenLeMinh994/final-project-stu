@extends('admin.layouts.master')

@section('title', 'Cập nhật bài đăng')

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
<!-- Styles -->
<style type="text/css">
    .pac-container {
        z-index: 9999;
    }
</style>
@endsection

@section('container')
<div class="wrapper">
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
    
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
    
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group ">
                        <input type="text" id="address-input" name="address_address" class="form-control map-input"
                            placeholder="Nhập địa chỉ">
                        <input type="hidden" name="address_latitude" value="0" />
                        <input type="hidden" name="address_longitude" value="0" />
                    </div>
                    <div id="address-map-container" style="width:100%;height:400px; ">
                        <div style="width: 100%; height: 100%" id="address-map"></div>
                    </div>
                </div>
    
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveModal">Lưu</button>
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Basic Elements</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Cập nhật</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <!-- Form row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Form cập nhật</h4>
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
                        <form action={{ route('user.postUpdatePost',['id'=>$post->id]) }} method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="inputAddress" class="col-form-label">Tên bài</label>
                                <input type="text" class="form-control" id="inputAddress" name="txtTen"
                                    placeholder="Nhập tên bài" value="{{ $post->ten }}">
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <textarea id="noidung" name="txtNoiDung">
                                    {!! $post->noidung !!}
                                    </textarea>

                                    <!-- end summernote-editor-->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState" class="col-form-label">Danh mục</label>
                                        <select class="form-control" data-toggle="select2" name="sltDanhMuc">
                                            <option value="">Chọn danh mục</option>
                                            @foreach ($danhMucChas as $danhMucCha)
                                            <option value={{ $danhMucCha->id }}
                                                {{ $post->id_loai==$danhMucCha->id?'selected':'' }}>
                                                {{ $danhMucCha->ten }}
                                            </option>
                                            @foreach ($danhMucCha->getChildren as $danhMucCon)
                                            <option value={{ $danhMucCon->id }}
                                                {{ $post->id_loai==$danhMucCon->id?'selected':'' }}>
                                                --{{ $danhMucCon->ten }}
                                            </option>
                                            @endforeach
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputState" class="col-form-label">Thành phố</label>
                                        <select class="form-control" data-toggle="select2" id="idThanhPho"
                                            name="sltThanhPho">
                                            <option value="">Chọn thành phố</option>
                                            @foreach ($thanhPhos as $thanhPho)
                                            <option value={{ $thanhPho->id }}
                                                {{ $post->id_tp==$thanhPho->id?'selected':'' }}>
                                                {{ $thanhPho->ten }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputState" class="col-form-label">Quận</label>
                                        <select class="form-control" data-toggle="select2" name="sltQuan" id="idQuan"
                                            data-id-quan={{ $post->id_quan }}>
                                            <option value="">Chọn quận</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Diện tích</label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtDienTich"
                                            placeholder="Nhập diện tích" value={{ $post->dientich}}>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Số tầng</label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtSoTang"
                                            placeholder="Nhập số tầng" value={{ $post->sotang?$post->sotang:'0' }}>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Phòng ngủ</label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtPhongNgu"
                                            placeholder="Nhập phòng ngủ" value={{ $post->phongngu}}>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Phòng tắm</label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtPhongTam"
                                            placeholder="Nhập phòng tắm" value={{ $post->phongtam}}>
                                    </div>
                                    <div class="form-group ">
                                        <label for="inputAddress" class="col-form-label">Giá </label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtGia"
                                            placeholder="Nhập giá" value={{ $post->gia}}>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Địa chỉ </label>
                                        <input type="text" class="form-control" id="inputAddress" name="txtDiaChi"
                                            placeholder="Nhập địa chỉ" value={{ $post->diachi}}>
                                    </div>
                                    <div class="form-row" data-toggle="modal" data-target="#myModal">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Vĩ độ (Latitude)</label>
                                            <input type="text" class="form-control" id="address-latitude" name="txtViDo"
                                                placeholder="Nhập vĩ độ" value={{ $post->latitude}} readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Kinh độ (Longitude)</label>
                                            <input type="text" class="form-control" id="address-longitude" name="txtKinhDo"
                                                placeholder="Nhập kinh độ" value={{ $post->longitude}} readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress" class="col-form-label">Hình </label>
                                        <input type="file" class="filestyle" data-text="Choose image"
                                            data-placeholder="No file" data-btnClass="btn-primary" name="fileHinh" />
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
<script src="asset/admin/js/pages/datatables.init.js"></script>
<script src="asset/admin/libs/jquery-nice-select/jquery.nice-select.min.js"></script>
<script src="asset/admin/libs/switchery/switchery.min.js"></script>
<script src="asset/admin/libs/select2/select2.min.js"></script>
<script src="asset/admin/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="asset/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="asset/admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="asset/admin/js/pages/form-advanced.init.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
<script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}&libraries=places&callback=initialize"
    async defer>
</script>
<script>
    function initialize() {

            $('form').on('keyup keypress', function (e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }
            });
            const locationInputs = document.getElementsByClassName("map-input");

            const autocompletes = [];
            const geocoder = new google.maps.Geocoder;
            for (let i = 0; i < locationInputs.length; i++) {
                const input = locationInputs[i];
                const
                    fieldKey = input.id.replace("-input", "");
                // const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';
                const
                    latitude = 10.774590;
                const
                    longitude = 106.698050;
                
                const map = new
                google.maps.Map(document.getElementById(fieldKey + '-map'), {
                    center: {
                        lat: latitude,
                        lng: longitude
                    },
                    zoom: 13
                });
                const marker = new google.maps.Marker({
                    map: map,
                    position: {
                        lat: latitude,
                        lng: longitude
                    },
                });
                
                // marker.setVisible(isEdit);
                
                marker.setVisible(true);
                const autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.key = fieldKey;
                autocompletes.push({
                    input: input,
                    map: map,
                    marker: marker,
                    autocomplete: autocomplete
                });

                console.log('iput',autocomplete);
            }
            for (let i = 0; i < autocompletes.length; i++) {
                const input = autocompletes[i].input;
                const autocomplete = autocompletes[i].autocomplete;
                const map = autocompletes[i].map;
                const marker = autocompletes[i].marker;
                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                    marker.setVisible(false);
                    const
                        place = autocomplete.getPlace();
                    geocoder.geocode({
                        'placeId': place.place_id
                    }, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            const lat = results[0].geometry.location.lat();
                            const
                                lng = results[0].geometry.location.lng();
                            setLocationCoordinates(autocomplete.key, lat, lng);
                        }
                    });
                    if (!place.geometry) {
                        window.alert("No details available for input: '" + place.name + "'");
                        input.value = "";
                        return;
                    }

                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);
                    }
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);

                });
            }
        }

        function setLocationCoordinates(key, lat, lng) {
            $("#saveModal").click(function(e) {
                // console.log('lat (vĩ độ):', lat);
                // console.log('lng (kinh độ):', lng);
                // console.log('====================================');
                // console.log('lat (vĩ độ):', lat.toFixed(6));
              
                // console.log('lng (kinh độ):', lng.toFixed(6));

                $("#"+key + "-" + "latitude").val(lat.toFixed(6));
                $("#"+key + "-" + "longitude").val(lng.toFixed(6));
                $('#myModal').modal('hide');
            });
           
        }

</script>

<script type="text/javascript">
    $(document).ready(function () {
        $(":file").filestyle();
        const options = {
            filebrowserImageBrowseUrl: "{{ asset('/laravel-filemanager?type=Images')}}",
            filebrowserImageUploadUrl: "{{ asset('/laravel-filemanager/upload?type=Images&_token=') }}",
            filebrowserBrowseUrl: "{{ asset('/laravel-filemanager?type=Files') }}",
            filebrowserUploadUrl: "{{ asset('/laravel-filemanager/upload?type=Files&_token=') }}",
            height: 840
        };
        CKEDITOR.replace('noidung',options);
        
        $("input[name='txtGia']").on('keyup', function () {
            const thisPrice=$(this);
            var input = thisPrice.val();
            input = input.replace(/[\D\s\._\-]+/g, "");
            
            input = input ? parseInt(input, 10) : 0;
            
            thisPrice.val(function () {
                return (input === 0) ? "" : input.toLocaleString();
            });
        });
        function pasteFormatNumber() {
            const thisPrice=$("input[name='txtGia']");
            var input = thisPrice.val();
            input = input.replace(/[\D\s\._\-]+/g, "");
            
            input = input ? parseInt(input, 10) : 0;
            
            thisPrice.val(function () {
                return (input === 0) ? "" : input.toLocaleString();
            });
        }

        $("input[name='txtGia']").on('focus', function () {
            const thisPrice=$(this);
            var input = thisPrice.val();
            input = input.replace(/[\D\s\._\-]+/g, "");
            
            input = input ? parseInt(input, 10) : 0;
            
            thisPrice.val(function () {
                return (input === 0) ? "" : input.toLocaleString();
            });
        });

      
        $('#idThanhPho').change(function (e) {
            e.preventDefault();
            var idThanhPho = $(this).val();
            var idQuan = $('#idQuan');
            var url = "{{ url('/ajax/danh-sach-quan/') }}/" + idThanhPho;
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

        function getQuan() {
            const idThanhPho = $('#idThanhPho').val();
            const quanElement = $('#idQuan');
            const idQuan=quanElement.data('id-quan');
            
            const url = "{{ url('ajax/danh-sach-quan/') }}/" + idThanhPho;
            let htmlQuan = `<option value="">Quận</option>`;

            if (idThanhPho == '') {
                quanElement.html(htmlQuan);
            } else {
                $.ajax({
                    type: "get",
                    url: url,
                    success: function (response) {
                        $.each(response, function (key, value) {
                            htmlQuan += `<option value=${value.id} ${idQuan==value.id?'selected':''}> ${value.ten} </option>`;
                        });
                        quanElement.html(htmlQuan);

                    }
                });
            }
            
        }
        getQuan();
        pasteFormatNumber();

    });
</script>
@endsection