<?php
include 'koneksi.php';

$id=$_GET['id'];
mysqli_query($koneksi,"delete from transaksi where id_transaksi='$id'");

header("location:transaksi.php");
?>