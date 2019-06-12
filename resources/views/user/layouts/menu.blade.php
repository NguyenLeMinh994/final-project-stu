 <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Trang Chủ</a></li>
          @if (count($loaiOfMenus)>0) 
            @foreach ($loaiOfMenus as $item)
              <li class="nav-item dropdown">
                <a href={{ route("list",["id"=>$item->id]) }} class="nav-link">{{ $item->ten }}</a>
                  <div class="dropdown-menu">
                  @if (count($item->getChildren)>0)
                  @foreach ($item->getChildren as $child)
                    <a href={{ route("list",["id"=>$child->id]) }} class="dropdown-item">{{ $item->ten }} {{ $child->ten }}</a>
                  @endforeach
                  @endif
                  </div>                  
              </li>
            @endforeach 
          @endif
          <li class="nav-item"><a href="agents.html" class="nav-link">Thành Viên</a></li>
          <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Giới Thiệu</a></li>
          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Liên Hệ</a></li>          


          @if (Auth::check())
            <li class="nav-item cta"><a href={{  Auth::user()->quyen==1?route('user.home'):'' }} class="nav-link">{{ Auth::user()->hoten }}</a>  </li> 
          @else
          <li class="nav-item cta"><a href={{ route('login') }} class="nav-link ml-lg-2"><span class="icon-user"></span> Đăng nhập</a></li>
          <li class="nav-item cta cta-colored"><a href={{ route('signup') }} class="nav-link"><span class="icon-pencil"></span> Đăng ký</a></li>
          @endif
          

        </ul>
      </div>