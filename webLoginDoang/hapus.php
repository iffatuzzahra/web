<?php 
	include 'koneksi.php';

	$email=$_POST['email'];

	$sql=mysqli_query ($konek,"delete from user WHERE email = '$email'");

	if ($sql) {
	 	$message ='Berhasil Menghapus Data';
	 } 
	 else {
	 	$message ='Gagal Menghapus Data';
	 }

	 header("location: index.php?message=$message");

 ?>