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
            <th>Id Tamu</th>
            <th>Nama Tamu</th>
            <th>Telepon</th>
            <th>Kewarganegaraan</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
<?php
include "koneksi.php";
$data=mysqli_query($koneksi,"select * from tamu");
while($d=mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $d['id_tamu']?></td>
    <td><?php echo $d['nama_tamu']?></td>
    <td><?php echo $d['no_telpon']?></td>
    <td><?php echo $d['kewarganegaraan']?></td>
    <td><?php echo $d['alamat']?></td>
    <td><?php echo $d['status']?></td>
    <td><?php echo $d['jenis_kelamin']?></td>
    <td>
       <a href="del-tamu.php?id=<?php echo $d['id_tamu']; ?>">Hapus</a> 
       <a href="edit-tamu.php?id=<?php echo $d['id_tamu']; ?>">Sunting</a> 
    </td>
</tr>

<?php
}
?>       
    </table><br>
    <a href="in-tamu.php" class="tambah">Tambah Data</a>
    
</html>