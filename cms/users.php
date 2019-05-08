
<?php 
session_start();
if(!empty($_SESSION['login_user'])){ ?>


	<?php
	require_once('connection.php') ;
	$data = $conn->query("SELECT * FROM admin")->fetchAll();
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
						<h2 class="title-1 m-b-25">Admins <div class="control-group">
								<div class="controls">	<a href="insert.php?table=admin" class="btn btn-primary" type="submit" name="yt0">Insert</a>	</div>
							</div></h2> 
						<div class="table-responsive table--no-card m-b-40">
							<table class="table table-borderless table-striped table-earning">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>password</th>
										<th>Action</th>		
									</tr>
								</thead>
								<tbody>
							
									<?php foreach($data as $admin ){?>
										<tr>
											<td><?php echo $admin['id'];?></td>
											<td><?php echo $admin['username'];?></td>
											<td><?php echo $admin['passcode'];?></td>
											<td><a href="update.php?table=admin&id=<?php echo $admin['id']; ?>"  class="btn btn-primary" type="submit" name="yt0">Update</a>---<a href="delete.php?table=admin&id=<?php echo $admin['id']; ?>"  class="btn btn-danger" type="submit" name="yt0">Delete</a></td>
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