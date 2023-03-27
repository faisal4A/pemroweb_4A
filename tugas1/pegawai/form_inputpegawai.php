<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form DATA PEGAWAI</title>
</head>
<body>
    <h2>FORM DATA PEGAWAI</h2>
    <br>
    <a href="index.php">KEMBALI</a>
    <br>
    <br>
    <form method="post" action="tambahpegawai.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text"name="nama"></td>
            </tr>
            <tr>
                <td>Nip</td>
                <td><input type="text"name="nip"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="text"name="noHp"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text"name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>