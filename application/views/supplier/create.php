<div class="col-md-10">
    <div class="card">
        <?php if ($status == true) : ?>
            <div class="card-header">Tambah Supplier Baru</div>
            <form action="" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <select name="WILAYAH_ID" id="WILAYAH_ID" class="form-select">
                            <option value="">Pilih Wilayah</option>
                            <?php foreach ($data as $wil) : ?>
                                <option value="<?= $wil['KODE'] ?>"><?= $wil['KODE'] ?> - <?= $wil['KETERANGAN'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class=" form-text text-danger"><?= form_error('WILAYAH_ID'); ?></small>
                    </div>
                    <div class="form-group row justify-content-between">
                        <div class="col-sm-6 py-1">
                            <input type="text" class="form-control" name="KODE" id="KODE" placeholder="Kode Customer" value="<?= set_value('KODE') ?>">
                            <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                        </div>
                        <div class="col-sm-6 py-1">
                            <input type="text" class="form-control" name="KODE_BARCODE" id="KODE_BARCODE" placeholder="Barcode" value="<?= set_value('KODE_BARCODE') ?>">
                            <small class=" form-text text-danger"><?= form_error('KODE_BARCODE'); ?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="Nama" value="<?= set_value('NAMA') ?>">
                        <small class=" form-text text-danger"><?= form_error('NAMA'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" placeholder="Alamat#1" value="<?= set_value('ALAMAT') ?>">
                        <small class=" form-text text-danger"><?= form_error('ALAMAT'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ALAMAT2" id="ALAMAT2" placeholder="Alamat#2" value="<?= set_value('ALAMAT2') ?>">
                        <small class=" form-text text-danger"><?= form_error('ALAMAT2'); ?></small>
                    </div>
                    <div class="form-group row justify-content-between">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="KONTAK" id="KONTAK" placeholder="Kontak" value="<?= set_value('KONTAK') ?>">
                            <small class=" form-text text-danger"><?= form_error('KONTAK'); ?></small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="TELEPON" id="TELEPON" placeholder="No. HP" value="<?= set_value('TELEPON') ?>">
                            <small class=" form-text text-danger"><?= form_error('TELEPON'); ?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="NPWP" id="NPWP" placeholder="NPWP" value="<?= set_value('NPWP') ?>">
                        <small class=" form-text text-danger"><?= form_error('NPWP'); ?></small>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="JATUH_TEMPO" id="JATUH_TEMPO" placeholder="Jatuh Tempo">
                            <small class=" form-text text-danger"><?= form_error('JATUH_TEMPO'); ?></small>
                        </div>
                        <div class="col-md-1">
                            Hari
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="PLAFON_HUTANG" id="PLAFON_HUTANG" placeholder="Plafon Hutang" value="<?= set_value('PLAFON_HUTANG') ?>">
                        <small class=" form-text text-danger"><?= form_error('PLAFON_HUTANG'); ?></small>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="DEF" id="DEF" value="1" checked>
                            <label class="form-check-label" for="DEF">Default</label>
                            <small class=" form-text text-danger"><?= form_error('DEF'); ?></small>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="<?= base_url('supplier') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
                </div>
            </form>
        <?php else : echo $message; ?>
        <?php endif; ?>
    </div>
</div>