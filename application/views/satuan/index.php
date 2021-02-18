<div class="card">
    <div class="card-header">
        <h3 class="card-title">Satuan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3">
            <a href="<?= base_url('satuan/create_satuan') ?>"><button type="button" class="btn btn-primary">
                    Tambah Satuan
                </button></a>
        </div>
        <div>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Satuan</th>
                    <th>Nama</th>
                    <th>Konversi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if ($status == true) : ?>
                    <?php foreach ($data as $sat) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $sat['KODE']; ?></td>
                            <td><?= $sat['NAMA']; ?></td>
                            <td><?= $sat['KONVERSI']; ?></td>
                            <td>
                                <a href="<?= base_url('satuan/edit_satuan/') . $sat['KODE']; ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('satuan/delete_satuan/') . $sat['KODE']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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