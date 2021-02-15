<div class="card">
    <div class="card-header">Tambah Jasa Baru</div>
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group d-flex">
                <div class="col-sm-2">Kode Jasa</div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="KODE" id="KODE" value="<?= set_value('KODE') ?>">
                    <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Keterangan</div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="KETERANGAN" id="KETERANGAN" value="<?= set_value('KETERANGAN') ?>">
                    <small class=" form-text text-danger"><?= form_error('KETERANGAN'); ?></small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="<?= base_url('jasa') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
        </div>
    </form>
</div>