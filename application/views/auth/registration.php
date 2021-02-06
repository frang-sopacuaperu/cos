<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>New</b> Account</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Please Create a New Account</p>

                <form class="user" action="<?= base_url('auth/registration') ?>" method="post">
                    <div class="form-group mb-2">
                        <input type="text" id="NAMA" name="NAMA" class="form-control form-control-user" placeholder="Nama" value="<?= set_value('NAMA') ?>">
                        <?= form_error('NAMA', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-2">
                        <input type="password" id="PASS" name="PASS" class="form-control form-control-user" placeholder="Password">
                        <?= form_error('PASS', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" id="ALAMAT" name="ALAMAT" class="form-control form-control-user" value="<?= set_value('ALAMAT') ?>" placeholder="Alamat">
                        <?= form_error('ALAMAT', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" id="TELEPON" name="TELEPON" class="form-control form-control-user" value="<?= set_value('TELEPON') ?>" placeholder="Telepon">
                        <?= form_error('TELEPON', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" id="NO_REKENING" name="NO_REKENING" class="form-control form-control-user" value="<?= set_value('NO_REKENING') ?>" placeholder="No. Rekening">
                        <?= form_error('NO_REKENING', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-default btn-block"> <a href="<?= base_url('auth/login') ?>">Back</button></a>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Create</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>

</body>

</html>