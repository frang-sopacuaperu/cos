<?php if ($status == true) : ?>

    <p>Kode barang : <?= $data['KODE']; ?></p>
    <p>Keterangan barang: <?= $data['KETERANGAN']; ?></p>

<?php else : echo $message; ?>
<?php endif; ?>