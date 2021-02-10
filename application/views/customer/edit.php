<div class="col-md-10 py-3 px-3">
    <div class="card">
        <?php if ($status == true) : ?>
            <div class="card-header">Edit Customer</div>
            <form action="" method="POST">
                <div class="card-body">
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Wilayah</div>
                        <div class="col-sm-10">
                            <select name="WILAYAH_ID" id="WILAYAH_ID" class="form-select">
                                <option value="">Pilih Wilayah</option>
                                <?php foreach ($wilayah as $wil) : ?>
                                    <?php if ($wil['KODE'] == $data['WILAYAH_ID']) : ?>
                                        <option value="<?= $data['WILAYAH_ID'] ?>" selected><?= $data['WILAYAH_ID'] ?> = <?= $wil['KETERANGAN'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $wil['KODE'] ?>"><?= $wil['KODE'] ?> = <?= $wil['KETERANGAN'] ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <small class=" form-text text-danger"><?= form_error('WILAYAH_ID'); ?></small>
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
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Alamat 1</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" placeholder="Alamat#1" value="<?= $data['ALAMAT'] ?>">
                            <small class=" form-text text-danger"><?= form_error('ALAMAT'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Alamat 2</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ALAMAT2" id="ALAMAT2" placeholder="Alamat#2" value="<?= $data['ALAMAT2'] ?>">
                            <small class=" form-text text-danger"><?= form_error('ALAMAT2'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Kota</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="KOTA" id="KOTA" placeholder="Kota" value="<?= $data['KOTA'] ?>">
                            <small class=" form-text text-danger"><?= form_error('KOTA'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Kontak</div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="KONTAK" id="KONTAK" placeholder="Kontak" value="<?= $data['KONTAK'] ?>">
                            <small class=" form-text text-danger"><?= form_error('KONTAK'); ?></small>
                        </div>
                        <div class="">No. HP</div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="TELEPON" id="TELEPON" placeholder="No. HP" value="<?= $data['TELEPON'] ?>">
                            <small class=" form-text text-danger"><?= form_error('TELEPON'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">NPWP</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="NPWP" id="NPWP" placeholder="NPWP" value="<?= $data['NPWP'] ?>">
                            <small class=" form-text text-danger"><?= form_error('NPWP'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Jatuh Tempo</div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="JATUH_TEMPO" id="JATUH_TEMPO" value="<?= $data['JATUH_TEMPO'] ?>">
                            <small class=" form-text text-danger"><?= form_error('JATUH_TEMPO'); ?></small>
                        </div>
                        <div class="">
                            Hari
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Plafon Piutang</div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="PLAFON_PIUTANG" id="PLAFON_PIUTANG" placeholder="Plafon" value="<?= $data['PLAFON_PIUTANG'] ?>">
                            <small class=" form-text text-danger"><?= form_error('PLAFON_PIUTANG'); ?></small>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-sm-2">Jenis Anggota</div>
                        <div class="col-sm-10">
                            <select name="JENIS_ANGGOTA" id="JENIS_ANGGOTA" class="form-select">
                                <?php if ($data['JENIS_ANGGOTA'] ==  $data['JENIS_ANGGOTA']) : ?>
                                    <option class="text-red" value="<?= $data['JENIS_ANGGOTA'] ?>" selected><?= $data['JENIS_ANGGOTA'] ?></option>
                                    <option value="" disabled>Pilih Jenis Anggota</option>
                                    <option value="" disabled>---------------------------</option>
                                    <option value="General">General</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Gold">Gold</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="DEF" id="DEF" value="1" checked>
                            <label class="form-check-label" for="DEF">Default</label>
                            <small class=" form-text text-danger"><?= form_error('DEF'); ?></small>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="<?= base_url('customer') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
                </div>
            </form>
        <?php else : echo $message; ?>
        <?php endif; ?>
    </div>
</div>