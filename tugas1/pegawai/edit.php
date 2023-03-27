<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PEGAWAI</title>
</head>
<body>
    <h2>EDIT DATA PEGAWAI</h2>
    <br>
    <a href="index.php">KEMBALI</a>
    <br>
    <br>


    <?php
    include 'koneksi.php';
    $nip = $_GET['nip'];
    $data= mysqli_query($koneksi, "select*from pegawai1 where nip='$nip'");
    while($d=mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php">
            <input type="hidden" name="nipp" value="<?php echo $d['nip'];?>">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                    <tr>
                        <td>NIP</td>
                        <td>
                        <input type="text" name="nip" value="<?php echo $d['nip']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>
                        <input type="text" name="nohp" value="<?php echo $d['nohp']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>
                            <input type="text" name="email" value="<?php echo $d['email'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN"></td>
                    </tr>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>