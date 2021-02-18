<div class="card">
    <?php if ($status == true) : ?>
        <div class="card-header">Edit Satuan</div>
        <form action="" method="POST">
            <div class="card-body">
                <div class="form-group d-flex">
                    <div class="col-sm-2">Kode Satuan</div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="KODE" value="<?= $data['KODE']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Nama</div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="NAMA" value="<?= $data['NAMA']; ?>">
                        <small class=" form-text text-danger"><?= form_error('NAMA'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Konversi</div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="KONVERSI" value="<?= $data['KONVERSI']; ?>">
                        <small class=" form-text text-danger"><?= form_error('KONVERSI'); ?></small>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('satuan') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
            </div>
        </form>
    <?php else : echo $message; ?>
    <?php endif; ?>
</div>