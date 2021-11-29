<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php if ($process == 'failed') : ?>
    <div class="alert alert-danger" role="alert">
        Semua formulir harus diisi
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h1 style="text-align: center; color: #185ADB;">Form Tambah Pegawai</h1>
                </div>
                <form method="POST" action="<?= BASE_URL . 'process/process_add.php' ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="noid" class="form-label">Nomor ID</label>
                        <input type="number" class="form-control" id="noid" name="noid">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomor HP</label>
                        <input type="number" class="form-control" id="nohp" name="nohp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>