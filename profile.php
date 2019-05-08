<?php
session_start();
if(!empty($_SESSION['Login_User'])) {

	include "_inc/db.open.php";

$conn2= $conn->query( "SELECT * FROM users WHERE name='".$_SESSION['Login_User']."'");
	$row = $conn2->fetch();
	$uid = $row['user_id'];
	?>
	


	<?php
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['claim'])) {		
		if($_POST['choice'] == 'Accept'){
			$conn2= $conn->query( "SELECT * FROM exchange where user2_id='{$uid}'");
			if ($conn2->execute()) {
			while ($r9 = $conn2->fetch(PDO::FETCH_ASSOC)) {				
				$q10 =  ("DELETE from books where book_id = '{$row9['book1_id']}'");
				$conn->exec($ql0);
				$q11 = ( "DELETE from books where book_id = '{$row9['book2_id']}'");
				$conn->exec($ql1);
				$q12 = ( "DELETE FROM exchange where id = {$_POST['eid']}");
				$conn->exec($q12);
				header('Location:profile.php?id='.$row['user_id']);
			}
			}
		}
		else if($_POST['choice'] == 'Reject'){
			$q12 = "DELETE FROM exchange where id = {$_POST['eid']}";
		$conn->exec($ql2);
			header('Location:profile.php?id='.$row['user_id']);
		}
	}


	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>WebUni - Education Template</title>
		<meta charset="UTF-8">
		<meta name="description" content="WebUni Education Template">
		<meta name="keywords" content="webuni, education, creative, html">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon -->   
		<link href="img/favicon.png" rel="shortcut icon"/>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/owl.carousel.css"/>
		<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2">
					<div class="site-logo">
						<img src="img/i.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-10 col-md-10">					

					<a href="" class="site-btn header-btn"><img src="img/srch.png"></a>				
					<input class="site-btn header-btn" background="white" type="text"  placeholder="Book Name">
					<?php	include "nav.php"; ?>
					
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end --> 

	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/cover.jpg">
		<center>
			<br><br><br><br><br><br>

			<p class="eltext"><font size="7">Your own library at the click of a button</font></p>
			<center>
			</div>
			<!-- Page info end -->
			
			<?php
			$q6 = $conn->query("SELECT * FROM exchange where user2_id='{$uid}'");
			if ($q6->exec()){
				while ($row6 = =$q6->fetch(PDO::FETCH_ASSOC)){

$q7 = conn->query("SELECT * from books where book_id='{$row6['book1_id']}'");
									$row7 = $q7->fetch();
					$q8= conn->query("SELECT *  from users where user_id='{$row7['user_id']}'");
					$row8 = $q8->fetch();
					echo $row8['name'] . $row7['name'] ."<h5> wants to exchange with you</h5>";

					?>
					<form method="post" action="">
						<label>Accept
							<input type="checkbox" name="choice" value="Accept">
						</label>
						<label>Reject
							<input type="checkbox" name="choice" value="Reject">
						</label>
						<input type="hidden" name = "eid" value = "<?php echo $row6['id'];?>">
						<input type="submit" name="claim" value="Claim">
					</form>
				<?php } }  ?>
				<!-- banner section -->
				<section class="banner-section spad">
					<div class="container">
						<div class="section-title mb-0 pb-2">
							<div class="row">
								<?php 
	$conn2= $conn->query( "SELECT name,author,edition,description,image FROM books WHERE user_id != '{$uid}'");
								?>
								<div class="container-fluid pg">
									<div class="row">
										<?php
		if ($conn2->execute()) {
			while ($row2 = $conn2->fetch(PDO::FETCH_ASSOC)) {											?>

											<div class = "col-lg-4 usersbook">
												<div class="overlay-image">
													<img src="img/<?php echo $row2['image']; ?>" alt="" class="image"/>
													<div class="hover">
														<div class = "text">
															<h5>Book ID: </h5><?php echo $row2['book_id'];?><br><?php echo $row2['name'];?><br><?php echo $row2['author'];?><br><?php echo $row2['edition'];?><br><?php echo $row2['description'];?><br>
															<a href = "single-course.php?id=<?php echo $row2['book_id'];?>">Profile</a>
														</div>
													</div>
												</div>
											</div>




											<?php 
		}} ?>
									</div>
								</div>
								<div class="text-center pt-5" background="#d82a4e">
								</div>
							</div>
						</section>
						<!-- banner section end -->



						<!--====== Javascripts & Jquery ======-->
						<script src="js/jquery-3.2.1.min.js"></script>
						<script src="js/bootstrap.min.js"></script>
						<script src="js/mixitup.min.js"></script>
						<script src="js/circle-progress.min.js"></script>
						<script src="js/owl.carousel.min.js"></script>
						<script src="js/main.js"></script>
					</body>
					</html>
					<?php } ?>