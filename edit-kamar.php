<?php
include "koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"select * from kamar where kode_kamar='$id'");
while($d=mysqli_fetch_array($data)){
?>
<link rel="stylesheet" href="stel.css">
<div class="containt">
<div class="resContainer">
<form action="edit-aksi-kamar.php" method="post">
    <table>
        <tr>
            <td>Nomor Kamar</td>
            <td>
            <input type="text" name="nom" value="<?php echo $d['no_kamar']; ?>">
            </td>
        </tr>
        <tr>
            <td>Tipe Kamar</td>
            <td>
            <input type="text" name="tipe" value="<?php echo $d['tipe_kamar']; ?>">
            </td>
        </tr>
         <tr>
            <td>Lantai</td>
            <td>
            <input type="number" name="floor" value="<?php echo $d['lantai']; ?>">
            </td>
        </tr>
         <tr>
            <td>Jumlah</td>
            <td>
            <input type="number" name="qty" value="<?php echo $d['jumlah']; ?>">
            </td>
        </tr>
        <tr>
            <td>Tarif</td>
            <td>
            <input type="number" name="price" value="<?php echo $d['tarif']; ?>">
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