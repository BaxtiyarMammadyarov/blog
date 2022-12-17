<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="" class="brand-link">
        <img src="{{asset('assets/admin/images/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item ">
                    <a href="{{route('admin.index')}}" class="brand-link">
                        <i class="nav-icon fas fa-th"></i>
                            <img src="{{asset('assets/admin/images/admin.png')}}" alt="AdminLTELogo" class="brand-image img-circle elevation-3" style="opacity: .8">
                            <span class="brand-text font-weight-light">Panel</span>

                    </a>
                </li>
                <li class="nav-item has-threeview" >
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Bolme
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bölmələrin siyahısı</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("admin.category.create")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bölmə əlavə et</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.tags.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tag siyahısı</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.tags.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tag elave et</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>

</aside>
