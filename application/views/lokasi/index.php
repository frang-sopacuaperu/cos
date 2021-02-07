<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lokasi</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3">
            <a href="<?= base_url('lokasi/create_lok') ?>"><button type="button" class="btn btn-primary">
                    Tambah Lokasi
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
                    <th>Default</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if ($status == true) : ?>
                    <?php foreach ($data as $lok) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $lok['KODE']; ?></td>
                            <td><?= $lok['KETERANGAN']; ?></td>
                            <td>
                                <?php if ($lok['DEF'] == null) : {
                                        echo "0";
                                    }
                                ?>
                                <?php else : ?>
                                    <?= $lok['DEF']; ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('lokasi/edit_lok/') . $lok['KODE']; ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('lokasi/delete_lok/') . $lok['KODE']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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