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
    </div>    <table border="1" >
        <tr>
            <th>Id Reservasi</th>
            <th>Kode Kamar</th>
            <th>Id Tamu</th>
            <th>Tamu Dewasa</th>
            <th>Tamu Anak</th>
            <th>Jumlah Kamar</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Aksi</th>
        </tr>
<?php
include "koneksi.php";
$data=mysqli_query($koneksi,"select * from reservasi");
while($d=mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $d['id_reservasi']?></td>
    <td><?php echo $d['kode_kamar']?></td>
    <td><?php echo $d['id_tamu']?></td> 
    <td><?php echo $d['jtamu_dewasa']?></td>    
    <td><?php echo $d['jtamu_anak']?></td>    
    <td><?php echo $d['jumlah_kamar']?></td>
    <td><?php echo $d['checkin']?></td>
    <td><?php echo $d['checkout']?></td>

    <td>
       <a href="del-reservasi.php?id=<?php echo $d['id_reservasi']; ?>">Hapus</a> 
       <a href="edit-reservasi.php?id=<?php echo $d['id_reservasi']; ?>">Sunting</a> 
    </td>
</tr>

<?php
}
?>       
    </table><br>
    <a href="in-reservasi.php" class="tambah">Tambah Data</a>
    
</html>