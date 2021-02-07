<div class="col-md-6 py-3 px-3">
    <h1 class="h3 text-gray-800">Tambah Lokasi Baru</h1>
    <hr>
    <div class="card">
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