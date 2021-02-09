<div class="col-md-10 py-3 px-3">
    <h1 class="h3 text-gray-800">Edit Supplier</h1>
    <hr>
    <div class="card">
        <?php if ($status == true) : ?>
            <form action="" method="POST">
                <div class="card-body">
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Wilayah</div>
                        <div class="col-sm-10">
                            <select name="WILAYAH_ID" id="WILAYAH_ID" class="form-select">
                                <option value="">Pilih Wilayah</option>
                                <?php foreach ($data as $wil) : ?>
                                    <option value="<?= $wil['KODE'] ?>"><?= $wil['KODE'] ?> - <?= $wil['KETERANGAN'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class=" form-text text-danger"><?= form_error('WILAYAH_ID'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Kode</div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="KODE" id="KODE" placeholder="Kode Customer" value="<?= $data['KODE'] ?>" disabled>
                            <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                        </div>
                        <div class="">Barcode</div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="KODE_BARCODE" id="KODE_BARCODE" placeholder="Barcode" value="<?= $data['KODE_BARCODE'] ?>">
                            <small class=" form-text text-danger"><?= form_error('KODE_BARCODE'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Nama</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="Nama" value="<?= $data['NAMA'] ?>">
                            <small class=" form-text text-danger"><?= form_error('NAMA'); ?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" placeholder="Alamat#1" value="<?= $data['ALAMAT'] ?>">
                        <small class=" form-text text-danger"><?= form_error('ALAMAT'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ALAMAT2" id="ALAMAT2" placeholder="Alamat#2" value="<?= $data['ALAMAT2'] ?>">
                        <small class=" form-text text-danger"><?= form_error('ALAMAT2'); ?></small>
                    </div>
                    <div class="form-group row justify-content-between">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="KONTAK" id="KONTAK" placeholder="Kontak" value="<?= $data['KONTAK'] ?>">
                            <small class=" form-text text-danger"><?= form_error('KONTAK'); ?></small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="TELEPON" id="TELEPON" placeholder="No. HP" value="<?= $data['TELEPON'] ?>">
                            <small class=" form-text text-danger"><?= form_error('TELEPON'); ?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="NPWP" id="NPWP" placeholder="NPWP" value="<?= $data['NPWP'] ?>">
                        <small class=" form-text text-danger"><?= form_error('NPWP'); ?></small>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="JATUH_TEMPO" id="JATUH_TEMPO" placeholder="Jatuh Tempo" <?= $data['JATUH_TEMPO'] ?>>
                            <small class=" form-text text-danger"><?= form_error('JATUH_TEMPO'); ?></small>
                        </div>
                        <div class="col-md-1">
                            Hari
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="PLAFON_HUTANG" id="PLAFON_HUTANG" placeholder="Plafon Hutang" value="<?= $data['PLAFON_HUTANG'] ?>">
                        <small class=" form-text text-danger"><?= form_error('PLAFON_HUTANG'); ?></small>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="DEF" id="DEF" value="1" checked>
                            <label class="form-check-label" for="DEF">Default</label>
                            <small class=" form-text text-danger"><?= form_error('DEF'); ?></small>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="<?= base_url('supplier') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
                </div>
            </form>
        <?php else : echo $message; ?>
        <?php endif; ?>
    </div>
</div>