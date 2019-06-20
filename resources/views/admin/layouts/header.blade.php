<header id="topnav">

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>




                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="pro-user-name ml-1">
                            {{ Auth::user()->hoten?Auth::user()->hoten:'No Name' }}<i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                Welcome !
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="{{ route(Auth::user()->quyen!=0?'user.myAccount':'admin.myAccount', ['id'=>Auth::user()->id]) }}"
                            class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Tài khoản</span>
                        </a>


                        @if (empty($user->provider) && empty($user->provider_id))
                        <a href="{{ route(Auth::user()->quyen!=0?'user.changePassword':'admin.changePassword', ['id'=>Auth::user()->id]) }}"
                            class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Đổi mật khẩu</span>
                        </a>
                        @endif


                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href={{ route('logout') }} class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Đăng xuất</span>
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{ route(Auth::user()->quyen!=0?'user.home':'admin.home') }}" class="logo text-center">
                    <span class="logo-lg">
                        <img src="asset/admin/images/logo-light.png" alt="" height="16">
                        <!-- <span class="logo-lg-text-dark">Xeria</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="asset/admin/images/logo-sm.png" alt="" height="18">
                    </span>
                </a>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href={{ route(Auth::user()->quyen!=0?'user.home':'admin.home') }}>
                            <i class="la la-dashboard"></i>Dashboard
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route( (Auth::user()->quyen!=0?'user.post':'admin.postList')) }}">
                            <i class="la la-clone"></i>Bài đăng
                        </a>
                    </li>
                    @if (Auth::user()->quyen==0)
                    <li class="has-submenu">
                        <a href="{{ route('admin.category') }}">
                            <i class="la la-cube"></i>Danh mục
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">
                            <i class="la la-ship"></i>Danh sách thành viên
                        </a>
                    </li>
                    @endif

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->

</header>