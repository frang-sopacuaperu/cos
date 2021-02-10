<div class="col-md-6">
    <div class="card">
        <?php if ($status == true) : ?>
            <div class="card-header">Edit Lokasi</div>
            <form action="" method="POST">
                <div class="card-body">
                    <div class="form-group d-flex">
                        <div class="col-sm-3">Kode</div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="KODE" value="<?= $data['KODE']; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-3">Keterangan</div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="KETERANGAN" value="<?= $data['KETERANGAN']; ?>">
                            <small class=" form-text text-danger"><?= form_error('KETERANGAN'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="DEF" id="DEF" value="1" checked>
                            <label class="form-check-label" for="DEF">Default</label>
                            <small class=" form-text text-danger"><?= form_error('DEF'); ?></small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="<?= base_url('lokasi') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
                </div>
            </form>
        <?php else : echo $message; ?>
        <?php endif; ?>
    </div>
</div>