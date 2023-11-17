<html>
<link rel="stylesheet" href="tabel.css">
    </div>
        <nav class="wrap">
            <div class="logo">
                <div class="firstname">admin</div>
                <div class="lastname">Page.</div>
            </div>
            <ul class="navi">
            <li><a href="http://localhost/qoolHotel/admin.php">Home</a></li>
                <li><a href="http://localhost/qoolHotel/tamu.php">Tamu</a></li>
                <li><a href="http://localhost/qoolHotel/kamar.php">Rooms</a></li>
                <li><a href="http://localhost/qoolHotel/transaksi.php">Transaksi</a></li>
                <li><a href="http://localhost/qoolHotel/reservasi.php">Reservasi</a></li>
                <li><a href="http://localhost/qoolHotel/resepsionis.php">Resepsionis</a></li>
                </div>
            </ul>
        </nav>
    </div>    <table border="1">
        <tr>
            <th>Id Transaksi</th>
            <th>Id Resepsionis</th>
            <th>Id Tamu</th>
            <th>Id Reservasi</th>
            <th>Kode Kamar</th>
            <th>Total</th>
            <th>Pay Status</th>
            <th>Tgl Bayar</th>
            <th>Aksi</th>
        </tr>
<?php
include "koneksi.php";
$data=mysqli_query($koneksi,"select * from transaksi");
while($d=mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $d['id_transaksi']?></td>
    <td><?php echo $d['id_resepsionis']?></td>
    <td><?php echo $d['id_tamu']?></td>
    <td><?php echo $d['id_reservasi']?></td>
    <td><?php echo $d['kode_kamar']?></td>
    <td><?php echo $d['total']?></td>
    <td><?php echo $d['pay_status']?></td>
    <td><?php echo $d['tgl_bayar']?></td>
    <td>
       <a href="del-transaksi.php?id=<?php echo $d['id_transaksi']; ?>">Hapus</a> 
       <a href="edit-transaksi.php?id=<?php echo $d['id_transaksi']; ?>">Sunting</a> 
    </td>
</tr>

<?php
}
?>       
    </table><br>
    <a href="in-transaksi.php" class="tambah">Tambah Data</a>
    
</html>