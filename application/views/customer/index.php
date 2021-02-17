<div class="card">
    <div class="card-header">
        <h3 class="card-title">Customer</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-3 justify-content-between">
            <a href="<?= base_url('customer/create_customer') ?>"><button type="button" class="btn btn-primary">
                    Tambah Customer
                </button></a>
            <div class="float-right">
                <a href="<?= base_url('customer') ?>"><button type="button" class="btn btn-success">
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
                    <th>Kode Customer</th>
                    <th>Nama</th>
                    <th>Jatuh Tempo</th>
                    <th>Plafon Piutang</th>
                    <th>Piutang Terakhir</th>
                    <th>Wilayah</th>
                    <th>Default</th>
                    <th>Jenis Anggota</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if ($status == true) : ?>
                    <?php foreach ($data as $customer) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $customer['KODE']; ?></td>
                            <td><?= $customer['NAMA']; ?></td>
                            <td><?= $customer['JATUH_TEMPO']; ?></td>
                            <td>Rp. <?= number_format($customer['PLAFON_PIUTANG'], 0, ',', '.'); ?></td>
                            <td>Rp. <?= number_format($customer['TOTAL_PIUTANG'], 0, ',', '.'); ?></td>
                            <td><?= $customer['KETERANGAN']; ?></td>
                            <td>
                                <?php if ($customer['DEF'] == null) : {
                                        echo "0";
                                    }
                                ?>
                                <?php else : ?>
                                    <?= $customer['DEF']; ?>
                                <?php endif; ?>
                            </td>
                            <td><?= $customer['JENIS_ANGGOTA']; ?></td>
                            <td>
                                <a href="<?= base_url('customer/edit_customer/') . $customer['KODE']; ?>"><button class="btn btn-primary my-2">Edit</button></a>
                                <a href="<?= base_url('customer/delete_customer/') . $customer['KODE']; ?>" onclick="return confirm('Yakin hapus ini?')"><button class="btn btn-danger">Delete</button></a>
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