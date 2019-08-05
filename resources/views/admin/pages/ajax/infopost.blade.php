<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <img class="card-img-top img-responsive" src="upload/{{$post->hinhdaidien}}" alt="Card image cap" height="250">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        <div class="row">
                            <div class="col-md-4">
                                ID: {{$post->id}}
                            </div>
                            <div class="col-md-4">
                                Địa chỉ: {{$post->diachi}}, {{ $post->getQuan->loai }} {{ $post->getQuan->ten }}, {{ $post->getTinhThanhPho->loai }} {{ $post->getTinhThanhPho->ten }}
                            </div>
                            <div class="col-md-4">
                                Giá: {{$post->gia}}
                            </div>

                            <div class="col-md-3">
                                Diện tích xây dựng: {{$post->dientich}} <sup>m2</sup>
                            </div>
                            <div class="col-md-3">
                                Số tầng: {{$post->sotang}}
                            </div>
                            <div class="col-md-3">
                                Phòng ngủ: {{$post->phongngu}}
                            </div>
                            <div class="col-md-3">
                                Phòng tắm: {{$post->phongtam}}
                            </div>
                            <div class="col-md-3">
                                Tình trạng pháp lý: {{$post->tinhtrangphaply}}
                            </div>
                            <div class="col-md-3">
                                Trạng thái: {{$post->trangthai==3?"Bị Cấm":($post->trangthai==0?"Bị Ẩn":"Hiển thị")}}
                            </div>
                        </div>
                    </p>
                    <p class="card-text">
                        {!! $post->noidung !!}
                    </p>
                    <p class="card-text">
                        <small class="text-muted">{{ $user->id }} - {{$user->hoten}} - {{$user->email}}</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>