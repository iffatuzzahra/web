<?php 
	session_start();
	include 'koneksi.php';
	if (isset($_SESSION['login']) && $_SESSION['login']) {
		echo "anda masuk sebagai ". $_SESSION['nama'];
	}
	else {
		echo "anda belum masuk";
	}

 ?>