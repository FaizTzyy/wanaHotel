<?php
include 'koneksi.php';

$id_resepsionis = $_POST['idres'];
$nama_resepsionis = $_POST['namres'];
$jenis_kelamin = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no'];


mysqli_query($koneksi, "insert into resepsionis values('$id_resepsionis','$nama_resepsionis','$jenis_kelamin','$alamat','$no_telpon')");
header("location:resepsionis.php");
?>