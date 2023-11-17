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
            <th>Id Resepsionis</th>
            <th>Nama Resepsionis</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
<?php
include "koneksi.php";
$data=mysqli_query($koneksi,"select * from resepsionis");
while($d=mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $d['id_resepsionis']?></td>
    <td><?php echo $d['nama_resepsionis']?></td>
    <td><?php echo $d['jenis_kelamin']?></td> 
    <td><?php echo $d['alamat']?></td>    
    <td><?php echo $d['no_telpon']?></td>

    <td>
       <a href="del-resepsionis.php?id=<?php echo $d['id_resepsionis']; ?>">Hapus</a> 
       <a href="edit-resepsionis.php?id=<?php echo $d['id_resepsionis']; ?>">Sunting</a> 
    </td>
</tr>

<?php
}
?>       
    </table><br>
    <a href="in-resepsionis.php" class="tambah">Tambah Data</a>
    
</html>