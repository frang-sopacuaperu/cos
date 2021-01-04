<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $title ?></h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


            </div>
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="#profile" data-toggle="tab">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <!-- About Me Box -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">About Me</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="card-body box-profile">
                                            <div class="text-center">
                                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/') ?>dist/img/user4-128x128.jpg" alt="User profile picture">
                                            </div>
                                            <h3 class="profile-username text-center"><?= $user_admin['NAMA']; ?></h3>
                                            <p class="text-muted text-center"> <?= $user_admin['GROUP_HAK_AKSES_ID'] ?> </p>
                                        </div>
                                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                                        <p class="text-muted">
                                            <?= $user_admin['ALAMAT'] ?>
                                        </p>

                                        <hr>

                                        <strong><i class="fas fa-book mr-1"></i> Telepon</strong>

                                        <p class="text-muted"><?= $user_admin['TELEPON'] ?></p>

                                        <hr>

                                        <strong><i class="fas fa-pencil-alt mr-1"></i>No. Rekening</strong>

                                        <p class="text-muted"><?= $user_admin['NO_REKENING'] ?>
                                        </p>

                                        <hr>

                                        <strong><i class="far fa-file-alt mr-1"></i> Gaji Pokok</strong>

                                        <p class="text-muted"><?= $user_admin['GAJI_POKOK'] ?></p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>

                            <!-- TAB SETTING -->
                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" action="" method="POST">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" placeholder="Alamat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="TELEPON" id="TELEPON" placeholder="Telepon">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">No. Rekening</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="NO_REKENING" id="NO_REKENING" placeholder="No. Rekening"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->