<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pembelian</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3 justify-content-between">
            <a href="<?= base_url('pembelian/create_beli') ?>"><button type="button" class="btn btn-primary">
                    Tambah Pembelian
                </button></a>
            <div class="float-right">
                <a href="<?= base_url('pembelian') ?>"><button type="button" class="btn btn-success">
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
                    <th>Tanggal</th>
                    <th>Nota</th>
                    <th>Supplier</th>
                    <th>Keterangan</th>
                    <th>Hutang</th>
                    <th>Sisa Hutang</th>
                    <th>Tempo(Nota)</th>
                    <th>Operator</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if ($status == true) : ?>
                    <?php foreach ($data as $beli) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $beli['TANGGAL']; ?></td>
                            <td><?= $beli['NOTA']; ?></td>
                            <td><?= $beli['SUPPLIER_ID']; ?></td>
                            <td><?= $beli['KETERANGAN']; ?></td>
                            <td>HUTANG</td>
                            <td>SISA HUTANG</td>
                            <td><?= $beli['TEMPO']; ?></td>
                            <td><?= $beli['OPERATOR']; ?></td>
                            <td>
                                <a href="<?= base_url('pembelian/edit_beli/') . $beli['NOTA']; ?>"><button class="btn btn-primary my-2">Edit</button></a>
                                <a href="<?= base_url('pembelian/delete_beli/') . $beli['NOTA']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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