<?php
include '../koneksi.php';

$stok = $_POST['stok'];
$id_produk = $_POST['id_produk'];
$jumlahproduk = $_POST['jumlahproduk'];
$harga = $_POST['harga'];
$id_detail = $_POST['id_detail'];
$id_pelanggan = $_POST['id_pelanggan'];
$subtotal = $jumlahproduk * $harga;
$stok_total = $stok - $jumlahproduk;

mysqli_query($koneksi,"UPDATE detailpenjualan set subtotal='$subtotal', jumlahproduk='$jumlahproduk' where id_detail='$id_detail'");
mysqli_query($koneksi,"UPDATE produk set stok='$stok' where id_produk='$id_produk'");

header("location:detail_pembelian.php?id_pelanggan=$id_pelanggan");
?>