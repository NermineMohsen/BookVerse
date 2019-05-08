<?php
session_start();
if(!empty($_SESSION['Login_User'])) {

	include "_inc/db.open.php";

	$conn2= $conn->query( "SELECT * FROM users WHERE name='".$_SESSION['Login_User']."'");
	$row = $conn2->fetch();
	$uid = $row['user_id'];
	?>
	<?php 
	if(isset($_POST['submit'])){
		$book1_id = $_POST['userbooks1'];
		$book2_id = $_POST['userbooks2'];
		$q5 = $conn->query("SELECT user_id FROM books where book_id = '$book2_id'");
		$row2 = $q5->fetch();
		$q3 ="INSERT INTO exchange (id, book1_id, book2_id, user2_id,status) VALUES (NULL, '$book1_id', '$book2_id',{$row2['user_id']}, 1)";
		$conn->exec($q3);		
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
					<?php include "nav.php";?>
					
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
			
			<!-- banner section -->
			<?php 
			$sql5 =$conn->query( "SELECT name,author,edition,description,image,book_id FROM books WHERE user_id != '{$uid}'");
			$result5 = $sql5->fetch() ;
			?>

			<form class = "form-horizontal" method="POST" action="allbooks.php">
				<select name="userbooks1">
					<option value="">Select one of your books</option>
					<?php 
					$conn2 = $conn->query("SELECT name,book_id FROM books WHERE user_id = '{$uid}'");
					if ($conn2->execute()) {
					while($rows4 =$conn2->fetch(PDO::FETCH_ASSOC)){
						?>
						<option value="<?php echo $rows4['book_id'];?>"><?php echo $rows4['name'];?></option> 
						<?php
					}
					?>
				</select>
				<select name="userbooks2">
					<option value="" > Select one of the books </option>
					<?php 
					$sql5 =$conn->query( "SELECT name,author,edition,description,image,book_id FROM books WHERE user_id != '{$uid}'");
					$result5 = $sql5->fetch() ;
					while($row5 =$conn2->fetch(PDO::FETCH_ASSOC)){
						?>
						<option value="<?php echo $row5['book_id'];?>"><?php echo $row5['name'];?></option> 
						<?php
					}
					?>
				</select>
				<input type="submit" name="submit" value="Claim Book" class="btn-primary">
			</form>

			<?php 
			$sql1 =$conn->query( "SELECT name,author,edition,description,image,book_id FROM books WHERE user_id != '{$uid}'");
			$result1 = $sql1->fetch() ;
			?>
			<section class="banner-section spad">
				<div class="container">
					<div class="section-title mb-0 pb-2">
						<div class="row">
							<?php
							while ($row2 = mysql_fetch_assoc($result1)) {
								?>
								<div class = "col-lg-4 usersbook">
									<div class="overlay-image">
										<img src="img/<?php echo $row2['image']; ?>" alt="" class="image"/>
										<div class="hover" >										
											<div class = "text">
												<h5>Book ID: </h5><?php echo $row2['book_id'];?><br>
												<?php echo $row2['name'];?><br>
												<?php echo $row2['author'];?><br>
												<?php echo $row2['edition'];?><br>
												<?php echo $row2['description'];?><br>
											</div>
										</div>
									</div>
								</div>
								<?php 
							}
							?>
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
	<?php?>
