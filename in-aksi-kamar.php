<?php
include 'koneksi.php';

$kode_kamar = $_POST['kodekm'];
$no_kamar = $_POST['nokm'];
$tipe_kamar = $_POST['tipekm'];
$lantai = $_POST['floor'];
$jumlah = $_POST['qty'];
$tarif = $_POST['price'];

mysqli_query($koneksi, "insert into kamar values('$kode_kamar','$no_kamar','$tipe_kamar','$lantai','$jumlah','$tarif')");
header("location:kamar.php");
?>