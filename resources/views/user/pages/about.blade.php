@extends('user.layouts.master')

@section('container')

<div class="hero-wrap" style="background-image: url('asset/user/images/bg_1.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">HOME</a></span> | <span>GIỚI
						THIỆU</span></p>
				<h1 class="mb-3 bread">Giới Thiệu</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section contact-section bg-light">
	<div class="container">
		<div class="row d-flex mb-5 contact-info">
			<div class="col-md-6 mb-4">
				<h2 class="h3" style="color: blue; font-weight: bold;">GIỚI THIỆU VỀ WEBSITE:</h2>
			</div>
			<div class="w-100"></div>
			<div class="col-md-6 d-flex">
				<div class="info bg-white p-4">
					<p><video controls autoplay="" width="500" height="350">
							<source src="upload/about.mp4" type="video/mp4" />
						</video></p>
					<p style="color: blue; font-size: 30px; "><span>Các dịch vụ chính:</span></p>
					<p><span>- Đăng thông tin quảng cáo nhà đất;<br>
							- Đăng banner quảng cáo;<br>
							- Đăng bài PR quảng bá sản phẩm, dịch vụ;<br>
							- Danh bạ doanh nghiệp;<br>
							- Danh bạ các nhà môi giới nhà đất số 1.</span></p>
				</div>
			</div>
			<div class="col-md-6 d-flex" style="text-align: justify;">
				<div class="info bg-white p-4">
					<p><span>- Đi đầu về công nghệ, số lượng tin rao cũng như chất lượng tin tức, Batdongsan.com.vn được
							tổ chức đánh giá website danh tiếng là Comscore và SimilarWeb đánh giá là kênh thông tin về
							bất động sản có lượng truy cập lớn nhất Đông Nam Á, vượt trội so với các website hàng đầu
							trong cùng lĩnh vực ở các quốc gia trong khu vực như Singapore, Malaysia, Indonesia… (tham
							khảo số liệu thống kê chi tiết tại đây).</span></p>
					<p><span>- Hiện nay, mỗi tháng, website cập nhật hơn 1 triệu tin rao mới, đạt 10 triệu lượt truy cập
							(visits) và 70 triệu lượt xem trang (pageviews). Cùng với đó, mọi diễn biến mới nhất về thị
							trường bất động sản được phản ánh kịp thời, chính xác và đầy đủ nhất. Với lượng truy cập dẫn
							đầu, là chuyên trang bất động sản có số lượng tin đăng và nội dung phong phú nhất Việt Nam,
							Batdongsan.com.vn đã mang đến cho khách hàng những lợi thế cạnh tranh cao nhất, không những
							đẩy mạnh doanh số bán hàng mà còn thúc đẩy phát triển thương hiệu. Trong nhiều năm qua,
							Batdongsan.com.vn đã trở thành đối tác tin cậy và thường xuyên của hầu hết các chủ đầu tư,
							sàn giao dịch, nhà môi giới cá nhân ở Việt Nam và cả trên thế giới.</span></p>
					<p><span>- Đến nay, bên cạnh trụ sở chính tại Hà Nội, Batdongsan.com.vn đã xây dựng thêm 8 chi nhánh
							tại các địa phương trên cả nước là Hải Phòng, Đà Nẵng, Nha Trang, Tp.HCM, Bình Dương, Bà Rịa
							- Vũng Tàu, Cần Thơ, Đồng Nai để phục vụ khách hàng một cách tốt nhất.</span></p>
					<p><span><a href="{{ route('home') }}" class="btn-custom" style="color: red;">Quay về >>></a></span>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<h2 class="mb-4">CÓ THỂ BẠN CHƯA BIẾT VỀ CHÚNG TÔI ?</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="9000">0</strong>
								<span>SỰ HÀI LÒNG</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="10000">0</strong>
								<span>BẤT ĐỘNG SẢN</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="1000">0</strong>
								<span>Agents</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="100">0</strong>
								<span>ƯU ĐÃI</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section testimony-section bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 ftco-animate">
				<div class="row ftco-animate">
					<div class="col-md-12">
						<div class="carousel-testimony owl-carousel ftco-owl">
							<div class="item">
								<div class="testimony-wrap py-4 pb-5">
									<div class="user-img mb-4"
										style="background-image: url(asset/user/images/Tuan.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text text-center">
										<p class="mb-4">A small river named Duden flows by their place and supplies it
											with the necessary regelialia. It is a paradisematic country, in which
											roasted parts of sentences fly into your mouth.</p>
										<p class="name">TRẦN THANH TUẤN</p>
										<span class="position">Quản Lý</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4 pb-5">
									<div class="user-img mb-4"
										style="background-image: url(asset/user/images/Minh.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text text-center">
										<p class="mb-4">A small river named Duden flows by their place and supplies it
											with the necessary regelialia. It is a paradisematic country, in which
											roasted parts of sentences fly into your mouth.</p>
										<p class="name">NGUYỄN LÊ MINH</p>
										<span class="position">Quản Lý</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4 pb-5">
									<div class="user-img mb-4"
										style="background-image: url(asset/user/images/Tuan.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text text-center">
										<p class="mb-4">A small river named Duden flows by their place and supplies it
											with the necessary regelialia. It is a paradisematic country, in which
											roasted parts of sentences fly into your mouth.</p>
										<p class="name">TRẦN THANH TUẤN</p>
										<span class="position">Thành Viên</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4 pb-5">
									<div class="user-img mb-4"
										style="background-image: url(asset/user/images/Minh.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text text-center">
										<p class="mb-4">A small river named Duden flows by their place and supplies it
											with the necessary regelialia. It is a paradisematic country, in which
											roasted parts of sentences fly into your mouth.</p>
										<p class="name">NGUYỄN LÊ MINH</p>
										<span class="position">Thành Viên</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection