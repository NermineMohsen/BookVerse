<?php
session_start();
if(!empty($_SESSION['Login_Admin'])) {

	include "_inc/db.open.php";

	$sql = "SELECT * FROM admin WHERE name='".$_SESSION['Login_Admin']."'";
	$result = mysql_query($sql, $dbc) or die(mysql_error());
	$row = mysql_fetch_assoc($result);
	?>
	<?php
	$q3 = "SELECT * FROM users where user_id = '{$_GET['id']}'";
	$res3 = mysql_query($q3,$dbc);
	$row3 = mysql_fetch_assoc($res3);
	echo $row3['user_id'];
	?>
	
	<!DOCTYPE html>
	<html>
	<head>
		<title>Bookverse</title>
		<link rel="stylesheet" type="text/css" href="_lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="_lib/css/bootstrap.css">
		<style>
	</style>
</head>
<body>
	<?php
	include "_inc/db.open.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$q4 = "UPDATE users SET name = '$name' , password = '$password' , email = '$email' , phone = '$phone' where user_id = 'row3['user_id']'";

		$r4 = mysql_query($q4);
		
	}
	?>
	<h1>FORM FOR UPDATE USER <?php echo $row3['user_id'];?></h1>
	<form action="updateuser.php" method="post">
		<h1 style="color:black">Sign Up</h1><hr>
		<table>
			<tr>
				<td><label for = "user">Name</label></td>
			</tr>
			<tr>
				<td><input type="text" name="name" placeholder="Enter Your Name"></td>
			</tr>
			<tr>
				<td><label for = "password">Password</label></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Enter Your Password"></td>
			</tr>
			<tr>
				<td><label for = "email">E-mail</label></td>
			</tr>
			<tr>
				<td><input type="email" name="email" placeholder="Enter Your Email"></td>
			</tr>
			<tr>
				<td><label for = "phone">Phone Number</label></td>
			</tr>
			<tr>
				<td><input type="text" name="phone" placeholder="Enter Your Phone"></td>
			</tr>
			<td>
				<input type="submit" value="Edit" name="edit">
			</td>
		</form>
	</body>
	</html>
	<?php mysql_close($dbc); ?>
	<script type="text/javascript" src="_lib/js/jquery.js"></script>
	<script type="text/javascript" src="_lib/js/bootstrap.js"></script>

	<?php } ?>