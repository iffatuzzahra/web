<?php 
	include 'koneksi.php';
	session_start();

	$user=$_POST['user'];
	$pass=$_POST['pass'];

	//if ($user=="admin" && $pass=="admin") {
	//	$_SESSION['login']=true;
	//	header("location:index.php");
	//	return;
	//}

	$data=mysqli_query($konek, "select * from user where email='$user' and password=md5('$pass') ");
	$cek= mysqli_fetch_array($data);

	if ($cek > 0) {
		$_SESSION['login']= true;
		$_SESSION['nama']=$cek['nama']; 
		header("location:index.php");
		return;
	}
 ?>