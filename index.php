<?php
$con=mysqli_connect("localhost","root","","signup");
//include("db.php");
// echo "<pre>";
// print_r($_SERVER);
// die();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script src="jquery.js"></script>
	<script src="js1.js"></script>
	<script src="js2.js"></script>
</head>
<body>
<div class="container">
	<form method="post" action="mypdf.php">
		<button type="submit" name="pdf" class="btn btn-success">PDF</button>
	</form>
<table class="table">
	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Password</td>
		<td>Gender</td>
	</tr>
	<?php
	$qry=mysqli_query($con,"select * from login");
	while($row=mysqli_fetch_array($qry))
	{
		extract($row);
	?>
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $password; ?></td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>