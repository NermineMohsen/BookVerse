<?php 
session_start();
if(!empty($_SESSION['login_user'])){ ?>


<?php include 'headeradmin.php';?>


<?php include 'headeradmin.php';?>	

<?php }else{ 
	header("location: http://localhost/project/loginAdmin.php");
}
?>