<div class="card">
    <div class="card-header">
        <h3 class="card-title">Wilayah</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3">
            <a href="<?= base_url('wilayah/create_wil') ?>"><button type="button" class="btn btn-primary">
                    Tambah Wilayah
                </button></a>
        </div>
        <div>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if ($status == true) : ?>
                    <?php foreach ($data as $wil) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $wil['KODE']; ?></td>
                            <td><?= $wil['KETERANGAN']; ?></td>
                            <td>
                                <a href="<?= base_url('wilayah/edit_wil/') . $wil['KODE']; ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('wilayah/delete_wil/') . $wil['KODE']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                <?php else : echo $message; ?>
                <?php endif; ?>
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>