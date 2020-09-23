<?php 
	$id=$_GET['id'];

	include 'koneksi.php';
	$query=mysqli_query($konek,"DELETE FROM freelancer WHERE id='$id' ");

	header('location:beranda.php');
	//$query=mysqli_query($konek,"SELECT * FROM freelancer WHERE id='$id' ");
?>