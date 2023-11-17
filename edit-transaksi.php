
<?php
include "koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"select * from transaksi where id_transaksi='$id'");
while($d=mysqli_fetch_array($data)){
?>
<link rel="stylesheet" href="stel.css">
<div class="containt">
<div class="resContainer">
<form action="edit-aksi-transaksi.php" method="post">
    <table>
        <tr>
            <td>Id Transaksi</td>
            <td><input type="number" name="idtr" value="<?php echo $d['id_transaksi']?>"></td>
        </tr>
        <tr>
            <td>Id Resepsionis</td>
            <td>
                <input type="number" name="idres" value="<?php echo $d['id_resepsionis']; ?>">
            </td>
        </tr>
        <tr>
            <td>Id Tamu</td>
            <td>
            <input type="number" name="idtam" value="<?php echo $d['id_tamu']; ?>">
            </td>
        </tr>
         <tr>
            <td>Id Reservasi</td>
            <td>
            <input type="number" name="idresv" value="<?php echo $d['id_reservasi']; ?>">
            </td>
        </tr>
        <tr>
            <td>Kode Kamar</td>
            <td>
            <input type="text" name="kodekm" value="<?php echo $d['kode_kamar']; ?>">
            </td>
        </tr>
        <tr>
            <td>Total</td>
            <td><input type="number" name="total" value="<?php echo $d['total']; ?>"></td>
        </tr>
        <tr>
            <td>Pay Status</td>
            <td><input type="text" name="pay" value="<?php echo $d['pay_status']; ?>"></td>
        </tr>
            <td>Tgl Bayar</td>
            <td>
            <input type="date" name="tbayar" value="<?php echo $d['tgl_bayar']; ?>">
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