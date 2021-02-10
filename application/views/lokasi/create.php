<div class="col-md-6">
    <div class="card">
        <div class="card-header">Tambah Lokasi Baru</div>
        <form action="" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="KODE" id="KODE" placeholder="Kode Lokasi">
                    <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="KETERANGAN" id="KETERANGAN" placeholder="Keterangan">
                    <small class=" form-text text-danger"><?= form_error('KETERANGAN'); ?></small>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="DEF" id="DEF" value="1" checked>
                        <label class="form-check-label" for="DEF">Default</label>
                        <small class=" form-text text-danger"><?= form_error('DEF'); ?></small>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?= base_url('lokasi') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
            </div>
        </form>
    </div>
</div>