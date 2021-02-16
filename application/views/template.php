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
    <div class="weappe">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url('dashboard') ?>">COS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= base_url('dashboard') ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fab fa-keycdn"> Master</i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url('barang'); ?>">Barang</a>
                                <a class="dropdown-item" href="<?= base_url('biaya'); ?>">Biaya</a>
                                <a class="dropdown-item" href="<?= base_url('customer'); ?>">Customer</a>
                                <a class="dropdown-item" href="<?= base_url('golongan'); ?>">Golongan</a>
                                <a class="dropdown-item" href="<?= base_url('jasa'); ?>">Jasa</a>
                                <a class="dropdown-item" href="<?= base_url('lokasi'); ?>">Lokasi</a>
                                <a class="dropdown-item" href="<?= base_url('multiprice'); ?>">Multi Price</a>
                                <a class="dropdown-item" href="<?= base_url('salesman'); ?>">Salesman</a>
                                <a class="dropdown-item" href="<?= base_url('sub_golongan'); ?>">Sub Golongan</a>
                                <a class="dropdown-item" href="<?= base_url('supplier'); ?>">Supplier</a>
                                <a class="dropdown-item" href="<?= base_url('wilayah'); ?>">Wilayah</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-comments-dollar"> Transaksi</i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url('pemasukan'); ?>">Pemasukan</a>
                                <a class="dropdown-item" href="<?= base_url('pembelian'); ?>">Pembelian</a>
                                <a class="dropdown-item" href="<?= base_url('pengeluaran'); ?>">Pengeluaran</a>
                                <a class="dropdown-item" href="<?= base_url('penjualan'); ?>">Penjualan</a>
                                <a class="dropdown-item" href="<?= base_url('pelunasan_hutang'); ?>">Pelunasan Hutang</a>
                                <a class="dropdown-item" href="<?= base_url('pembayaran_piutang'); ?>">Pembayaran Piutang</a>
                                <a class="dropdown-item" href="<?= base_url('retur_pembelian'); ?>">Retur Pembelian</a>
                                <a class="dropdown-item" href="<?= base_url('retur_penjualan'); ?>">Retur Penjualan</a>
                                <a class="dropdown-item" href="<?= base_url('barang_keluar'); ?>">Tanda Keluar Barang</a>
                                <a class="dropdown-item" href="<?= base_url('barang_terima'); ?>">Tanda Terima Barang</a>
                            </div>
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

        <div class="content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-md-12 col-xs-12 themed-grid-col">
                        <?= $contents ?>
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
    </div>



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