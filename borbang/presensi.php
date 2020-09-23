<!DOCTYPE html>
<html>
<head>
	<title>Presensi</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
<?php
    $id=$_GET['id'];
?>

	<div class="container">
	<form action="presensi_proses.php" method="post" class="form-group">
		<table class="container">
        <input type="hidden" name="id" value="<?=$id?>">
		<tr>
			<td> Pilih Tanggal</td>
			<td> : </td>
			<td> <input type="date" name="presensi"> </td>
		</tr>
		<tr>
			<td colspan="3"> <input type="submit" name="masuk" value="masuk" class="btn btn-primary"> </td>
		</tr>
	</table>
	</form>
	</div>
</body>
</html>