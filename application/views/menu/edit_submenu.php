<div class="col-md-6 py-3 px-3">
    <h1 class="h3 text-gray-800"><?= $title; ?></h1>
    <hr>
    <div class="card">
        <form action="" method="POST">
            <input type="hidden" name="MENU_ID_LEVEL2" value="<?= $menu_level2['MENU_ID_LEVEL2'] ?>">
            <div class="card-body">
                <div class="form-group">
                    <span class="text-gray">Nama Submenu</span>
                    <input type="text" class="form-control" name="MENU_NAME" id="MENU_NAME" value="<?= $menu_level2['MENU_NAME'] ?>">
                    <small class=" form-text text-danger"><?= form_error('MENU_NAME'); ?></small>
                </div>
                <div class="form-group">
                    <span class="text-gray">Caption Submenu(URL)</span>
                    <input type="text" class="form-control" name="MENU_CAPTION" id="MENU_CAPTION" value="<?= $menu_level2['MENU_CAPTION'] ?>" disabled>
                    <small class=" form-text text-danger"><?= form_error('MENU_CAPTION'); ?></small>
                </div>
                <div class="form-group">
                    <span class="text-gray">Pilih Menu</span>
                    <select name="MENU_ID_LEVEL1" id="MENU_ID_LEVEL1" class="form-control">
                        <?php foreach ($menu_level1 as $m) : ?>
                            <?php if ($m['MENU_ID_LEVEL1'] == $menu_level2['MENU_ID_LEVEL1']) : ?>
                                <option value="<?= $m['MENU_ID_LEVEL1'] ?>" selected><?= $m['MENU_ID_LEVEL1'] ?> = <?= $m['MENU_NAME'] ?></option>
                            <?php else : ?>
                                <option value="<?= $m['MENU_ID_LEVEL1'] ?>"><?= $m['MENU_ID_LEVEL1'] ?> = <?= $m['MENU_NAME'] ?></option>
                            <?php endif; ?>
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
                <button type="submit" name="editsubmenu" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('menu/submenu') ?>"><button type="button" class="btn btn-secondary">Back</button></a>
            </div>
        </form>
    </div>
</div>