<div class="col-md-10">
    <div class="card">
        <div class="card-header">Edit Salesman</div>
        <?php if ($status == true) : ?>
            <form action="" method="POST">
                <div class="card-body">
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Kode</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="KODE" id="KODE" placeholder="Kode" value="<?= $data['KODE'] ?>" disabled>
                            <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Nama</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="Nama" value="<?= $data['NAMA'] ?>">
                            <small class=" form-text text-danger"><?= form_error('NAMA'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Alamat</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" placeholder="Alamat#1" value="<?= $data['ALAMAT'] ?>">
                            <small class=" form-text text-danger"><?= form_error('ALAMAT'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Alamat 2</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ALAMAT2" id="ALAMAT2" placeholder="Alamat#2" value="<?= $data['ALAMAT2'] ?>">
                            <small class=" form-text text-danger"><?= form_error('ALAMAT2'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Telepon</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="TELEPON" id="TELEPON" placeholder="Telepon" value="<?= $data['TELEPON'] ?>">
                            <small class=" form-text text-danger"><?= form_error('TELEPON'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">No. HP</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="TELEPON2" id="TELEPON2" placeholder="No. HP" value="<?= $data['TELEPON2'] ?>">
                            <small class=" form-text text-danger"><?= form_error('TELEPON2'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">No. Rekening</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="NO_REKENING" id="NO_REKENING" placeholder="No. Rekening" value="<?= $data['NO_REKENING'] ?>">
                            <small class=" form-text text-danger"><?= form_error('NO_REKENING'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Plafon Piutang</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="PLAFON_PIUTANG" id="PLAFON_PIUTANG" placeholder="Plafon Piutang" value="<?= $data['PLAFON_PIUTANG'] ?>">
                            <small class=" form-text text-danger"><?= form_error('PLAFON_PIUTANG'); ?></small>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="<?= base_url('salesman') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
                </div>
            </form>
        <?php else : echo $message; ?>
        <?php endif; ?>
    </div>
</div>