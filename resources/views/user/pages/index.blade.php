@extends('user.layouts.master') 
@section('title', 'Trang chủ') 
@section('css')
@endsection

@section('container')
<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image:url(asset/user/images/images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
        <div class="col-md-6 text p-4 ftco-animate">
          <h1 class="mb-3">Florida 5, Pinecrest, FL</h1>
          <span class="location d-block mb-3"><i class="icon-my_location"></i> Melbourne, Vic 3004</span>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
            country, in which roasted parts of sentences fly into your mouth.</p>
          <span class="price">$28,000</span>
          <a href="#" class="btn-custom p-3 px-4 bg-primary">View Details <span class="icon-plus ml-1"></span></a>
        </div>
      </div>
    </div>
  </div>

  <div class="slider-item" style="background-image:url(asset/user/images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
        <div class="col-md-6 text p-4 ftco-animate">
          <h1 class="mb-3">3015 Grand Avenue, CocoWalk</h1>
          <span class="location d-block mb-3"><i class="icon-my_location"></i> Melbourne, Vic 3004</span>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
            country, in which roasted parts of sentences fly into your mouth.</p>
          <span class="price">$28,000</span>
          <a href="#" class="btn-custom p-3 px-4 bg-primary">View Details <span class="icon-plus ml-1"></span></a>
        </div>
      </div>
    </div>
  </div>

  <div class="slider-item" style="background-image:url(asset/user/images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
        <div class="col-md-6 text p-4 ftco-animate">
          <h1 class="mb-3">3015 Grand Avenue, CocoWalk</h1>
          <span class="location d-block mb-3"><i class="icon-my_location"></i> Melbourne, Vic 3004</span>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
            country, in which roasted parts of sentences fly into your mouth.</p>
          <span class="price">$28,000</span>
          <a href="#" class="btn-custom p-3 px-4 bg-primary">View Details <span class="icon-plus ml-1"></span></a>
        </div>
      </div>
    </div>
  </div>

</section>

<section class="ftco-search">
  <div class="container">
    <div class="row">
      <div class="col-md-12 search-wrap">
        <h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Search Property</h2>
        <form action="#" method="GET" class="search-property">
          

          <div class="row">
            
            <div class="col-md align-items-end">
              <div class="form-group">
                <label for="#">Tìm kiếm</label>
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-search"></span></div>
                    <input type="text" class="form-control" id="usr">
                  </div>
                </div>
              </div>
            </div>
            {{-- {{ print_r($tinhThanhPhos )  }} --}}
            <div class="col-md align-items-end">
              <div class="form-group">
                <label for="#">Tỉnh/Thành Phố</label>
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="idThanhPho" class="form-control">
                            <option value="">Tỉnh/Thành Phố</option>
                            @foreach ($tinhThanhPhos as $thanhPho)
                            
                              <option value={!! $thanhPho->id !!}>{{$thanhPho->ten}}</option>
                            @endforeach
                      </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md align-items-end">
              <div class="form-group">
                <label for="#">Quận</label>
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="idQuan" class="form-control">
                        <option value="">Quận</option>
                            
                      </select>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md align-self-end">
              <div class="form-group">
                <div class="form-field">
                  <input type="submit" value="Tìm kiếm" class="form-control btn btn-primary">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-pin"></span></div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">Find Places Anywhere In The World</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-detective"></span></div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">We Have Agents With Experience</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-house"></span></div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">Buy &amp; Rent Modern Properties</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-purse"></span></div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">Making Money</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-properties">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Recent Posts</span>
        <h2 class="mb-4">Recent Properties</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="properties-slider owl-carousel ftco-animate">
          <div class="item">
            <div class="properties">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <span class="status sale">Sale</span>
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">North Parchmore Street</a></h3>
                    <p>Apartment</p>
                  </div>
                  <div class="two">
                    <span class="price">$20,000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="properties">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <span class="status rent">Rent</span>
                  <div class="one">
                    <h3><a href="#">North Parchmore Street</a></h3>
                    <p>Apartment</p>
                  </div>
                  <div class="two">
                    <span class="price">$2,000 <small>/ month</small></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="properties">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <span class="status sale">Sale</span>
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">North Parchmore Street</a></h3>
                    <p>Apartment</p>
                  </div>
                  <div class="two">
                    <span class="price">$20,000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="properties">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-4.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <span class="status sale">Sale</span>
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">North Parchmore Street</a></h3>
                    <p>Apartment</p>
                  </div>
                  <div class="two">
                    <span class="price">$20,000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="properties">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-5.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <span class="status rent">Rent</span>
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">North Parchmore Street</a></h3>
                    <p>Apartment</p>
                  </div>
                  <div class="two">
                    <span class="price">$900 <small>/ month</small></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="properties">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-6.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <span class="status sale">Sale</span>
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">North Parchmore Street</a></h3>
                    <p>Apartment</p>
                  </div>
                  <div class="two">
                    <span class="price">$20,000</span>
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

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Special Offers</span>
        <h2 class="mb-4">Most Recommended Properties</h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="properties">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-1.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <span class="status sale">Sale</span>
            <div class="d-flex">
              <div class="one">
                <h3><a href="#">North Parchmore Street</a></h3>
                <p>Apartment</p>
              </div>
              <div class="two">
                <span class="price">$20,000</span>
              </div>
            </div>
            <p>Far far away, behind the word mountains, far from the countries</p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="flaticon-selection"></i> 250sqft</span>
              <span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
              <span><i class="flaticon-bed"></i> 4</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="properties">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-2.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <span class="status sale">Sale</span>
            <div class="d-flex">
              <div class="one">
                <h3><a href="#">North Parchmore Street</a></h3>
                <p>Apartment</p>
              </div>
              <div class="two">
                <span class="price">$20,000</span>
              </div>
            </div>
            <p>Far far away, behind the word mountains, far from the countries</p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="flaticon-selection"></i> 250sqft</span>
              <span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
              <span><i class="flaticon-bed"></i> 4</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="properties">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-3.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <span class="status rent">Rent</span>
            <div class="d-flex">
              <div class="one">
                <h3><a href="#">North Parchmore Street</a></h3>
                <p>Apartment</p>
              </div>
              <div class="two">
                <span class="price">$800 <small>/ month</small></span>
              </div>
            </div>
            <p>Far far away, behind the word mountains, far from the countries</p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="flaticon-selection"></i> 250sqft</span>
              <span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
              <span><i class="flaticon-bed"></i> 4</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="properties">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-4.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <span class="status sale">Sale</span>
            <div class="d-flex">
              <div class="one">
                <h3><a href="#">North Parchmore Street</a></h3>
                <p>Apartment</p>
              </div>
              <div class="two">
                <span class="price">$20,000</span>
              </div>
            </div>
            <p>Far far away, behind the word mountains, far from the countries</p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="flaticon-selection"></i> 250sqft</span>
              <span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
              <span><i class="flaticon-bed"></i> 4</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-4">Some fun facts</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="9000">0</strong>
                <span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="10000">0</strong>
                <span>Properties</span>
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
                <span>Awards</span>
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
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                      paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Clients</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                      paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Agent</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                      paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Client</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                      paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Client</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                      paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Client</span>
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


<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Read Articles</span>
        <h2>Recent Blog</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
            </a>
          <div class="text mt-3 d-block">
            <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            <div class="meta mb-3">
              <div><a href="#">Dec 6, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
            </a>
          <div class="text mt-3">
            <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            <div class="meta mb-3">
              <div><a href="#">Dec 6, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
            </a>
          <div class="text mt-3">
            <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            <div class="meta mb-3">
              <div><a href="#">Dec 6, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
            </a>
          <div class="text mt-3">
            <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            <div class="meta mb-3">
              <div><a href="#">Dec 6, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section-parallax">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2>Subcribe to our Newsletter</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
            Separated they live in</p>
          <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-8">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script >
$(document).ready(function () {

  $('#idThanhPho').change(function (e) { 
    e.preventDefault();
    var idThanhPho=$(this).val();
    var idQuan=$('#idQuan');
    
    var htmlQuan=`<option value="">Quận</option>`;
    if(idThanhPho=='')
    {
      idQuan.html(htmlQuan);
    }
    else{
      $.ajax({
        type: "get",
        url: "{{ url('/ajax/danh-sach-quan/') }}/"+idThanhPho,
        success: function (response) {

          $.each( response, function( key, value ) {
            htmlQuan+=`<option value="`+value.id+`">`+value.ten+`</option>`
            
          });
          idQuan.html(htmlQuan);
          
        }
      });
    }
    
  });


});
</script>
@endsection