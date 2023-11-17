<?php
include 'koneksi.php';

$id_tamu = $_POST['idtam'];
$nama_tamu = $_POST['namtam'];
$no_telepon = $_POST['telpon'];
$kewarganegaraan = $_POST['wn'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$jenis_kelamin = $_POST['gender'];

mysqli_query($koneksi, "insert into tamu values ('$id_tamu','$nama_tamu','$no_telepon','$kewarganegaraan','$alamat','$status','$jenis_kelamin')");

header("location:tamu.php");
?>