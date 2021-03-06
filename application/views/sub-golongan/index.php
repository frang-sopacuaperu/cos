<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sub Golongan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3">
            <a href="<?= base_url('sub_golongan/create_sub_gol') ?>"><button type="button" class="btn btn-primary">
                    Tambah Sub Golongan
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
                    <?php foreach ($data as $subgol) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $subgol['KODE']; ?></td>
                            <td><?= $subgol['KETERANGAN']; ?></td>
                            <td>
                                <a href="<?= base_url('sub_golongan/edit_sub_gol/') . $subgol['KODE']; ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('sub_golongan/delete_sub_gol/') . $subgol['KODE']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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