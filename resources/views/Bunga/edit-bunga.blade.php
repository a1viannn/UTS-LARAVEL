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
                        <h3>Edit Data Bunga</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('updatebunga',$bungas->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class ="form-group">
                                <input type="text" id="nama" name="nama" class="form-control"
                                    placeholder="Nama Bunga" value="{{$bungas->nama}}">
                            </div>
                            <div class ="form-group">
                                <textarea name="deskripsi" id="deskripsi" class="form-control"
                                    placeholder="Deskripsi Bunga">{{$bungas->deskripsi}}</textarea>
                            </div>
                            <div class ="form-group">
                                <input type="text" id="stok" name="stok" class="form-control"
                                    placeholder="Stok Bunga" value="{{$bungas->stok}}">
                            </div>
                            <div class ="form-group">
                                <input type="text" id="harga" name="harga" class="form-control"
                                    placeholder="Harga Bunga" value="{{$bungas->harga}}">
                            </div>
                            <div class ="form-group">
                                <input type="file" id="gambar" name="gambar">
                                <small class="form-text text-muted">Pilih file gambar untuk diubah</small>

                            </div>

                            <div class ="form-group text-right">
                                <button type="submit" class="btn btn-primary">Ubah data</button>
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
