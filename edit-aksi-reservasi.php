<?php
include 'koneksi.php';

$idresv = $_POST['idresv'];
$kodekm = $_POST['kodekm'];
$idtam = $_POST['idtam'];
$jtamud = $_POST['jtamud'];
$jtamua = $_POST['jtamua'];
$jkm = $_POST['jkm'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

mysqli_query($koneksi, "update reservasi set id_reservasi='$idresv',kode_kamar='$kodekm',id_tamu='$idtam',jtamu_dewasa='$jtamud',jtamu_anak='$jtamua',jumlah_kamar='$jkm',checkin='$checkin',checkout='$checkout' where id_reservasi='$idresv'");
header("location:reservasi.php");
?>