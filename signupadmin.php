<?php
/*session_start();
if(!empty($_SESSION['Login_User'])) {

	include "_inc/db.open.php";

	$sql = "SELECT * FROM users WHERE name='".$_SESSION['Login_User']."'";
	$result = mysql_query($sql, $dbc) or die(mysql_error());
	$row = mysql_fetch_assoc($result);
	$uid = $row['user_id'];


	?>



	<?php 
	if(isset($_POST['submit'])){
		$book1_id = $_POST['userbooks1'];
		$book2_id = $_POST['userbooks2'];
		$q5 = "SELECT user_id FROM books where book_id = '$book2_id'";
		$r5 = mysql_query($q5,$dbc);
		$row2 = mysql_fetch_assoc($r5);
		$q3 ="INSERT INTO exchange (id, book1_id, book2_id, user2_id,status) VALUES (NULL, '$book1_id', '$book2_id',{$row2['user_id']}, 1)";
		$r3 = mysql_query($q3,$dbc);
	}
	?>*/
?>


	
	<!DOCTYPE html>
	<html>
	<head>
		<title>Bookverse</title>
		<link rel="stylesheet" type="text/css" href="_lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="_lib/css/bootstrap.css">
		<style>
		body, html{
			height: 100%;
		}
		.signupbg{
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
		input[type='text'],input[type='password'],input[type='email']{
			border: none;
			border-bottom: 1px #bab7b7 solid;
			width: 300px;
			outline: none;
		}
		input[type='text']:hover,input[type='password']:hover,input[type='email']:hover{
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
		label[for="user"],[for="passcode"],[for="email"],[for="phone"]{
			font-style: italic;
			font-size: 15px;
		}
		::placeholder{
			font-style: italic;
			color: #dddddd;
		}
	</style>
</head>
<body>
	<?php
	include "_inc/db.open.php";

	$name = (isset($_POST['name'])) ? $_POST['name']:'';
	$passcode = (isset($_POST['passcode'])) ? $_POST['passcode']:'';
	$feed = '';

	if (isset($_POST['submit_form'])){
		$q = "INSERT INTO admin (id, name, passcode) VALUES (NULL, '$name', '$passcode')";
		$r = mysql_query($q,$dbc);
			
	}
	?>
	<div class="signupbg"></div>
	<form action="signupadmin.php" method="post">
		<h1 style="color:black">Sign Up</h1><hr>
		<table>
			<tr>
				<td><label for = "user">Name</label></td>
			</tr>
			<tr>
				<td><input type="text" name="name" placeholder="Enter Your Name"></td>
			</tr>
			<tr>
				<td><label for = "passcode">Password</label></td>
			</tr>
			<tr>
				<td><input type="password" name="passcode" placeholder="Enter Your Password"></td>
			</tr>
			<td>
				<input type="submit" value="Sign Up" name="submit_form">
			</td>
		</table>
		</form>
	</body>
	</html>
	<?php mysql_close($dbc); ?>
	<script type="text/javascript" src="_lib/js/jquery.js"></script>
	<script type="text/javascript" src="_lib/js/bootstrap.js"></script>
