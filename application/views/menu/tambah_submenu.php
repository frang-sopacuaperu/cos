<div class="col-md-6 py-3 px-3">
    <h1 class="h3 text-gray-800"><?= $title; ?></h1>
    <hr>
    <div class="card">
        <form action="" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="MENU_NAME" id="MENU_NAME" placeholder="Nama Submenu">
                    <small class=" form-text text-danger"><?= form_error('MENU_NAME'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="MENU_CAPTION" id="MENU_CAPTION" placeholder="Caption Submenu(URL)">
                    <small class=" form-text text-danger"><?= form_error('MENU_CAPTION'); ?></small>
                </div>
                <div class="form-group">
                    <select name="MENU_ID_LEVEL1" id="MENU_ID_LEVEL1" class="form-control">
                        <option value="">Pilih Menu</option>
                        <?php foreach ($menu_level1 as $m) : ?>
                            <option value="<?= $m['MENU_ID_LEVEL1'] ?>"><?= $m['MENU_ID_LEVEL1'] ?> = <?= $m['MENU_NAME'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class=" form-text text-danger"><?= form_error('MENU_ID_LEVEL1'); ?></small>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="STATUS" id="STATUS" value="1" checked>
                        <label class="form-check-label" for="STATUS">Aktifkan Submenu?</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?= base_url('menu/submenu') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
            </div>
        </form>
    </div>
</div>