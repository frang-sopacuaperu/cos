<div class="col-md-10 py-3 px-3">
    <h1 class="h3 text-gray-800">Edit Salesman</h1>
    <hr>
    <div class="card">
        <?php if ($status == true) : ?>
            <form action="" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="KODE" id="KODE" placeholder="Kode" value="<?= $data['KODE'] ?>" disabled>
                        <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="Nama" value="<?= $data['NAMA'] ?>">
                        <small class=" form-text text-danger"><?= form_error('NAMA'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" placeholder="Alamat#1" value="<?= $data['ALAMAT'] ?>">
                        <small class=" form-text text-danger"><?= form_error('ALAMAT'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ALAMAT2" id="ALAMAT2" placeholder="Alamat#2" value="<?= $data['ALAMAT2'] ?>">
                        <small class=" form-text text-danger"><?= form_error('ALAMAT2'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="TELEPON" id="TELEPON" placeholder="Telepon" value="<?= $data['TELEPON'] ?>">
                        <small class=" form-text text-danger"><?= form_error('TELEPON'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="TELEPON2" id="TELEPON2" placeholder="No. HP" value="<?= $data['TELEPON2'] ?>">
                        <small class=" form-text text-danger"><?= form_error('TELEPON2'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="NO_REKENING" id="NO_REKENING" placeholder="No. Rekening" value="<?= $data['NO_REKENING'] ?>">
                        <small class=" form-text text-danger"><?= form_error('NO_REKENING'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="PLAFON_PIUTANG" id="PLAFON_PIUTANG" placeholder="Plafon Piutang" value="<?= $data['PLAFON_PIUTANG'] ?>">
                        <small class=" form-text text-danger"><?= form_error('PLAFON_PIUTANG'); ?></small>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="<?= base_url('salesman') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
                </div>
            </form>
        <?php else : echo $message; ?>
        <?php endif; ?>
    </div>
</div>