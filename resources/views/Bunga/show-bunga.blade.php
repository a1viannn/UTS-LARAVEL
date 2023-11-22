<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include head -->
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{'/'}}" class="brand-link">
                <img src="{{ asset('gambar/toko.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-6">
                <span class="brand-text font-weight-light">Cahaya Bunga</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('gambar/saya.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Pelanggan</a>
                    </div>
                </div>

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
                        <li class="nav-item">
                            <a href="{{ route('belanja') }}" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>Belanja</p>
                            </a>
                        </li>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-11 text-center">
                            <h1 class="m-0">Detail Bunga</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-body">
                        <div class="row">
                            <!-- Gambar di sebelah kiri -->
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('img/' . $bungas->gambar) }}" alt="{{ $bungas->nama }}" class="img-fluid img-thumbnail" style="max-width: 340px;">
                            </div>
                            <!-- Garis pembatas -->
                            <div class="col-md-8 border-left">
                                <!-- Nama, Stok, Harga, Deskripsi -->
                                <p><strong>Nama :</strong> {{ $bungas->nama }}</p>
                                <hr>
                                <p><strong>Stok:</strong> {{ $bungas->stok }}</p>
                                <hr>
                                <p><strong>Harga:</strong> {{ $bungas->harga }}</p>
                                <hr>
                                <p><strong>Deskripsi:</strong> {{ $bungas->deskripsi }}</p>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-1 offset-md-11">
                                <button onclick="showAlert()" class="btn btn-primary btn-block">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('Template.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
    @include('sweetalert::alert')
</body>

</html>
