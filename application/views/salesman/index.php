<div class="card">
    <div class="card-header">
        <h3 class="card-title">Salesman</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3 justify-content-between">
            <a href="<?= base_url('salesman/create_salesman') ?>"><button type="button" class="btn btn-primary">
                    Tambah Salesman
                </button></a>
            <div class="float-right">
                <a href="<?= base_url('salesman') ?>"><button type="button" class="btn btn-success">
                        Refresh
                    </button></a>
            </div>
        </div>
        <div>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Alamat 2</th>
                    <th>Telepon</th>
                    <th>No. HP</th>
                    <th>No. Rekening</th>
                    <th>Plafon</th>
                    <th>Sisa Piutang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if ($status == true) : ?>
                    <?php foreach ($data as $salesman) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $salesman['KODE']; ?></td>
                            <td><?= $salesman['NAMA']; ?></td>
                            <td><?= $salesman['ALAMAT']; ?></td>
                            <td><?= $salesman['ALAMAT2']; ?></td>
                            <td><?= $salesman['TELEPON']; ?></td>
                            <td><?= $salesman['TELEPON2']; ?></td>
                            <td><?= $salesman['NO_REKENING']; ?></td>
                            <td><?= $salesman['PLAFON_PIUTANG']; ?></td>
                            <td><?= $salesman['TOTAL_PIUTANG']; ?></td>
                            <td>
                                <a href="<?= base_url('salesman/edit_salesman/') . $salesman['KODE']; ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('salesman/delete_salesman/') . $salesman['KODE']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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