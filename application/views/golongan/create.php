<div class="col-md-6">
    <div class="card">
        <div class="card-header">Tambah Golongan Baru</div>
        <form action="" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="KODE" id="KODE" placeholder="Kode Golongan">
                    <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="KETERANGAN" id="KETERANGAN" placeholder="Keterangan">
                    <small class=" form-text text-danger"><?= form_error('KETERANGAN'); ?></small>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?= base_url('golongan') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
            </div>
        </form>
    </div>
</div>