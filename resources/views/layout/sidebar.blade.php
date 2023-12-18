<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">ADMIN PANEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block uppercase">
                    {{ auth()->user()->name }}
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link @if (request()->route()->named('admin.dashboard*')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}"
                        class="nav-link @if (request()->route()->named('admin.categories*')) active @endif">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.places.index') }}"
                        class="nav-link @if (request()->route()->named('admin.places*')) active @endif">
                        <i class="nav-icon fas fa-map-marked"></i>
                        <p>
                            Places
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.visitors') }}"
                        class="nav-link @if (request()->route()->named('admin.visitors*')) active @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Visitors
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.reviews') }}"
                        class="nav-link @if (request()->route()->named('admin.reviews*')) active @endif">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Visitors
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}"
                        class="nav-link @if (request()->route()->named('admin.users*')) active @endif">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Administrators
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" id="LogoutButton" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form action="{{ route('logout') }}" method="POST" id="LogoutForm">
                        @csrf
                        @method('delete')
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
