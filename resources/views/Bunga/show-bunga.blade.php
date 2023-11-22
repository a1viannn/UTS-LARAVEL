<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include head -->
    @include('Template.head')
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a class="navbar-brand">
                    <img src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Cahaya Bunga</span>
                </a>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a href="{{ '/' }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('belanja') }}" class="nav-link">Belanja</a>
                    </li>
                    <!-- LOGIN -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fas fa-user-circle"></i> Login
                        </a>
                    </li>

                </ul>
            </div>
        </nav>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                        <div class="text-center">
                            <h1 class="m-0">Detail Bunga</h1>
                        </div>
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
        <footer class="main-footer">
            @include('Template.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
    @include('sweetalert::alert')
</body>

</html>
