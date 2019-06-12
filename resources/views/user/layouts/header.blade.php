<div class="top">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col">
                <p class="social d-flex">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-google"></span></a>
                        <a href="#"><span class="icon-pinterest"></span></a>
                </p>
            </div>
            <div class="col d-flex justify-content-end">
                <p class="num"><span class="icon-phone"></span> 084.786.000.286 || 084.909.331.312</p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Royal<span>estate</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
          @if (count($loaiOfMenus)>0)
              @foreach ($loaiOfMenus as $item)
                <li class="nav-item dropdown">
                  <a href={{ route( 'list',[ 'id'=>$item->id]) }} class="nav-link">{{ $item->ten }}</a>
                  @if (count($item->getChildren)>0)
                    <div class="dropdown-menu">
                      @foreach ($item->getChildren as $child)
                          <a href={{ route( 'list',[ 'id'=>$child->id]) }} class="dropdown-item">{{ $child->ten }}</a>
                      @endforeach
                    </div>

                  @endif

                </li>
              @endforeach
            @endif

          @if (Auth::check())
            <li class="nav-item cta"><a href={{  Auth::user()->quyen==1?route('user.home'):'' }} class="nav-link">{{ Auth::user()->hoten }}</a>  </li>
          @else
          <li class="nav-item cta"><a href={{ route('login') }} class="nav-link ml-lg-2"><span class="icon-user"></span> Đăng nhập</a></li>
          <li class="nav-item cta cta-colored"><a href={{ route('signup') }} class="nav-link"><span class="icon-pencil"></span> Đăng ký</a></li>
          @endif


        </ul>
      </div>
    </div>
  </nav>