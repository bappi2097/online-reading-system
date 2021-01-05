<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('adminlte.dashboard')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->first_name . " " . auth()->user()->last_name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{route('adminlte.dashboard')}}"
                        class="nav-link @if (url()->current() == route('adminlte.dashboard')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('adminlte.news.index')}}"
                        class="nav-link @if (url()->current() == route('adminlte.news.index')) active @endif">
                        <i class="nav-icon far fa-newspaper"></i>
                        <p>
                            News
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('adminlte.news-category.index')}}"
                        class="nav-link @if (url()->current() == route('adminlte.news-category.index')) active @endif">
                        <i class="nav-icon fas fa-align-justify"></i>
                        <p>
                            News Category
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('adminlte.tag.index')}}"
                        class="nav-link @if (url()->current() == route('adminlte.tag.index')) active @endif">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Tag
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item has-treeview @if (url()->current() == route('adminlte.content-layouts.index')) menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('adminlte.content-layouts.index')}}"
                                class="nav-link @if (url()->current() == route('adminlte.content-layouts.index')) active @endif">
                                <i class="fas fa-border-all nav-icon"></i>
                                <p>Content Layout</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('adminlte.content.index')}}"
                                class="nav-link @if (url()->current() == route('adminlte.content.index')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Content</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('adminlte.auth.logout')}}"
                        onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();"
                        class="nav-link @if (url()->current() == route('adminlte.auth.logout')) active @endif">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                    <form id="admin-logout-form" action="{{ route('adminlte.auth.logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>