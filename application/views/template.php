<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COS | Web App Vr.2.0</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <!-- <link href="<?= base_url(); ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
        body {
            padding-top: 2rem;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body class="px-3 mt-3">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">COS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a href="<?= base_url('dashboard') ?>" class="nav-link"><i class="fab fa-keycdn"> Master</i></a>
                    </li>
                    <li class="nav-item mr-2">
                        <a href="" class="nav-link"><i class="fas fa-comments-dollar"> Transaksi</i></a>
                    </li>
                    <li class="nav-item mr-2">
                        <a href="" class="nav-link"><i class="fa fa-clipboard"> Laporan</i></a>
                    </li>
                    <li class="nav-item mr-2">
                        <a href="<?= base_url('auth/logout') ?>" onclick="return confirm('Yakin ingin logout?') " class="nav-link"><i class="fas fa-sign-out-alt"> Sign Out</i></a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>



    <div class="row mt-5">
        <div class="col-sm-6 col-lg-10 themed-grid-col">
            <?= $contents ?>
        </div>
        <div class="col-sm-6 col-lg-2 themed-grid-col">
            <div class="card">
                <div class="card-body">

                    <!-- Sidebar -->
                    <div class="sidebar">

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                                <!-- QUERY MENU LEVEL 1 -->
                                <li class="nav-item">
                                    <a href="<?= base_url('dashboard'); ?>" class="nav-link btn-dark text-white">
                                        Master
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('barang'); ?>" class="nav-link active">
                                        Barang
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('biaya'); ?>" class="nav-link active">
                                        Biaya
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('customer'); ?>" class="nav-link active">
                                        Customer
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('golongan'); ?>" class="nav-link active">
                                        Golongan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('jasa'); ?>" class="nav-link active">
                                        Jasa
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('lokasi'); ?>" class="nav-link active">
                                        Lokasi
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('multiprice'); ?>" class="nav-link active">
                                        Multi Price
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('salesman'); ?>" class="nav-link active">
                                        Salesman
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('sub_golongan'); ?>" class="nav-link active">
                                        Sub Golongan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('supplier'); ?>" class="nav-link active">
                                        Supplier
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('wilayah'); ?>" class="nav-link active">
                                        Wilayah
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn-dark text-white">
                                        Transaksi
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pemasukan'); ?>" class="nav-link active">
                                        Pemasukan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pembelian'); ?>" class="nav-link active">
                                        Pembelian
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pengeluaran'); ?>" class="nav-link active">
                                        Pengeluaran
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('penjualan'); ?>" class="nav-link active">
                                        Penjualan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pelunasan_hutang'); ?>" class="nav-link active">
                                        Pelunasan Hutang
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pembayaran_hutang'); ?>" class="nav-link active">
                                        Pembayaran Hutang
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('retur_pembelian'); ?>" class="nav-link active">
                                        Retur Pembelian
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('retur_penjualan'); ?>" class="nav-link active">
                                        Retur Penjualan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('barang_keluar'); ?>" class="nav-link active">
                                        Tanda Keluar Barang
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('barang_terima'); ?>" class="nav-link active">
                                        Tanda Terima Barang
                                    </a>
                                </li>

                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="card-footer">
            <div class="card-body">
                <div class="container mt-5">
                    <strong>Copyright &copy; 2021 </strong>
                    All rights reserved.
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 2.0
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <script src="<?= base_url(); ?>/assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
    <!-- DataTable Script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>