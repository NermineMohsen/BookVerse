<?php
session_start();
if(!empty($_SESSION['Login_User'])) {

include "_inc/db.open.php";

	$conn2= $conn->query( "SELECT * FROM users WHERE name='".$_SESSION['Login_User']."'");
	$row = $conn2->fetch();
	$uid = $row['user_id'];
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
			<?php 
			$name = (isset($_POST['name'])) ? $_POST['name']:'';
			$author = (isset($_POST['author'])) ? $_POST['author']:'';
			$edition = (isset($_POST['edition'])) ? $_POST['edition']:'';
			$description = (isset($_POST['description'])) ? $_POST['description']:'';
			$feed = '';

			if (isset($_POST['submit_form'])){

			$targetDir = "img/";
			$fileName = basename($_FILES["file"]["name"]);
			$targetFilePath = $targetDir . $fileName;
			$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);  
			move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);

			$q = "INSERT INTO books (book_id, name, author, edition, description, user_id, image) VALUES (NULL, '$name', '$author', '$edition', '$description' , '$uid', '$fileName')";
			$result3 =$conn->exec($q);		
			if($name !=''&& $author !=''&& $edition !=''&& $description !='')
			{
				header("Location:profile.php");
			}
			else{
			?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
		}
	}

	?>

	<!-- banner section -->
	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<form method = "POST" enctype="multipart/form-data" >
					<h2 style="color:black">Add a new book</h2><hr>
					<table>
						<tr>
							<td><label for = "name">Book Name</label></td>
						</tr>
						<tr>
							<td><input type="text" name="name" placeholder="Enter the name of the book..."></td>
						</tr>
						<tr>
							<td><label for = "author">Author</label></td>
						</tr>
						<tr>
							<td><input type="text" name="author" placeholder="Enter the name of the author..."></td>
						</tr>
						<tr>
							<td><label for = "edition">Edition</label></td>
						</tr>
						<tr>
							<td><input type="text" name="edition" placeholder="Enter the number of edition..."></td>
						</tr>
						<tr>
							<td><label for = "description">Description</label></td>
						</tr>
						<tr>
							<td><textarea rows="6" cols="45" name="description" placeholder="Enter some information about the book..."></textarea></td>
						</tr>
						<tr>
							<td><input type="file" name="file"></td>
						</tr>
						<td><input type="submit" value="Add Book" name="submit_form">	</td>
					</table>
				</form>


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

<?php }?>