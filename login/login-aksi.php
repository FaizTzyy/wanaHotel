<?php
include 'koneksi.php';

$email = $_POST['email'];
$password= $_POST['password'];

mysqli_query($koneksi, "insert into login_user values ('$email','$password')");

header("location:..\home.php");
?>