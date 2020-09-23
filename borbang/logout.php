<?php 

	include 'koneksi.php';
    session_destroy();
    
	header('location:formadmin.php');
?>