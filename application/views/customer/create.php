<div class="col-md-10">
    <div class="card">
        <div class="card-header">Tambah Customer Baru</div>
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
                <div class="form-group">
                    <input type="text" class="form-control" name="KOTA" id="KOTA" placeholder="Kota" value="<?= set_value('KOTA') ?>">
                    <small class=" form-text text-danger"><?= form_error('KOTA'); ?></small>
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
                    <input type="text" class="form-control" name="PLAFON_PIUTANG" id="PLAFON_PIUTANG" placeholder="Plafon" value="<?= set_value('PLAFON_PIUTANG') ?>">
                    <small class=" form-text text-danger"><?= form_error('PLAFON_PIUTANG'); ?></small>
                </div>
                <div class="form-group">
                    <select name="JENIS_ANGGOTA" id="JENIS_ANGGOTA" class="form-select">
                        <option value="">Pilih Jenis Anggota</option>
                        <option value="General">General</option>
                        <option value="Silver">Silver</option>
                        <option value="Gold">Gold</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="DEF" id="DEF" value="1" checked>
                        <label class="form-check-label" for="DEF">Default</label>
                        <small class=" form-text text-danger"><?= form_error('DEF'); ?></small>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?= base_url('customer') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
            </div>
        </form>
    </div>
</div>