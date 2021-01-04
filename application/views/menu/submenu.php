<div class="card">
    <div class="card-header">
        <h3 class="card-title">Managemen Submenu</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3">
            <a href="<?= base_url('menu/tambahsubmenu') ?>"><button type="button" class="btn btn-primary">
                    Tambah Submenu
                </button></a>
        </div>
        <div>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Submenu</th>
                    <th>Nama Menu</th>
                    <th>Caption Submenu(URL)</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($submenu as $sm) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $sm['MENU_NAME'] ?></td>
                        <td>
                            <?php if ($sm['MENU_ID_LEVEL1'] == 1) {
                                echo "Master";
                            } else {
                                echo "Transaksi";
                            } ?>
                        </td>
                        <td><?= $sm['MENU_CAPTION'] ?></td>
                        <td>
                            <?php if ($sm['STATUS'] == 1) {
                                echo "Aktif";
                            } else {
                                echo "Tidak Aktif";
                            }
                            ?>
                        </td>
                        <td>
                            <a href="<?= base_url('menu/editsubmenu/') . $sm['MENU_ID_LEVEL2'] ?>"><button type="button" class="btn btn-primary"> Edit</button></a>
                            <a href="<?= base_url('menu/deletesubmenu/') . $sm['MENU_ID_LEVEL2'] ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin delete?')">Delete</button></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>

<!-- TAMBAH MODAL -->
<div class="modal fade" id="tambahsubmenuModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Submenu Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu/submenu'); ?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="MENU_NAME" id="MENU_NAME" placeholder="Nama Submenu">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="MENU_CAPTION" id="MENU_CAPTION" placeholder="Caption Submenu(URL)">
                        </div>
                        <div class="form-group">
                            <select name="MENU_ID_LEVEL1" id="MENU_ID_LEVEL1" class="form-control">
                                <option value="">Pilih Menu</option>
                                <?php foreach ($menu_level1 as $m) : ?>
                                    <option value="<?= $m['MENU_ID_LEVEL1'] ?>"><?= $m['MENU_ID_LEVEL1'] ?> = <?= $m['MENU_NAME'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="STATUS" id="STATUS" value="1" checked>
                                <label class="form-check-label" for="STATUS">Aktifkan Submenu?</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>