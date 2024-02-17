<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" >
        <img src="{{ asset('admin/dist/img/logo.svg') }}" alt="blog Logo"
            class="brand-image img-circle elevation-3" style="opacity: .9">
        <span class="brand-text font-weight" style="font-size: 20px;">مدونتي الشخصية</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a @if (Session::get('page') == 'dashboard') style="background-color:#007BFF !important; 
                    color:white !important;" @endif href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            الرئيسية
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open" style="margin-top: 5px">
                    <a @if (Session::get('page') == 'update_user' || Session::get('page') == 'update_password') style="background-color:#007BFF !important; 
                    color:white !important;" @endif  href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            نبذة
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a @if (Session::get('page') == 'update_user') style="background-color:#007BFF !important; 
                            color:white !important;" @endif href="{{route('profile.edit')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>السيرة الذاتية</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a @if (Session::get('page') == 'update_password') style="background-color:#007BFF !important; 
                            color:white !important;" @endif href="{{route('password.edit')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>تغيير كلمة المرور</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>