<?php
// masukan file koneksi.php
include '../config/koneksi.php';
// variabel inputan dari file masukan file sebelumnya yaitu register.php

$nama=$_POST['nama'];
$deskripsi=$_POST['deskripsi'];
$kategori=$_POST['kategori'];
$lokasi=$_POST['lokasi'];



// query untuk input data sesuai tabel
mysqli_query($konek,"INSERT INTO tbl_aset VALUES (NULL, '$nama', '$deskripsi', '$idkategori', '$idlokasi')");

header('Location:../index.php');
?>
