<?php 
	include 'koneksi.php';

	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql=mysqli_query ($konek,"insert into user value ('$email', '$nama', '$password')");

	if ($sql) {
	 	$message ='Berhasil Mendaftar, Silahkan Masuk Kembali!';
	 } 
	 else {
	 	$message ='Gagal Menyimpan Data';
	 }

	 header("location: index.php?message=$message");

 ?>