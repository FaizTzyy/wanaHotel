
<?php
include "koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"select * from resepsionis where id_resepsionis='$id'");
while($d=mysqli_fetch_array($data)){
?>
<link rel="stylesheet" href="stel.css">
<div class="containt">
<div class="resContainer">
<form action="edit-aksi-resepsionis.php" method="post">
    <table>
        <tr>
            <td>Id Resepsionis</td>
            <td><input type="number" name="idres" value="<?php echo $d['id_resepsionis']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Resepsionis</td>
            <td><input type="text" name="namres" value="<?php echo $d['nama_resepsionis']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="gender" value="<?php echo $d['jenis_kelamin']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><input type="number" name="no" value="<?php echo $d['no_telpon']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="submit" type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
<?php
}
?>       