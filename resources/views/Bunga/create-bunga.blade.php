<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.left-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class ="card card-info card-outline">
                    <div class ="card-header">
                        <h3>Create Data Bunga</h3>
                    </div>

                    <div class ="card-body">
                        <form action="{{ 'simpanbunga' }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <!-- Nama Bunga -->
                            <div class="form-group">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama') }}" placeholder="nama bunga">
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Deskripsi Bunga -->
                            <div class="form-group">
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                    name="deskripsi" value="{{ old('deskripsi') }}" placeholder="deskripsi bunga"></textarea>
                                <!-- error message untuk deskripsi -->
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Stok Bunga -->
                            <div class="form-group">
                                <input type="text" class="form-control @error('stok') is-invalid @enderror"
                                    name="stok" value="{{ old('stok') }}" placeholder="stok bunga">
                                <!-- error message untuk stok -->
                                @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Harga Bunga -->
                            <div class="form-group">
                                <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                    name="harga" value="{{ old('harga') }}" placeholder="harga bunga">
                                <!-- error message untuk harga -->
                                @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Upload Gambar -->
                            <div class="form-group">
                                <label class="font-weight-bold">Masukkan Gambar Bunga</label>
                                <input type="file" class="form-control-file @error('gambar') is-invalid @enderror"
                                    name="gambar">
                                <!-- error message untuk gambar -->
                                @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Tombol Simpan -->
                            <div class ="form-group text-right">
                                <button type="submit" class="btn btn-success">Simpan data</button>
                            </div>

                        </form>
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
</body>
</html>
