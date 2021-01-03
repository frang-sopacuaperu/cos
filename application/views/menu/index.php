<div class="card">
    <div class="card-header">
        <h3 class="card-title">Managemen Menu</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Caption Menu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu_level1 as $m1) : ?>
                    <tr>
                        <td><?= $m1['MENU_ID_LEVEL1'] ?></td>
                        <td><?= $m1['MENU_NAME'] ?></td>
                        <td><?= $m1['MENU_CAPTION'] ?></td>
                        <td>
                            <a href="#"><button class="btn btn-primary">Edit</button></a>
                            <a href="#"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>