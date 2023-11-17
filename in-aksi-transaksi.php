<?php
include 'koneksi.php';

$id_transaksi = $_POST['idtr'];
$id_resepsionis = $_POST['idres'];
$id_tamu = $_POST['idtam'];
$id_reservasi = $_POST['idresv'];
$kode_kamar = $_POST['kodekm'];
$pay_status = $_POST['pay'];
$total = $_POST['total'];
$tgl_bayar = $_POST['tbayar'];

mysqli_query($koneksi, "insert into transaksi values('$id_transaksi','$id_resepsionis','$id_tamu','$id_resepsionis','$kode_kamar','$pay_status','$total','$tgl_bayar')");
header("location:transaksi.php");
?>