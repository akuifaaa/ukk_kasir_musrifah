<?php
include '../koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$namapelanggan = $_POST['namapelanggan'];
$nomortelepon = $_POST['nomortelepon'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE pelanggan set namapelanggan='$namapelanggan', nomortelepon='$nomortelepon', 
alamat='$alamat' where id_pelanggan='$id_pelanggan'");

header("location:pembelian.php?pesan=update");
?>