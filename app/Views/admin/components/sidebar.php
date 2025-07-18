<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <p class="d-block">Welcome <?= session('admin_auth')['name'] ?> !</p>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href=<?= base_url("/admin/dashboard") ?> class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Bills
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">6</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/bills') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bills</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/bills/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Bill</p>
                            </a>
                        </li>
                    </ul>
                </li>










                <li class="nav-item menu-open">
                    <a href=<?= base_url("/admin/logout") ?> class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>