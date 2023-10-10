<?php
$koneksi = mysqli_connect("localhost","root","","hollystuck");
if (!$koneksi){
    die("Koneksi Error : ".mysqli_connect_errno());
}
?>
