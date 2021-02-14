<div class="card">
    <?php if ($status == true) : ?>
        <div class="card-header">Edit Biaya</div>
        <form action="" method="POST">
            <div class="card-body">
                <div class="form-group d-flex">
                    <div class="col-sm-2">Kode Biaya <span class="text-red">*</span></div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="KODE" value="<?= $data['KODE']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Keterangan <span class="text-red">*</span></div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="KETERANGAN" value="<?= $data['KETERANGAN']; ?>">
                        <small class=" form-text text-danger"><?= form_error('KETERANGAN'); ?></small>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('biaya') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
            </div>
        </form>
    <?php else : echo $message; ?>
    <?php endif; ?>
</div>