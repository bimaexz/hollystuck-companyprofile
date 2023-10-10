<?php
include('../koneksi/koneksi.php');

$id_pesan     = $_POST['id_pesan'];
$nama         = $_POST['nama'];
$email        = $_POST['email'];
$no_telepon   = $_POST['no_telepon'];
$pesan        = $_POST['pesan'];

$sql_pesan = "INSERT INTO `pesan`
(`id_pesan`,`nama`,`email`,`no_telepon`,`pesan`)
VALUES ('$id_pesan','$nama','$email','$no_telepon','$pesan')";
$query_pesan = mysqli_query($koneksi, $sql_pesan);
$id_pesan = mysqli_insert_id($koneksi);

header("Location:index.php");
?>
