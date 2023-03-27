<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$nipp =$_POST['nipp'];
$nama =$_POST['nama'];
$nip =$_POST['nip'];
$noHp =$_POST['nohp'];
$email =$_POST['email'];


//update data ke database
mysqli_query($koneksi,"UPDATE `pegawai1` SET `nama` = '$nama', `nip` = '$nip', `nohp` = '$noHp', `email` = '$email' WHERE `pegawai1`.`nip` = '$nipp';");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>