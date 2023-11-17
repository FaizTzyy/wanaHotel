<head>
    <link rel="stylesheet" href="stel.css">
</head>
<body>
<div class="containt">
<div class="resContainer">
<form action="in-aksi-reservasi.php" method="post">
    <table>
        <tr>
            <td>Id Reservasi</td>
            <td><input type="number" name="idresv"></td>
        </tr>
        <tr>
            <td>Kode Kamar</td>
            <td><input type="number" name="kodekm"></td>
        </tr>
        <tr>
            <td>Id Tamu</td>
            <td><input type="number" name="idtam"></td>
        </tr>
        <tr>
            <td>Tamu Dewasa</td>
            <td><input type="number" name="jtamud"></td>
        </tr>
        <tr>
            <td>Tamu Anak</td>
            <td><input type="number" name="jtamua"></td>
        </tr>
        <tr>
            <td>Jumlah Kamar</td>
            <td><input type="number" name="jkm"></td>
        </tr>
        <tr>
            <td>Check-in</td>
            <td><input type="date" name="checkin"></td>
        </tr>
        <tr>
            <td>Check-out</td>
            <td><input type="date" name="checkout"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="submit" type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
</div>
</div>
</body>