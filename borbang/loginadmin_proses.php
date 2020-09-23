<?php 

	$nama=$_POST['nama'];
	$password=$_POST['password'];

	include 'koneksi.php';

	$query=mysqli_query($konek,"SELECT * FROM admin");
	$admin=mysqli_fetch_array($query);
	if ($nama==$admin['nama'] && $password==$admin['password']) {
		header('location:beranda.php');
		$_SESSION['login']=true;
	}
	else if($nama==$admin['nama']){
		echo "password salah";
	}
	else {
		echo "admin tidak terdaftar";
	}

 ?>