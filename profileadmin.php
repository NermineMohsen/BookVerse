<?php
session_start();
if(!empty($_SESSION['Login_Admin'])) {

	include "_inc/db.open.php";

	$sql = "SELECT * FROM admin WHERE name='".$_SESSION['Login_Admin']."'";
	$result = mysql_query($sql, $dbc) or die(mysql_error());
	$row = mysql_fetch_assoc($result);
	$uid = $row['id'];
	?>
	
	<!DOCTYPE html>
	<html>
	<head>
		<title>Bookverse</title>
		<link rel="stylesheet" type="text/css" href="_lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="_lib/css/bootstrap.css">
		<style>
		#users {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#users td, #users th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#users tr:nth-child(even){background-color: #f2f2f2;}

		#users tr:hover {background-color: #ddd;}

		#users th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>
	<?php 
	$sql2 = "SELECT * FROM users";
	$result2 = mysql_query($sql2,$dbc);
	?>
	<table id = "users"> 
		<tr>
			<th>Users_ID</th>
			<th>Users Name</th>
			<th>Users Email</th>
			<th>Users Password</th>
			<th>Users Phone</th>
			<th>Choice</th>
		</tr>
		<?php
		while ($row2 = mysql_fetch_assoc($result2)){
			?>
			
			<tr>
				<td><?php echo $row2['user_id'];?></td>
				<td><?php echo $row2['name'];?></td>
				<td><?php echo $row2['email'];?></td>
				<td><?php echo $row2['password'];?></td>
				<td><?php echo $row2['phone'];?></td>
				<td><a href = "updateuser.php?table=users&id=<?php echo $row2['user_id'];?>">Update</a></td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>
<?php mysql_close($dbc); ?>
<script type="text/javascript" src="_lib/js/jquery.js"></script>
<script type="text/javascript" src="_lib/js/bootstrap.js"></script>

<?php } ?>