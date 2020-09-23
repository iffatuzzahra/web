<?php 
	include 'koneksi.php';
	$nama=$_POST['nama'];
	$ktp=$_POST['ktp'];

	$target_file =  'upload/'.basename($_FILES["foto"]["name"]);

	move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

	$query=mysqli_query($konek,"INSERT INTO freelancer VALUE ('','$nama','$ktp','$target_file')");

	header('location:beranda.php');
	
?>