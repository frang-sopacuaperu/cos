<div class="card">
    <div class="card-header">
        <h3 class="card-title">Supplier</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3 justify-content-between">
            <a href="<?= base_url('supplier/create_supplier') ?>"><button type="button" class="btn btn-primary">
                    Tambah Supplier
                </button></a>
            <div class="float-right">
                <a href="<?= base_url('supplier') ?>"><button type="button" class="btn btn-success">
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
                    <th>Jatuh Tempo</th>
                    <th>Plafon Hutang</th>
                    <th>Hutang Terakhir</th>
                    <th>Wilayah</th>
                    <th>Default</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if ($status == true) : ?>
                    <?php foreach ($data as $supplier) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $supplier['KODE']; ?></td>
                            <td><?= $supplier['NAMA']; ?></td>
                            <td><?= $supplier['JATUH_TEMPO']; ?></td>
                            <td><?= $supplier['PLAFON_HUTANG']; ?></td>
                            <td><?= $supplier['TOTAL_HUTANG']; ?></td>
                            <td><?= $supplier['WILAYAH_ID']; ?></td>
                            <td><?= $supplier['DEF']; ?></td>
                            <td>
                                <a href="<?= base_url('supplier/edit_supplier/') . $supplier['KODE']; ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('supplier/delete_supplier/') . $supplier['KODE']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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