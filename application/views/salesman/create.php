<div class="col-md-10">
    <div class="card">
        <div class="card-header">Tambah Salesman Baru</div>
        <form action="" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="KODE" id="KODE" placeholder="Kode" value="<?= set_value('KODE') ?>">
                    <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="Nama" value="<?= set_value('NAMA') ?>">
                    <small class=" form-text text-danger"><?= form_error('NAMA'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" placeholder="Alamat#1" value="<?= set_value('ALAMAT') ?>">
                    <small class=" form-text text-danger"><?= form_error('ALAMAT'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="ALAMAT2" id="ALAMAT2" placeholder="Alamat#2" value="<?= set_value('ALAMAT2') ?>">
                    <small class=" form-text text-danger"><?= form_error('ALAMAT2'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="TELEPON" id="TELEPON" placeholder="Telepon" value="<?= set_value('TELEPON') ?>">
                    <small class=" form-text text-danger"><?= form_error('TELEPON'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="TELEPON2" id="TELEPON2" placeholder="No. HP" value="<?= set_value('TELEPON2') ?>">
                    <small class=" form-text text-danger"><?= form_error('TELEPON2'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="NO_REKENING" id="NO_REKENING" placeholder="No. Rekening" value="<?= set_value('NO_REKENING') ?>">
                    <small class=" form-text text-danger"><?= form_error('NO_REKENING'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="PLAFON_PIUTANG" id="PLAFON_PIUTANG" placeholder="Plafon Piutang" value="<?= set_value('PLAFON_PIUTANG') ?>">
                    <small class=" form-text text-danger"><?= form_error('PLAFON_PIUTANG'); ?></small>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?= base_url('salesman') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
            </div>
        </form>
    </div>
</div>