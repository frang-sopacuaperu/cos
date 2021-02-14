<div class="card">
    <div class="card-header">Tambah Customer Baru</div>
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group d-flex">
                <div class="col-sm-2">Wilayah <span class="text-red">*</span></div>
                <div class="col-sm-10">
                    <select name="WILAYAH_ID" id="WILAYAH_ID" class="form-control">
                        <option value="">Pilih Wilayah</option>
                        <?php foreach ($data as $wil) : ?>
                            <option value="<?= $wil['KODE'] ?>"><?= $wil['KODE'] ?> - <?= $wil['KETERANGAN'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class=" form-text text-danger"><?= form_error('WILAYAH_ID'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Kode <span class="text-red">*</span></div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="KODE" id="KODE" value="<?= set_value('KODE') ?>">
                    <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                </div>
                <div class="col-sm-2">Barcode <span class="text-red">*</span></div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="KODE_BARCODE" id="KODE_BARCODE" value="<?= set_value('KODE_BARCODE') ?>">
                    <small class=" form-text text-danger"><?= form_error('KODE_BARCODE'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Nama <span class="text-red">*</span></div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="NAMA" id="NAMA" value="<?= set_value('NAMA') ?>">
                    <small class=" form-text text-danger"><?= form_error('NAMA'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Alamat 1 <span class="text-red">*</span></div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" value="<?= set_value('ALAMAT') ?>">
                    <small class=" form-text text-danger"><?= form_error('ALAMAT'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Alamat 2</div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="ALAMAT2" id="ALAMAT2" value="<?= set_value('ALAMAT2') ?>">
                    <small class=" form-text text-danger"><?= form_error('ALAMAT2'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Kota <span class="text-red">*</span></div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="KOTA" id="KOTA" value="<?= set_value('KOTA') ?>">
                    <small class=" form-text text-danger"><?= form_error('KOTA'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Kontak <span class="text-red">*</span></div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="KONTAK" id="KONTAK" value="<?= set_value('KONTAK') ?>">
                    <small class=" form-text text-danger"><?= form_error('KONTAK'); ?></small>
                </div>
                <div class="col-sm-2">No. HP <span class="text-red">*</span></div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="TELEPON" id="TELEPON" value="<?= set_value('TELEPON') ?>">
                    <small class=" form-text text-danger"><?= form_error('TELEPON'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">NPWP <span class="text-red">*</span></div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="NPWP" id="NPWP" value="<?= set_value('NPWP') ?>">
                    <small class=" form-text text-danger"><?= form_error('NPWP'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Jatuh Tempo</div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="JATUH_TEMPO" id="JATUH_TEMPO" value="<?= set_value('JATUH_TEMPO') ?>">
                    <small class=" form-text text-danger"><?= form_error('JATUH_TEMPO'); ?></small>
                </div>
                <div class="">
                    Hari
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Plafon Piutang</div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="PLAFON_PIUTANG" id="PLAFON_PIUTANG" value="<?= set_value('PLAFON_PIUTANG') ?>">
                    <small class=" form-text text-danger"><?= form_error('PLAFON_PIUTANG'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="col-sm-2">Jenis Anggota <span class="text-red">*</span></div>
                <div class="col-sm-10">
                    <select name="JENIS_ANGGOTA" id="JENIS_ANGGOTA" class="form-control">
                        <option value="">Pilih Jenis Anggota</option>
                        <option value="General">General</option>
                        <option value="Silver">Silver</option>
                        <option value="Gold">Gold</option>
                    </select>
                    <small class=" form-text text-danger"><?= form_error('JENIS_ANGGOTA'); ?></small>
                </div>
            </div>
            <div class="form-group d-flex">
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