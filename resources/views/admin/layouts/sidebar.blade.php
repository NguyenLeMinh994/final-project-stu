<div id="controls">

    <!-- ================================================
        ================= SIDEBAR Content ===================
        ================================================= -->
    <aside id="sidebar">


        <div id="sidebar-wrap">

            <div class="panel-group slim-scroll" role="tablist">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#sidebarNav">
                                Navigation <i class="fa fa-angle-up"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                        <div class="panel-body">

                            <!-- ===================================================
                                ================= NAVIGATION Content ===================
                                ==================================================== -->
                            <ul id="navigation">
                                <li><a href={{ route('user.home') }}><i class="fa fa-dashboard"></i>
                                        <span>Home</span></a>
                                </li>
                                <li><a href={{ route('user.createPost') }}><i class="fa fa-pencil"></i>
                                    <span>Bài đăng</span></a>
                                </li>

                                {{-- Admin begin --}}
                                <li><a href={{ route('admin.category') }}><i class="fa fa-pencil"></i>
                                    <span>Tạo danh mục</span></a>
                                </li>
                                {{-- Admin end --}}
                                
                                
                            </ul>
                            <!--/ NAVIGATION Content -->
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </aside>
    <!--/ SIDEBAR Content -->





    <!-- =================================================
        ================= RIGHTBAR Content ===================
        ================================================== -->
    
    <!--/ RIGHTBAR Content -->




</div>