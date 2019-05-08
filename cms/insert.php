<?php $table=($_GET['table']);  ?>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST" AND $table=='admin'){

	require_once('connection.php') ;
	$name = $_POST['username'];
	$passcode = $_POST['passcode']; 
	$sql = "INSERT INTO {$table} (username, passcode)
	VALUES ('{$name}', '{$passcode}')";

	$conn->exec($sql);
	header('Refresh:0; users.php');

}?>


<?php 
if($_SERVER["REQUEST_METHOD"] == "POST" AND $table=='flights'){

	require_once('connection.php') ;
	$origin = $_POST['origin'];
	$destination = $_POST['destination'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$classa = $_POST['classa'];
	$classb = $_POST['classb'];
	$classc = $_POST['classc']; 
	$sql = "INSERT INTO {$table} (origin,destination,date,time,classa,classb,classc )
	VALUES ( '{$origin}', '{$destination}', '{$date}', '{$time}', '{$classa}', '{$classb}', '{$classc}')";

	$conn->exec($sql);
	header('Refresh:0; flights.php');

}?>



<?php 
if($_SERVER["REQUEST_METHOD"] == "POST" AND $table=='users'){

	require_once('connection.php') ;
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$password = $_POST['time'];
	$classa = $_POST['classa'];
	$classb = $_POST['classb'];
	$classc = $_POST['classc']; 
	$sql = "INSERT INTO {$table} (origin,destination,date,time,classa,classb,classc )
	VALUES ( '{$origin}', '{$destination}', '{$date}', '{$time}', '{$classa}', '{$classb}', '{$classc}')";

	$conn->exec($sql);
	header('Refresh:0; flights.php');

}?>



<?php 
session_start();
if(!empty($_SESSION['login_user'])){ ?>

	<?php include 'headeradmin.php';?>

	<?php if($table=='admin'){ ?>


		<div class="page-container">
				
			<div class="main-content">
				<div class="section__content section__content--p30">	
	
	
	
	
					<form class="form-horizontal"  action="" method="post">		
						
	
						<div class="control-group "><label class="control-label required" for="Aboutus_vision">User Name <span class="required"></span></label><div class="controls"><input class="span5" maxlength="255" name="username" id="Aboutus_vision" type="text"></div></div>
						<div class="control-group "><label class="control-label required"  >Password <span class="required"></span></label><div class="controls"><input class="span5" maxlength="255" name="passcode" id="Aboutus_mission" type="text"></div></div>								
						<div class="control-group ">
							<div class="controls">	<button class="btn btn-primary" type="submit" name="yt0">Insert</button>	</div>
						</div>
			
					</form>






				</div>
                        
			</div>
		</div>
			
	
		<?php }?>
		
		
		
		
	<?php if($table=='flights'){ ?>


		<div class="page-container">
				
			<div class="main-content">
				<div class="section__content section__content--p30">	
	
	
	
	
					<form class="form-horizontal"  action="" method="post">		
						
	
						<div class="control-group "><label class="control-label required" >orgin <span class="required"></span></label><div class="controls"><input class="span5"  name="origin"  type="text"></div></div>		
						<div class="control-group "><label class="control-label required" >Destination <span class="required"></span></label><div class="controls"><input class="span5"  name="destination"  type="text"></div></div>		
						<div class="control-group "><label class="control-label required" >Date <span class="required"></span></label><div class="controls"><input class="span5"  name="date"  type="date"></div></div>		
						<div class="control-group "><label class="control-label required" >Time <span class="required"></span></label><div class="controls"><input class="span5"  name="time"  type="time"></div></div>		
						<div class="control-group "><label class="control-label required" >Classa <span class="required"></span></label><div class="controls"><input class="span5"  name="classa"  type="number"></div></div>		
						<div class="control-group "><label class="control-label required" >Classb <span class="required"></span></label><div class="controls"><input class="span5"  name="classb"  type="number"></div></div>		
						<div class="control-group "><label class="control-label required" >Classc <span class="required"></span></label><div class="controls"><input class="span5"  name="classc"  type="number"></div></div>								
						<div class="control-group ">
							<div class="controls">	<button class="btn btn-primary" type="submit" name="yt0">Insert</button>	</div>
						</div>
			
					</form>






				</div>
                        
			</div>
		</div>
			
	
		<?php }?>

	<?php include 'footeradmin.php';?>

	<?php }else{ 
	header("location: http://localhost/project/loginAdmin.php");
}
?>