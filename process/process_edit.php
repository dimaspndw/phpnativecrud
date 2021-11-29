<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$noid = $_POST['noid'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$id = $_POST['id'];

if (empty($nama) || empty($noid) || empty($email) || empty($nohp) || empty($alamat)) {
    header("location: " . BASE_URL . 'dashboard.php?page=edit&id=' . $id . '&emptyform=true');
} else {
    mysqli_query($koneksi, "UPDATE pegawai SET nama='$nama', noid = '$noid', email='$email', nohp = '$nohp',alamat = '$alamat' WHERE id='$id'");
    header("location: " . BASE_URL . 'dashboard.php?page=home&status=success');
}
