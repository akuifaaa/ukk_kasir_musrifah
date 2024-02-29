<?php
include '../koneksi.php';

$id_produk = $_POST['id_produk'];
$namaproduk = $_POST['namaproduk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($koneksi, "update produk set namaproduk='$namaproduk', harga='$harga', 
stok='$stok' where id_produk='$id_produk'");

header("location:data_barang.php?pesan=update");
?>