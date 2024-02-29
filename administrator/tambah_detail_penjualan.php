<?php 
include '../koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$id_penjualan = $_POST['id_penjualan'];

mysqli_query($koneksi,"INSERT into detailpenjualan values('','$id_penjualan','','','')");

header("location:detail_pembelian.php?id_pelanggan=$id_pelanggan");
?>