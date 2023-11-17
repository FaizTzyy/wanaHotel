<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$no = $_POST['no'];
$wn = $_POST['wn'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$gender = $_POST['gender'];

mysqli_query($koneksi, "update tamu set id_tamu='$id',nama_tamu='$nama',no_telpon='$no',kewarganegaraan='$wn',alamat='$alamat',status='$status',jenis_kelamin='$gender' where id_tamu='$id'");

header("location:tamu.php");
?>