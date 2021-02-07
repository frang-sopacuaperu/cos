<div class="card">
    <div class="card-header">
        <h3 class="card-title">Biaya</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3">
            <a href="<?= base_url('biaya/create_biaya') ?>"><button type="button" class="btn btn-primary">
                    Tambah Biaya
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
                    <?php foreach ($data as $biaya) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $biaya['KODE']; ?></td>
                            <td><?= $biaya['KETERANGAN']; ?></td>
                            <td>
                                <a href="<?= base_url('biaya/edit_biaya/') . $biaya['KODE']; ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('biaya/delete_biaya/') . $biaya['KODE']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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