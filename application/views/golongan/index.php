<div class="card">
    <div class="card-header">
        <h3 class="card-title">Managemen Menu</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3">
            <a href="<?= base_url('golongan/tambahgol') ?>"><button type="button" class="btn btn-primary">
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
                    <th>Kode</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($golongan as $gol) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $gol['KODE']; ?></td>
                        <td><?= $gol['KETERANGAN']; ?></td>
                        <td>
                            <a href="<?= base_url('golongan/editgol/') . $gol['KODE']; ?>"><button class="btn btn-primary">Edit</button></a>
                            <a href="<?= base_url('golongan/deletegol/') . $gol['KODE']; ?>"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>