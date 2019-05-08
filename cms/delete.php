<?php $table=($_GET['table']);  ?>
<?php 
session_start();
if(!empty($_SESSION['login_user'])){ ?>

	<?php 
	if($table=='admin'){

		require_once('connection.php') ; 



		// sql to delete a record
		$sql = "DELETE FROM admin WHERE id={$_GET['id']}";

		// use exec() because no results are returned
		$conn->exec($sql);
    
    
		header('Refresh:0; users.php');

	}?>
	
	
	<?php 
	if($table=='flights'){

		require_once('connection.php') ; 



		// sql to delete a record
		$sql = "DELETE FROM flights WHERE id={$_GET['id']}";

		// use exec() because no results are returned
		$conn->exec($sql);
    
    
		header('Refresh:0; flights.php');

	}?>

	
	
	<?php 
	if($table=='users'){

		require_once('connection.php') ; 

		
		$sql = "DELETE FROM users WHERE id={$_GET['id']}";

		$conn->exec($sql);
    
    
		header('Refresh:0; accounts.php');

	}?>

	
	
	<?php }else{ 
	header("location: http://localhost/project/loginAdmin.php");
}
?>