<?php
session_start();
if(!empty($_SESSION['Login_User'])) {



	include "_inc/db.open.php";


	$conn2= $conn->query( "SELECT * FROM users WHERE name='".$_SESSION['Login_User']."'");
	$row = $conn2->fetch();
	$uid = $row['user_id'];



	$conn2= $conn->query("SELECT * FROM books WHERE book_id='".$_GET['id']."'");
	$row = $conn2->fetch();


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
	<!-- single course section -->
	<section style="margin-left:-20;" class="single-course spad pb-0">
		<div  class="container">
			<div class="course-meta-area">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
									<div  style="float:left; "><br><img width="200" height="400" src="img/<?php echo $row['image']; ?>" alt="" class="course-preview "></div>
		<div style="float:left; margin-left:60px; margin-top:25px;" >
		<h3><?php echo $row['name']; ?></h3>
</div>

<div style='float:right'>
			<a href="updatebook.php?id=<?php echo $row['book_id']; ?>" style="background-color:#d82a4e; color: white;" class="site-btn price-btn bu1">Update</a>

			<a href="updatebook.php?request=delete&id=<?php echo $row['book_id']; ?>" style="background-color:#d82a4e; color: white;" class="site-btn price-btn bu1">Delete</a>
</div>
<br><br><br><br><br>
						<div   class="course-metas">

							<div class="course-meta">
								<div class="course-author">
									<h6>Author</h6>
									<p><?php echo $row['author']; ?> <span><?php echo $row['edition']; ?></span></p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Book ID : </h6>
									<p><?php echo $row['book_id']; ?></p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Description</h6>
									<p><?php echo $row['description']; ?></p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- single course section end -->


	
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