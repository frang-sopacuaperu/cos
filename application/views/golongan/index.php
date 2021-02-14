<div class="card">
    <div class="card-header">
        <h3 class="card-title">Golongan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3">
            <a href="<?= base_url('golongan/create_gol') ?>"><button type="button" class="btn btn-primary">
                    Tambah Golongan
                </button></a>
        </div>
        <div>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Golongan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if ($status == true) : ?>
                    <?php foreach ($data as $gol) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $gol['KODE']; ?></td>
                            <td><?= $gol['KETERANGAN']; ?></td>
                            <td>
                                <a href="<?= base_url('golongan/edit_gol/') . $gol['KODE']; ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('golongan/delete_gol/') . $gol['KODE']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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