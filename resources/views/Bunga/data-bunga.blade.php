<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
                        <div class="col-sm-11 text-center">
                            <h1 class="m-0">CRUD data bunga</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class ="card card-info card-outline">
                    <div class ="card-header">
                        <div class ="card-tools">
                            <a href="{{ route('createbunga') }}" class="btn btn-success">Tambah Data <i class ="fas fa-plus-square"></i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class ="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                            @foreach ($bungas as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td width="30%">
                                        @if ($item->gambar)
                                        <img src="{{ asset('img/'. $item->gambar) }}" height="10%" width="30%" alt="" srcset=""></a>
                                        @else
                                        <p>Tidak ada gambar</p>
                                        @endif
                                    </td>
                                    <td class="text-center" style="width: 8%;">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('deletebunga', $item->id) }}" method="POST">

                                            <a href="{{ route('editbunga', $item->id) }}" {{ $item->id }}
                                                class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
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
