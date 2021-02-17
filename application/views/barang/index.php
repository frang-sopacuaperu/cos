<div class="card">
    <div class="card-header">
        <h3 class="card-title">Barang</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3 justify-content-between">
            <a href="<?= base_url('barang/create_barang') ?>"><button type="button" class="btn btn-primary">
                    Tambah Barang
                </button></a>
            <div class="float-right">
                <a href="<?= base_url('barang') ?>"><button type="button" class="btn btn-success">
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
                    <th>Kode Barang</th>
                    <th>Nama</th>
                    <th>Stok Awal</th>
                    <th>Stok</th>
                    <th>Stok Min</th>
                    <th>Stok Max</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Garansi</th>
                    <th>Golongan/Sub Golongan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if ($status == true) : ?>
                    <?php foreach ($data as $barang) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $barang['KODE']; ?></td>
                            <td><?= $barang['NAMA']; ?></td>
                            <td><?= $barang['STOK_AWAL']; ?></td>
                            <td><?= $barang['STOK']; ?></td>
                            <td><?= $barang['MIN_STOK']; ?></td>
                            <td><?= $barang['MAX_STOK']; ?></td>
                            <td>Rp. <?= number_format($barang['HARGA_BELI'], 0, ',', '.'); ?></td>
                            <td>Rp. <?= number_format($barang['HARGA_JUAL'], 0, ',', '.'); ?></td>
                            <td><?= $barang['GARANSI']; ?></td>
                            <td><?= $barang['GOLONGAN_ID']; ?>/<?= $barang['SUB_GOLONGAN_ID']; ?></td>
                            <td>
                                <a href="<?= base_url('barang/edit_barang/') . $barang['KODE']; ?>"><button class="btn btn-primary my-2">Edit</button></a>
                                <a href="<?= base_url('multiprice/edit_multiprice/') . $barang['KODE']; ?>"><button class="btn btn-warning my-2">Multiprice</button></a>
                                <a href="<?= base_url('barang/delete_barang/') . $barang['KODE']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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