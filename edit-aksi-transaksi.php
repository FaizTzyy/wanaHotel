<?php
include 'koneksi.php';

$idtr = $_POST['idtr'];
$idres = $_POST['idres'];
$idtam = $_POST['idtam'];
$idresv = $_POST['idresv'];
$kodekm = $_POST['kodekm'];
$total = $_POST['total'];
$pay = $_POST['pay'];
$tbayar = $_POST['tbayar'];

mysqli_query($koneksi, "update transaksi set id_transaksi='$idtr',id_reservasi='$idres',id_tamu='$idtam',id_reservasi='$idresv',kode_kamar='$kodekm',total='$total',pay_status='$pay',tgl_bayar='$tbayar' where id_transaksi='$idtr'");

header("location:transaksi.php");
?>