<?php
include 'koneksi.php';

$id=$_GET['id'];
mysqli_query($koneksi,"delete from kamar where kode_kamar='$id'");

header("location:kamar.php");
?>