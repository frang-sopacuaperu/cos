<div class="col-md-12">
    <div class="card">
        <div class="card-header">Edit Barang</div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group d-flex">
                    <div class="col-sm-2">Golongan</div>
                    <div class="col-sm-10">
                        <select name="GOLONGAN_ID" id="GOLONGAN_ID" class="form-control">
                            <option value="">Pilih Golongan</option>
                            <?php foreach ($golongan as $gol) : ?>
                                <?php if ($gol['KODE'] == $data['GOLONGAN_ID']) : ?>
                                    <option value="<?= $data['GOLONGAN_ID'] ?>" selected><?= $data['GOLONGAN_ID'] ?> = <?= $gol['KETERANGAN'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $gol['KODE'] ?>"><?= $gol['KODE'] ?> = <?= $gol['KETERANGAN'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <small class=" form-text text-danger"><?= form_error('GOLONGAN_ID'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Sub Golongan</div>
                    <div class="col-sm-10">
                        <select name="SUB_GOLONGAN_ID" id="SUB_GOLONGAN_ID" class="form-control">
                            <option value="">Pilih Sub Golongan</option>
                            <?php foreach ($subgolongan as $subgol) : ?>
                                <?php if ($subgol['KODE'] == $data['SUB_GOLONGAN_ID']) : ?>
                                    <option value="<?= $data['SUB_GOLONGAN_ID'] ?>" selected><?= $data['SUB_GOLONGAN_ID'] ?> = <?= $subgol['KETERANGAN'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $subgol['KODE'] ?>"><?= $subgol['KODE'] ?> = <?= $subgol['KETERANGAN'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <small class=" form-text text-danger"><?= form_error('GOLONGAN_ID'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Kode</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="KODE" id="KODE" value="<?= $data['KODE'] ?>" disabled>
                        <small class=" form-text text-danger"><?= form_error('KODE'); ?></small>
                    </div>
                    <div class="col-sm-2">Barcode</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="KODE_BARCODE" id="KODE_BARCODE" value="<?= $data['KODE_BARCODE'] ?>">
                        <small class=" form-text text-danger"><?= form_error('KODE_BARCODE'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Nama</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="Nama" value="<?= $data['NAMA'] ?>">
                        <small class=" form-text text-danger"><?= form_error('NAMA'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Supplier</div>
                    <div class="col-sm-10">
                        <select name="SUPPLIER_ID" id="SUPPLIER_ID" class="form-control">
                            <option value="">Pilih Supplier</option>
                            <?php foreach ($supplier as $spp) : ?>
                                <?php if ($spp['KODE'] == $data['SUPPLIER_ID']) : ?>
                                    <option value="<?= $data['SUPPLIER_ID'] ?>" selected><?= $data['SUPPLIER_ID'] ?> = <?= $spp['NAMA'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $spp['KODE'] ?>"><?= $spp['KODE'] ?> = <?= $spp['NAMA'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <small class=" form-text text-danger"><?= form_error('GOLONGAN_ID'); ?></small>
                    </div>
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
                    <div class="col-sm-0">1</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="SATUAN" id="SATUAN" value="<?= $data['SATUAN'] ?>">
                        <small class=" form-text text-danger"><?= form_error('SATUAN'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="BIJI1" id="BIJI1" value="<?= $data['BIJI1'] ?>">
                        <small class=" form-text text-danger"><?= form_error('BIJI1'); ?></small>
                    </div>
                    <div class="col-sm-0">1</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="HARGA_JUAL" id="HARGA_JUAL" value="<?= $data['HARGA_JUAL'] ?>">
                        <small class=" form-text text-danger"><?= form_error('HARGA_JUAL'); ?></small>
                    </div>
                </div>

                <div class="form-group d-flex">
                    <div class="col-sm-0">2</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="SATUAN2" id="SATUAN2" value="<?= $data['SATUAN2'] ?>">
                        <small class=" form-text text-danger"><?= form_error('SATUAN2'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="BIJI2" id="BIJI2" value="<?= $data['BIJI2'] ?>">
                        <small class=" form-text text-danger"><?= form_error('BIJI2'); ?></small>
                    </div>
                    <div class="col-sm-0">2</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="" id="" placeholder="Harga Jual 2">
                        <small class=" form-text text-danger"><?= form_error(''); ?></small>
                    </div>
                </div>

                <div class="form-group d-flex">
                    <div class="col-sm-0">3</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="SATUAN3" id="SATUAN3" value="<?= $data['SATUAN3'] ?>">
                        <small class=" form-text text-danger"><?= form_error('SATUAN3'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="BIJI3" id="BIJI3" value="<?= $data['BIJI3'] ?>">
                        <small class=" form-text text-danger"><?= form_error('BIJI3'); ?></small>
                    </div>
                    <div class="col-sm-0">3</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="" id="" placeholder="Harga Jual 3">
                        <small class=" form-text text-danger"><?= form_error(''); ?></small>
                    </div>
                </div>

                <div class="form-group d-flex">
                    <div class="col-sm-0">4</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="SATUAN4" id="SATUAN4" value="<?= $data['SATUAN4'] ?>">
                        <small class=" form-text text-danger"><?= form_error('SATUAN4'); ?></small>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="BIJI4" id="BIJI4" value="<?= $data['BIJI4'] ?>">
                        <small class=" form-text text-danger"><?= form_error('BIJI4'); ?></small>
                    </div>
                    <div class="col-sm-0">4</div>
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
                    <div class="col-sm-2">Stok Awal</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="STOK_AWAL" id="STOK_AWAL" value="<?= $data['STOK_AWAL'] ?>">
                        <small class=" form-text text-danger"><?= form_error('STOK_AWAL'); ?></small>
                    </div>
                    <div class="col-sm-2">General</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="DISKON_GENERAL" id="DISKON_GENERAL" value="<?= $data['DISKON_GENERAL'] ?>">
                        <small class=" form-text text-danger"><?= form_error('DISKON_GENERAL'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Stok</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="STOK" id="STOK" value="<?= $data['STOK'] ?>">
                        <small class=" form-text text-danger"><?= form_error('STOK'); ?></small>
                    </div>
                    <div class="col-sm-2">Silver</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="DISKON_SILVER" id="DISKON_SILVER" value="<?= $data['DISKON_SILVER'] ?>">
                        <small class=" form-text text-danger"><?= form_error('DISKON_SILVER'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Harga Beli</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="HARGA_BELI" id="HARGA_BELI" value="<?= $data['HARGA_BELI'] ?>">
                        <small class=" form-text text-danger"><?= form_error('HARGA_BELI'); ?></small>
                    </div>
                    <div class="col-sm-2">Gold</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="DISKON_GOLD" id="DISKON_GOLD" value="<?= $data['DISKON_GOLD'] ?>">
                        <small class=" form-text text-danger"><?= form_error('DISKON_GOLD'); ?></small>
                    </div>
                </div>

                <div class="form-group d-flex">
                    <div class="col-sm-2">Minimum Stok</div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="MIN_STOK" id="MIN_STOK" value="<?= $data['MIN_STOK'] ?>">
                        <small class=" form-text text-danger"><?= form_error('MIN_STOK'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Maximum Stok</div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="MAX_STOK" id="MAX_STOK" value="<?= $data['MAX_STOK'] ?>">
                        <small class=" form-text text-danger"><?= form_error('MAX_STOK'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Garansi</div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="GARANSI" id="GARANSI" value="<?= $data['GARANSI'] ?>">
                        <small class=" form-text text-danger"><?= form_error('GARANSI'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Poin</div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="POIN" id="POIN" value="<?= $data['POIN'] ?>">
                        <small class=" form-text text-danger"><?= form_error('POIN'); ?></small>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="col-sm-2">Lokasi</div>
                    <div class="col-sm-10">
                        <select name="LOKASI_ID" id="LOKASI_ID" class="form-control">
                            <option value="">Pilih Lokasi</option>
                            <?php foreach ($lokasi as $lok) : ?>
                                <?php if ($lok['KODE'] == $data['LOKASI_ID']) : ?>
                                    <option value="<?= $data['LOKASI_ID'] ?>" selected><?= $data['LOKASI_ID'] ?> = <?= $lok['KETERANGAN'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $lok['KODE'] ?>"><?= $lok['KODE'] ?> = <?= $lok['KETERANGAN'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <small class=" form-text text-danger"><?= form_error('GOLONGAN_ID'); ?></small>
                    </div>
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

                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('barang') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
            </form>
        </div>
    </div>
</div>