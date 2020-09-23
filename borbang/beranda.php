<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	-->
</head>
<body class="container">
	<h1 style="text-align: center;">PT. BORONGAN BANGSA</h1>
	<a href="tambahpegawai.php"><button class="btn btn-primary">Tambah Pegawai</button></a> 
	<a href="logout.php"><button class="btn btn-primary" style="float: right;" >Keluar</button></a> 
	<h2 style="text-align: center;">Pegawai Freelancer</h2>
<?php 
	include 'koneksi.php';
	$_SESSION['page']='beranda.php';
	$query=mysqli_query($konek,"SELECT * FROM freelancer");
?>
	<div class="container">
	<table class="table">
		<thead class="thead-dark">
			<td>ID</td>
			<td>Nama</td>
			<td>Foto</td>
			<td></td>
		</thead>
<?php
	while ( $data=mysqli_fetch_array($query)) { ?>
		<tr>
			<td><?=$data['id'];?></td>
			<td><?=$data['nama'];?></td>
			<td><img src="<?=  $data['foto']; ?>" width="200px"></td>
			
			<td>
				<a href="detail.php?id=<?= $data['id']?>"> 
					<button class="btn btn-warning">Detail</button> </a>
				<a href="presensi.php?id=<?= $data['id']?>"> 
					<button class="btn btn-danger">Tambah Presensi</button> </a>
				<a href="hapus.php?id=<?= $data['id']?>"> 
					<button class="btn btn-success">Hapus</button> </a>
			</td>
		</tr>

	<?php }
 ?>
		
	</table>
	</div>
</body>
</html>