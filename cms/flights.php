



<?php 
session_start();
if(!empty($_SESSION['login_user'])){ ?>


<?php
require_once('connection.php') ;
$data = $conn->query("SELECT * FROM flights")->fetchAll();
	?>
<?php include 'headeradmin.php';?>
<!-- PAGE CONTAINER-->
<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		
		<div class="section__content section__content--p30">
			<div class="container-fluid">
                                        
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h2 class="title-1 m-b-25">Flights <div class="control-group">
		<div class="controls">	<a href="insert.php?table=flights"  class="btn btn-primary" type="submit" name="yt0">INSERT</a>	</div>
		</div></h2> 
					<div class="table-responsive table--no-card m-b-40">
						<table class="table table-borderless table-striped table-earning">
							<thead>
								
								<tr>
									<th>ID</th>
									<th>orgin</th>
									<th>destenation</th>
									<th>Date</th>
									<th>Time</th>
									<th>First class</th>
									<th>Second class</th>
									<th>Third class</th>
									<th>Action</th>
												
								</tr>
							</thead>
							<tbody>
							
										<?php foreach ($data as $user ){?>
									<tr>
												<td><?php echo $user['id'];?></td>
												<td><?php echo $user['origin'];?></td>
												<td><?php echo $user['destination'];?></td>
												<td><?php echo $user['date'];?></td>
												<td><?php echo $user['time'];?></td>
												<td><?php echo $user['classa'];?></td>
												<td><?php echo $user['classb'];?></td>
												<td><?php echo $user['classc'];?></td>
												<td><a href="update.php?table=flights&id=<?php echo $user['id']; ?>"  class="btn btn-primary" type="submit" name="yt0">Update</a>---<a href="delete.php?table=flights&id=<?php echo $user['id']; ?>"  class="btn btn-danger" type="submit" name="yt0">Delete</a></td>
									</tr>
									
											<?php }?>
							</tbody>
						</table>
					</div>
				</div>
                            
			</div>
                        
		</div>
                        
	</div>
</div>

<?php include 'footeradmin.php';?>

<?php }else{ 
	header("location: http://localhost/project/loginAdmin.php");
}
?>