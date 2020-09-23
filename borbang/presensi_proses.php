<?php 
    $id=$_POST['id'];
    $presensi=$_POST['presensi'];
    
	include 'koneksi.php';
	$query=mysqli_query($konek,"INSERT INTO presensi VALUE ('$id','$presensi')");

	header('location:beranda.php');
?>