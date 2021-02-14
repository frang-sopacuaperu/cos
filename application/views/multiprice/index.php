<div class="card">
    <div class="card-header">
        <h3 class="card-title">Multiprice</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3">
            <a href="<?= base_url('multiprice/create_multiprice') ?>"><button type="button" class="btn btn-primary">
                    Tambah Multiprice
                </button></a>
        </div>
        <div>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Barang ID</th>
                    <th>Harga Ke</th>
                    <th>Jumlah</th>
                    <th>Harga Jual</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if ($status == true) : ?>
                    <?php foreach ($data as $multiprice) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $multiprice['BARANG_ID']; ?></td>
                            <td><?= $multiprice['HARGA_KE']; ?></td>
                            <td><?= $multiprice['JUMLAH']; ?></td>
                            <td>Rp. <?= number_format($multiprice['HARGA_JUAL'], 2, ',', '.'); ?></td>
                            <td>
                                <a href="<?= base_url('multiprice/edit_multiprice/') . $multiprice['BARANG_ID']; ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('multiprice/delete_multiprice/') . $multiprice['BARANG_ID']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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