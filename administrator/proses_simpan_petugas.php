<?php
include '../koneksi.php';

$namapetugas = $_POST['namapetugas'];
$username = $_POST['username'];
$password = ($_POST['password']);
$level = $_POST['level'];

mysqli_query($koneksi,"INSERT INTO petugas values('','$namapetugas','$username','$password','$level')");

header("location:data_pengguna.php?pesan=simpan");
?>