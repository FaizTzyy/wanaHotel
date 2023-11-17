<?php
include 'koneksi.php';

$id = $_POST['idres'];
$nama = $_POST['namres'];
$gender= $_POST['gender'];
$alamat = $_POST['alamat'];
$no = $_POST['no'];


mysqli_query($koneksi, "update resepsionis set id_resepsionis='$id',nama_resepsionis='$nama',jenis_kelamin='$gender',alamat='$alamat',no_telpon='$no' where id_resepsionis='$id'");
header("location:resepsionis.php");
?>