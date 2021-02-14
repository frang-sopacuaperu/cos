<div class="card">
    <div class="card-header">Tambah Golongan Baru</div>
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group d-flex">
                <div class="col-sm-2">Kode <span class="text-red">*</span></div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="KODE" id="KODE">
                    <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Keterangan <span class="text-red">*</span></div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="KETERANGAN" id="KETERANGAN">
                    <small class=" form-text text-danger"><?= form_error('KETERANGAN'); ?></small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="<?= base_url('golongan') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
        </div>
    </form>
</div>