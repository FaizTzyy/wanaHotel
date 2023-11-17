<?php
include 'koneksi.php';

$id=$_GET['id'];
mysqli_query($koneksi,"delete from resepsionis where id_resepsionis='$id'");

header("location:resepsionis.php");
?>