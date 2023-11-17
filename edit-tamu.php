
<?php
include "koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"select * from tamu where id_tamu='$id'");
while($d=mysqli_fetch_array($data)){
?>
<link rel="stylesheet" href="stel.css">
<div class="containt">
<div class="resContainer">
<form action="edit-aksi-tamu.php" method="post">
    <table>
        <tr>
            <td>Id Tamu</td>
            <td>
                <input type="number" name="id" value="<?php echo $d['id_tamu']; ?>">
            </td>
        </tr>
        <tr>
            <td>Nama Tamu</td>
            <td>
            <input type="text" name="nama" value="<?php echo $d['nama_tamu']; ?>">
            </td>
        </tr>
         <tr>
            <td>Telepon</td>
            <td>
            <input type="number" name="no" value="<?php echo $d['no_telpon']; ?>">
            </td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>
            <input type="text" name="wn" value="<?php echo $d['kewarganegaraan']; ?>">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
            <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
            <input type="text" name="status" value="<?php echo $d['status']; ?>">
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
            <input type="text" name="gender" value="<?php echo $d['jenis_kelamin']; ?>">
            </td>
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