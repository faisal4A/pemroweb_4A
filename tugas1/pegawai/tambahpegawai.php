<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$nama =$_POST['nama'];
$nip =$_POST['nip'];
$noHp =$_POST['noHp'];
$email =$_POST['email'];


//menginput data ke database
mysqli_query($koneksi,"insert into pegawai1 values('$nama','$nip','$noHp','$email')");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>