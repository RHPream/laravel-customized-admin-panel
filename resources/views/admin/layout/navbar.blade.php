<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  " action="#" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="nav-item start active open">
            	<a href="{{url('admin')}}" class="nav-link ">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="badge badge-success"></span>
                </a>                                
            </li>
            <li class="heading">
                <h3 class="uppercase">Features</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">Pages</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('admin/pages')}}" class="nav-link ">
                            <i class="icon-layers"></i>
                            <span class="title">Pages</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('admin/services/1/edit')}}" class="nav-link ">
                            <i class="icon-layers"></i>
                            <span class="title">Services Page</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Users</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('admin/users')}}" class="nav-link ">
                            <span class="title">Users List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{url('admin/stories')}}" class="nav-link ">
                    <i class="icon-layers"></i>
                    <span class="title">Stories</span>
                </a>
            </li>
            
            <li class="nav-item  ">
                <a href="{{url('admin/news')}}" class="nav-link ">
                    <i class="icon-feed"></i>
                    <span class="title">News</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="{{url('admin/testimonial')}}" class="nav-link ">
                    <i class="icon-note"></i>
                    <span class="title">Testimonials </span>
                </a>
            </li>
            
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-basket"></i>
                    <span class="title">eCommerce</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('admin/indicators')}}" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">Products List</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('admin/orders')}}" class="nav-link ">
                            <i class="icon-tag"></i>
                            <span class="title">Orders List</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('admin/coupons')}}" class="nav-link ">
                            <i class="icon-tag"></i>
                            <span class="title">Coupons List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-basket"></i>
                    <span class="title">License</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('admin/license')}}" class="nav-link ">
                            <i class="icon-tag"></i>
                            <span class="title">License List</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('admin/program')}}" class="nav-link ">
                            <i class="icon-tag"></i>
                            <span class="title">Program List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{url('admin/members')}}" class="nav-link ">
                    <i class="icon-users"></i>
                    <span class="title">Members</span>
                </a>
            </li>
            
            <li class="nav-item  ">
                <a href="{{url('admin/contact')}}" class="nav-link ">
                    <i class="icon-envelope"></i>
                    <span class="title">Contact Us</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="{{url('admin/settings')}}" class="nav-link ">
                    <i class="icon-settings"></i>
                    <span class="title">Settings</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        
    </div>
    <!-- END SIDEBAR -->
</div>