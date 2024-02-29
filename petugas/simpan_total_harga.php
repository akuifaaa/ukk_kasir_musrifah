<?php
include '../koneksi.php';


$totalharga = $_POST['totalharga'];
$id_penjualan = $_POST['id_penjualan'];
$id_pelanggan = $_POST['id_pelanggan'];

mysqli_query($koneksi,"UPDATE penjualan set totalharga='$totalharga' where id_penjualan='$id_penjualan'");

header("location:detail_pembelian.php?id_pelanggan=$id_pelanggan");
?>