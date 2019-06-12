@extends('user.layouts.master') 

@section('container')

	<div class="hero-wrap" style="background-image: url('asset/user/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Giới Thiệu</span></p>
            <h1 class="mb-3 bread">Giới Thiệu</h1>
          </div>
        </div>
      </div>
    </div>

	<section class="ftco-section ftc-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(asset/user/images/bg_1.jpg);">
						<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
				<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line mb-5 pl-md-5">
	          	<div class="pl-md-5 ml-md-5">
		          	<span class="subheading">Tổng quan</span>
		            <h2 class="mb-4">Am hiểu về lĩnh vực Bất đông sản</h2>
	            </div>
	          </div>
	          <div class="pl-md-5 ml-md-5 mb-5">
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
							<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
							<p><a href="{{ route('home') }}" class="btn-custom">Quay về <span class="ion-ios-arrow-forward"></span></a></p>
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
		                  <div class="user-img mb-4" style="background-image: url(asset/user/images/Tuan.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">TRẦN THANH TUẤN</p>
		                    <span class="position">Quản Lý</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(asset/user/images/Minh.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">NGUYỄN LÊ MINH</p>
		                    <span class="position">Quản Lý</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(asset/user/images/Tuan.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">TRẦN THANH TUẤN</p>
		                    <span class="position">Thành Viên</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(asset/user/images/Minh.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
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
		
	@include('user.layouts.dangky')

@endsection