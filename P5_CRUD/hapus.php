<?php 

	include 'koneksi.php';
	$email=$_GET['email'];

	$sql= mysqli_query($konek, "delete from user where email='$email'");

	if (!mysqli_error($konek)) {
		#echo "Berhasil Menghapus Data";
		$message = 'Berhasil menghapus data';
	}
	else {
		#echo "Gagal Menghapus Data";
		$message = 'Gagal menghapus data ';
	}

	header("Location: index.php?message=$message");
 ?>