<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		
	</style>
</head>
<body class="container">
	<h1 style="text-align: center;">PT. BORONGAN BANGSA</h1>
<?php 
	$id=$_GET['id'];

	include 'koneksi.php';
	$query=mysqli_query($konek,"SELECT * FROM freelancer, presensi WHERE freelancer.id=presensi.id AND freelancer.id='$id' ");
	$data=mysqli_fetch_array($query);
?>
	<div>
	<a href="<?=$_SESSION['page'];?>"><button class="btn btn-primary">Back</button></a>
	</div>
	<div style="text-align:right;">
	<p>FREELANCER ID : <?=$data['id'];?></p><br>
	<p>NAMA : <?=$data['nama'];?></p>
	</div>
	<div class="container">
	<table class="table col-7"  >
	
		<thead>
			<td>No</td>
			<td>Presensi</td>
		</thead>
		
<?php
	//$jlh=mysqli_num_rows($query);
	$pertnov=0;
	while ( $data=mysqli_fetch_array($query)) { ?>
		<tr>
			<td><?=$pertnov+1;?></td>
			<td><?=$data['presensi'];
			$pertnov=$pertnov+1;
			?></td>
		</tr>
	<?php }
	$gaji=$pertnov*250000;
 ?>
	</table>

	<?php echo "Jumlah Gaji pada Bulan November adalah Rp.$gaji"; ?>
</body>
</html>