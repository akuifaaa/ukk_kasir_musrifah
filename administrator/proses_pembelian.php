<?php
include'../koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$namapelanggan = $_POST['namapelanggan'];
$nomortelepon = $_POST['nomortelepon'];
$alamat = $_POST['alamat'];
$tanggalpenjualan = $_POST['tanggalpenjualan'];

mysqli_query($koneksi,"INSERT INTO pelanggan values('$id_pelanggan','$namapelanggan','$alamat','$nomortelepon')");
mysqli_query($koneksi,"INSERT INTO penjualan values('','$tanggalpenjualan','','$id_pelanggan')");

header("location:pembelian.php?pesan=simpan");

?>