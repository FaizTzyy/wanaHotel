<link rel="stylesheet" href="stel.css">
<div class="containt">
<div class="resContainer">
<form action="in-aksi-transaksi.php" method="post">
    <table>
        <tr>
            <td>Id Transaksi</td>
            <td><input type="number" name="idtr"></td>
        </tr>
        <tr>
            <td>Id Resepsionis</td>
            <td><input type="number" name="idres"></td>
        </tr>
        <tr>
            <td>Id Tamu</td>
            <td><input type="text" name="idtam"></td>
        </tr>
        <tr>
            <td>Id Reservasi</td>
            <td><input type="number" name="idresv"></td>
        </tr>
        <tr>
            <td>Kode Kamar</td>
            <td><input type="text" name="kodekm"></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><input type="number" name="total"></td>
        </tr>
        <tr>
            <td>Pay Status</td>
            <td><input type="text" name="pay"></td>
        </tr>
        <tr>
            <td>Tgl Bayar</td>
            <td><input type="date" name="tbayar"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="submit" type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>