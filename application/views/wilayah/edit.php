<div class="col-md-6 py-3 px-3">
    <h1 class="h3 text-gray-800">Edit Wilayah</h1>
    <hr>
    <div class="card">
        <?php if ($status == true) : ?>
            <form action="" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="KODE" value="<?= $data['KODE']; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="KETERANGAN" value="<?= $data['KETERANGAN']; ?>">
                        <small class=" form-text text-danger"><?= form_error('KETERANGAN'); ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="<?= base_url('golongan') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
                </div>
            </form>
        <?php else : echo $message; ?>
        <?php endif; ?>
    </div>
</div>