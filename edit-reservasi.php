

<?php
include "koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"select * from reservasi where id_reservasi='$id'");
while($d=mysqli_fetch_array($data)){
?>
<link rel="stylesheet" href="stel.css">
<div class="containt">
<div class="resContainer">
<form action="edit-aksi-reservasi.php" method="post">
    <table>
        <tr>
            <td>Id Reservasi</td>
            <td><input type="number" name="idresv" value="<?php echo $d['id_reservasi']; ?>"></td>
        </tr>
        <tr>
            <td>Kode Kamar</td>
            <td><input type="number" name="kodekm" value="<?php echo $d['kode_kamar']; ?>"></td>
        </tr>
        <tr>
            <td>Id Tamu</td>
            <td><input type="number" name="idtam" value="<?php echo $d['id_tamu']; ?>"></td>
        </tr>
        <tr>
            <td>Tamu Dewasa</td>
            <td><input type="number" name="jtamud" value="<?php echo $d['jtamu_dewasa']; ?>"></td>
        </tr>
        <tr>
            <td>Tamu Anak</td>
            <td><input type="number" name="jtamua" value="<?php echo $d['jtamu_anak']; ?>"></td>
        </tr>
        <tr>
            <td>Jumlah Kamar</td>
            <td><input type="number" name="jkm" value="<?php echo $d['jumlah_kamar']; ?>"></td>
        </tr>
        <tr>
            <td>Check-in</td>
            <td><input type="date" name="checkin" value="<?php echo $d['checkin']; ?>"></td>
        </tr>
        <tr>
            <td>Check-out</td>
            <td><input type="date" name="checkout" value="<?php echo $d['checkout']; ?>"></td>
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