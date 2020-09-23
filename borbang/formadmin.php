<!DOCTYPE html>
<html>
<head>
	<title>Form Admin</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
	<div class="container">
	<form action="loginadmin_proses.php" method="post" class="form-group">
		<table class="container">
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td> <input type="text" name="nama"> </td>
		</tr>
		<tr>
			<td> Password </td>
			<td> : </td>
			<td> <input type="password" name="password"> </td>
		</tr>
		<tr>
			<td colspan="3"> <input class="btn btn-primary" type="submit" name="masuk" value="masuk" > </td>
		</tr>
	</table>
	</form>
	</div>
</body>
</html>