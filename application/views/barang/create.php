<div class="col-md-12">
    <div class="card">
        <div class="card-header">Tambah Barang Baru</div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <select name="GOLONGAN_ID" id="GOLONGAN_ID" class="form-control">
                        <option value="">Pilih Golongan</option>
                        <?php foreach ($golongan as $wil) : ?>
                            <option value="<?= $wil['KODE'] ?>"><?= $wil['KODE'] ?> - <?= $wil['KETERANGAN'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class=" form-text text-danger"><?= form_error('GOLONGAN_ID'); ?></small>
                </div>
                <div class="form-group">
                    <select name="SUB_GOLONGAN_ID" id="SUB_GOLONGAN_ID" class="form-control">
                        <option value="">Pilih Sub Golongan</option>
                        <?php foreach ($subgolongan as $subgol) : ?>
                            <option value="<?= $subgol['KODE'] ?>"><?= $subgol['KODE'] ?> - <?= $subgol['KETERANGAN'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class=" form-text text-danger"><?= form_error('SUB_GOLONGAN_ID'); ?></small>
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
                    <select name="SUPPLIER_ID" id="SUPPLIER_ID" class="form-control">
                        <option value="">Pilih Supplier</option>
                        <?php foreach ($supplier as $spp) : ?>
                            <option value="<?= $spp['KODE'] ?>"><?= $spp['KODE'] ?> - <?= $spp['NAMA'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class=" form-text text-danger"><?= form_error('SUPPLIER_ID'); ?></small>
                </div>

                <div class="form-group d-flex">
                    <div class="col-sm-4">
                        Satuan
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                        Harga Jual
                    </div>
                </div>

                <div class="form-group d-flex">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="SATUAN" id="SATUAN" placeholder="#1">
                        <small class=" form-text text-danger"><?= form_error('SATUAN'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="BIJI1" id="BIJI1" placeholder="0">
                        <small class=" form-text text-danger"><?= form_error('BIJI1'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="HARGA_JUAL" id="HARGA_JUAL" placeholder="Harga Jual 1">
                        <small class=" form-text text-danger"><?= form_error('HARGA_JUAL'); ?></small>
                    </div>
                </div>

                <div class="form-group d-flex">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="SATUAN2" id="SATUAN2" placeholder="#2">
                        <small class=" form-text text-danger"><?= form_error('SATUAN2'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="BIJI2" id="BIJI2" placeholder="0">
                        <small class=" form-text text-danger"><?= form_error('BIJI2'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="" id="" placeholder="Harga Jual 2">
                        <small class=" form-text text-danger"><?= form_error(''); ?></small>
                    </div>
                </div>

                <div class="form-group d-flex">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="SATUAN3" id="SATUAN3" placeholder="#3">
                        <small class=" form-text text-danger"><?= form_error('SATUAN3'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="BIJI3" id="BIJI3" placeholder="0">
                        <small class=" form-text text-danger"><?= form_error('BIJI3'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="" id="" placeholder="Harga Jual 3">
                        <small class=" form-text text-danger"><?= form_error(''); ?></small>
                    </div>
                </div>

                <div class="form-group d-flex">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="SATUAN4" id="SATUAN4" placeholder="#4">
                        <small class=" form-text text-danger"><?= form_error('SATUAN4'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="BIJI4" id="BIJI4" placeholder="0">
                        <small class=" form-text text-danger"><?= form_error('BIJI4'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="" id="" placeholder="Harga Jual 4">
                        <small class=" form-text text-danger"><?= form_error(''); ?></small>
                    </div>
                </div>

                <div class="form-group d-flex">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        Diskon Member
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="STOK_AWAL" id="STOK_AWAL" placeholder="Stok Awal">
                        <small class=" form-text text-danger"><?= form_error('STOK_AWAL'); ?></small>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="DISKON_GENERAL" id="DISKON_GENERAL" placeholder="General">
                        <small class=" form-text text-danger"><?= form_error('DISKON_GENERAL'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="STOK" id="STOK" placeholder="Stok">
                        <small class=" form-text text-danger"><?= form_error('STOK'); ?></small>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="DISKON_SILVER" id="DISKON_SILVER" placeholder="Silver">
                        <small class=" form-text text-danger"><?= form_error('DISKON_SILVER'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="HARGA_BELI" id="HARGA_BELI" placeholder="Harga Beli">
                        <small class=" form-text text-danger"><?= form_error('HARGA_BELI'); ?></small>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="DISKON_GOLD" id="DISKON_GOLD" placeholder="Gold">
                        <small class=" form-text text-danger"><?= form_error('DISKON_GOLD'); ?></small>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="MIN_STOK" id="MIN_STOK" placeholder="Minimum Stok">
                        <small class=" form-text text-danger"><?= form_error('MIN_STOK'); ?></small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="MAX_STOK" id="MAX_STOK" placeholder="Maximum Stok">
                        <small class=" form-text text-danger"><?= form_error('MAX_STOK'); ?></small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="GARANSI" id="GARANSI" placeholder="Garansi">
                        <small class=" form-text text-danger"><?= form_error('GARANSI'); ?></small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="POIN" id="POIN" placeholder="Poin">
                        <small class=" form-text text-danger"><?= form_error('POIN'); ?></small>
                    </div>
                </div>
                <div class="form-group">
                    <select name="LOKASI_ID" id="LOKASI_ID" class="form-control">
                        <option value="">Pilih Lokasi</option>
                        <?php foreach ($lokasi as $lok) : ?>
                            <option value="<?= $lok['KODE'] ?>"><?= $lok['KODE'] ?> - <?= $lok['KETERANGAN'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class=" form-text text-danger"><?= form_error('LOKASI_ID'); ?></small>
                </div>

                <div class="form-group d-flex">
                    <div class="form-check mr-4">
                        <input type="checkbox" class="form-check-input" name="IS_UPDATE_HARGA_JUAL" id="IS_UPDATE_HARGA_JUAL" value="1" checked>
                        <label class="form-check-label" for="IS_UPDATE_HARGA_JUAL">Boleh Ganti Harga Jual</label>
                        <small class=" form-text text-danger"><?= form_error('IS_UPDATE_HARGA_JUAL'); ?></small>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="IS_WAJIB_ISI_IMEI" id="IS_WAJIB_ISI_IMEI" value="1" checked>
                        <label class="form-check-label" for="IS_WAJIB_ISI_IMEI">Wajib Isi IMEI</label>
                        <small class=" form-text text-danger"><?= form_error('IS_WAJIB_ISI_IMEI'); ?></small>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?= base_url('barang') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
            </form>
        </div>
    </div>
</div>