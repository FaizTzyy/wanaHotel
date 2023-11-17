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
    </div>
    <table border="1">
        <tr>
            <th>Kode Kamar</th>
            <th>No Kamar</th>
            <th>Tipe Kamar</th>
            <th>Lantai</th>
            <th>Jumlah</th>
            <th>Tarif</th>
            <th>Aksi</th>
        </tr>
<?php
include "koneksi.php";
$data=mysqli_query($koneksi,"select * from kamar");
while($d=mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $d['kode_kamar']?></td>
    <td><?php echo $d['no_kamar']?></td>
    <td><?php echo $d['tipe_kamar']?></td>
    <td><?php echo $d['lantai']?></td>
    <td><?php echo $d['jumlah']?></td>
    <td><?php echo $d['tarif']?></td>
    <td>
       <a href="del-kamar.php?id=<?php echo $d['kode_kamar']; ?>">Hapus</a> 
       <a href="edit-kamar.php?id=<?php echo $d['kode_kamar']; ?>">Sunting</a> 
    </td>
</tr>

<?php
}
?>       
    </table><br>
    <a href="in-kamar.php" class="tambah">Tambah Data</a>
    
</html>