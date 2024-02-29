<?php
include '../koneksi.php';

$id_petugas = $_POST['id_petugas'];
$namapetugas = $_POST['namapetugas'];
$username = $_POST['username'];
$id_petugas = $_POST['id_petugas'];
$password = $_POST['password'];
$level = $_POST['level'];

if (!$password) {
    mysqli_query($koneksi,"UPDATE petugas set namapetugas='$namapetugas', username='$username', level='$level' where id_petugas='$id_petugas'");
} else {
    mysqli_query($koneksi,"UPDATE petugas set namapetugas='$namapetugas', username='$username',password='$password', 
    level='$level' where id_petugas='$id_petugas'");
}

header("location:data_pengguna.php?pesan=update");
?>