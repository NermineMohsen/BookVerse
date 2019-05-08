<!DOCTYPE html>
<html>
<head>
	<title>Bookverse</title>
	<link rel="stylesheet" type="text/css" href="_lib/css/bootstrap.css">
	<style>
	body, html{
		height:100%;
	}
	.signinbg{
		background-image: url("book1.jpg");
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		height:100%;
		width:70%;
		filter: blur(2px);
		--webkit-filter: blur(2px);
	}
	h1{
		font-family: "Times New Roman", Times, serif;
	}
	form {
		top:0%;
		left:67%;
		position: fixed;
		width:40%;
		padding:5%;
	}	
	input[type='text'],input[type='password']{
		border: none;
		border-bottom: 1px #bab7b7 solid;
		width: 300px;
		outline: none;
	}
	input[type='text']:hover,input[type='password']:hover{
		border-color: #a44200;
	}
	input[type="submit"]{
		margin: 40px 0px 0px 20px;
		background-color: #894916;
		color: white;
		width: 100px;
		border: none;
	}
	input[type="submit"]:hover{
		background-color: #c18934;
	}
	label[for="user"],[for="password"]{
		font-style: italic;
		font-size: 15px;
	}
	::placeholder{
		font-style: italic;
		color: #dddddd;
	}
</style>
<body>
	<?php
	include "_inc/db.open.php";
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['name'];
		$password = $_POST['password'];	

		$sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";

        $result = mysql_query($sql, $dbc) or die(mysql_error());
        $row = mysql_fetch_assoc($result);
		
		if(!empty($row)){
			session_start();
			$_SESSION['Login_User'] = $name;
            header('Location:profile.php?id='.$row['user_id']);
		}

	}
	?>
	<div class = "signinbg"></div>
	<form action="index.php" method="POST">
		<h1 style="color:black">Sign In</h1><hr>
		<table>
			<tr>
				<td><label for = "user">Name</label></td>
			</tr>
			<tr>
				<td><input type="text" name="name" id="name" placeholder="Enter Your Name"></td>
			</tr>
			<tr>
				<td><label for = "password">Password</label></td>
			</tr>
			<tr>
				<td><input type="password" name="password" id="password" placeholder="Enter Your Password"></td>
			</tr>
			<td>
				<input type="submit" value="Sign In" name="submit_form">
			</td>
		</table>

	</form>
</body>
	<?php mysql_close($dbc); ?>
	<script type="text/javascript" src="_lib/js/jquery.js"></script>
	<script type="text/javascript" src="_lib/js/bootstrap.js"></script>

	
	</html>