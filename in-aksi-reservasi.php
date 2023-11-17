<?php
include 'koneksi.php';

$id_reservasi = $_POST['idresv'];
$kode_kamar = $_POST['kodekm'];
$id_tamu = $_POST['idtam'];
$jtamu_dewasa = $_POST['jtamud'];
$jtamu_anak = $_POST['jtamua'];
$jumlah_kamar = $_POST['jkm'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

mysqli_query($koneksi, "insert into reservasi values ('$id_reservasi', '$kode_kamar', '$id_tamu', '$jtamu_dewasa','$jtamu_anak','$jumlah_kamar','$checkin', '$checkout')");
header("location:reservasi.php");
?>