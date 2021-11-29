<?php

require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>


<?php if ($process == 'success') : ?>
    <div class="alert alert-success" role="alert">
        Data behasil dimasukan
    </div>
<?php endif; ?>

<!-- mengambil data dari database -->
<?php

$pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai");

?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nomor ID</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pegawai as $p) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $p['nama'] ?></td>
                                <td><?= $p['noid'] ?></td>
                                <td><?= $p['nohp'] ?></td>
                                <td><?= $p['email'] ?></td>
                                <td><?= $p['alamat'] ?></td>
                                <td>
                                    <a class="btn btn-danger badge">Delete</a>
                                    <a class="btn btn-info badge" href="<?= BASE_URL . 'dashboard.php?page=edit&id=' . $p['id'] ?>">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>