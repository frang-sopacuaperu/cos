<div class="card">
    <div class="card-header">Tambah Satuan Baru</div>
    <form action="" method="POST">
        <div class="card-body">
            <input type="hidden" class="form-control" name="KODE" id="KODE" value="<?= set_value('KODE') ?>">
            <div class="form-group d-flex">
                <div class="col-sm-2">Nama</div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="NAMA" id="NAMA" value="<?= set_value('NAMA') ?>">
                    <small class=" form-text text-danger"><?= form_error('NAMA'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Konversi</div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="KONVERSI" id="KONVERSI" value="<?= set_value('KONVERSI') ?>">
                    <small class=" form-text text-danger"><?= form_error('KONVERSI'); ?></small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="<?= base_url('satuan') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
        </div>
    </form>
</div>