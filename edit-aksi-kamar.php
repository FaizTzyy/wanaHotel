<?php
include 'koneksi.php';

$kode = $_POST['kode'];
$nom = $_POST['nom'];
$tipe = $_POST['tipe'];
$floor = $_POST['floor'];
$jumlah = $_POST['qty'];
$tarif = $_POST['price'];

mysqli_query($koneksi, "update kamar set kode_kamar='$kode', no_kamar='$nom',tipe_kamar='$tipe',lantai='$floor',jumlah='$jumlah',tarif='$tarif' where kode_kamar='$kode'");

header("location:kamar.php");
?>