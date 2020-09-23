<?php  

	$konek =mysqli_connect("localhost","root","","borbang");
	if ($konek->connect_error) {
		die('Maaf koneksi gagal: '. $konek->connect_error);
	}
	session_start();
?>