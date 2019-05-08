<!doctype html>
<html>
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

	<style type="text/css">
		form {
		width:40%;
		padding:5%;
	}	
	::placeholder{
		font-style: italic;
		color: black;
	}
	input[type='text'],input[type='password']{
		border: none;
		border-bottom: 1px #bab7b7 solid;
		width: 300px;
		outline: none;
	}
	input[type='text']:hover,input[type='password']:hover{
		border-color: #d82a4e;
	}
	input[type="submit"]{
		background-color: #d82a4e;
		color: white;
		width: 100px;
		border: none;
	}
	input[type="submit"]:hover{
		background-color: #B3203F;
	}
	label[for="user"],[for="password"]{
		font-style: italic;
		font-size: 15px;
		color: black;
				font-family: "Times New Roman" 16px/20px, Times, serif;

	}
	body {
		background: #284352;
		z-index: 0;
		margin: 0;
		padding: 0;
		font: normal 16px/20px Lekton, sans-serif;
	}
	
	h1 {
		text-align: center;
		font-size: 50px;
	}
	
	h2 {
		font-family: "Open Sans", sans-serif;
		font-size: 35px;
		text-align: left;
		line-height: 60px;
	}
	
	h1,
	h2 {
		font-family: "Times New Roman" 16px/20px, Times, serif;
		text-shadow: 10px 10px 20px rgba(0, 0, 0, 0.30);
		color: #000000;
		font-weight: 200;
	}
	
	button {
		display: inline-block;
		padding: 5px;
		margin: 1px;
		color: #fff;
		border: 1px solid #fff;
		border-radius: 4px;
		background: rgba(0, 0, 0, 0.72);
		cursor: pointer;
	}
	
	button:hover {
		background: rgba(255, 255, 255, .9);
		color: #000;
	}
	
	#wrapper {
		position: absolute;
		padding: 100px 70px;
		width: 500px;
		min-height: 100%;
		margin-left: 0;
		top: 0;
		color: white;
		background: "rgba(255, 255, 255, .9)"
	 
		font-family: "Times New Roman" 16px/20px, Times, serif;

		box-sizing: border-box;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
	}
	
	.text {
			font-family: "Times New Roman" 16px/20px, Times, serif;

		position: relative;
		top: 40px;
		padding-right: 50px;
	}
	
	.text h1 {
		font-weight: normal;
		line-height: 130%;
				font-family: "Times New Roman" 16px/20px, Times, serif;

	}
	
	.text h2 {
			font-family: "Times New Roman" 16px/20px, Times, serif;

		font-weight: normal;
		line-height: 130%;
	}
	
	.controls div {
		display: inline-block;
			  font-family: "Times New Roman", Times, serif;

		padding: 5px;
		margin: 1px;
		color: #fff;
		border: 1px solid #fff;
		border-radius: 4px;
	}
	
	.controls div:hover:not(.counter) {
		background: rgba(255, 255, 255, .9);
		color: #000;
	}
	
	.controls div:not(.counter) {
		background: rgb(190, 41, 16);
		cursor: pointer;
	}
	
	.controls.fullScreen_controls div:hover:not(.counter) {
		background: rgba(255, 255, 255, .9);
		color: #000;
	}
	
	.controls.fullScreen_controls div:not(.counter) {
		background: rgba(0, 0, 0, 0.82);
		cursor: pointer;
	}
	
	.controls div.sel {
		background: rgba(255, 255, 255, .9);
			  font-family: "Times New Roman", Times, serif;

	}
	
	
	.divo{
	  color: white;

  background-color: white; /* Fallback color */
  background-color:  rgba(255, 255, 255, 0.85); 
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 29%;
  padding: 20px;
  text-align: center;
}
	</style>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
	<script type="text/javascript" src="../dist/jquery.mb.bgndGallery.js?build=2459"></script>

	<script type="text/javascript">
	var myGallery;

	
	//Images used for the addImages example
	var newImages = [ "elements/b.jpg", "elements/i.jpg", "elements/i.gif" ];

	$( function() {

		/**
		 *
		 * Show the mb.ideas.repository logotype
		 */
		if ( self.location.href == top.location.href ) {
			var logo = $( "<a href='http://pupunzi.com/#mb.components/components.html' style='position:absolute;top:40px;left:50px;z-index:1000'></a>" );
			$( "body" ).prepend( logo );
			$( "#logo" ).fadeIn();
		}

		/**
		 *
		 * Manage the panel
		 */
		setTimeout( function() {
			$( "#wrapper" ).CSSAnimate( {
				marginLeft: -450,
								background: "rgba(255, 255, 255, .9)"
			}, 200 );
			$( "body" ).css( {
				overflow: "hidden"
			} )
		}, 3000 );

		$( "#wrapper" ).on( "mouseenter", function() {
			$( this ).CSSAnimate( {
				marginLeft: 0,
				background: "rgba(232, 232, 232, .9)"
			}, 200 );
			$( "body" ).css( {
				overflow: "auto"
			} )
		} ).on( "mouseleave", function() {
			$( this ).CSSAnimate( {
				marginLeft: -450,
								background: "rgba(255, 255, 255, .9)"

				
			}, 200 );
			$( "body" ).css( {
				overflow: "hidden"
			} )
		} );

		//Redefining the "zoom" effect
		$.mbBgndGallery.effects.zoom = {
			enter: {
				scale: ( 1 + Math.random() * 2 ),
				opacity: 0,
				z: 100
			},
			exit: {
				scale: ( 1 + Math.random() * 2 ),
				opacity: 0,
				z: 100
			},
			enterTiming: "ease-out",
			exitTiming: "ease-in"
		};

		/**
		 * Initialize the gallery
		 * @type {mbBgndGallery}
		 */
		myGallery = new mbBgndGallery( {
			containment: "body",
			timer: 100,
			effTimer: 6500,
			controls: "#controls",
			grayScale: false,
			shuffle: true,
			preserveWidth: false,
			//                filter: {grayscale: 100},
			effect: "zoom",
		
			images: [
				"../elements/b.jpg",
				"../elements/l.jpg",
				"../elements/k.jpg",
				"../elements/n.jpg",
				"../elements/o.jpg"			],

			
		} );

	} );
	</script>

</head>

<body>
<?php
	include "_inc/db.open.php";

	$name = (isset($_POST['name'])) ? $_POST['name']:'';
	$password = (isset($_POST['password'])) ? $_POST['password']:'';
	$email = (isset($_POST['email'])) ? $_POST['email']:'';
	$phone = (isset($_POST['phone'])) ? $_POST['phone']:'';
	$feed = '';

	if (isset($_POST['submit_form'])){
		$q = "INSERT INTO users (user_id, name, password, email, phone) VALUES (NULL, '$name', '$password', '$email', '$phone')";
		$conn->exec($q);
		if ($conn->exec($q)==TRUE){
			$feed = "<h1>User created succesfully.</h1>";
		}
		else{
			$feed = "<h1>Error in signup.</h1>";
		}
	}
	?>
	
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

					<nav class="main-menu">
						<ul>					
							<li><a href="index.html">Home</a></li>
							<li><a href="courses.html">All Books</a></li>
							<li><a href="contact.html">Read Online</a></li>	
							<li><a href="#">About us</a></li>


							
						</ul>
							
					</nav>
					
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->
	<div id="wrapper">

		<div class="text">
			<h1>BookVerse</h1>

			<p style="color:black;">
				if you're passionate about books, you know how emotionally difficult it is to throw a book away, even if you will never read it again. You want to find a good home for your books, have them find someone who appreciates them. Also, you may be interested in trying a lot of books out, and keep the ones that are great. It's a great crime to have a book disappear, out of print, for none to read. BookVerse keeps books in circulation, and finds new readers for them. If you're not interested in getting free books, you can donate to charities, the points you gain by giving your books away.
			
			</p>

		</div>

	</div>

	<div class="divo">
	
	<form action="signup.php" method="post" id="signUp">
			<tr>				<h1 style="margin-left=90px;">SignUp</h1>
		<table>
			<tr>
				<td><label for = "user">Name</label></td>
			</tr>
			<tr>
				<td><input type="text" name="name" placeholder="Enter Your Name" id="name"></td>
			</tr>
			<tr>
				<td><label for = "password">Password</label></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Enter Your Password" id="pass"></td>
			</tr>
			<tr>
				<td><label for = "email">E-mail</label></td>
			</tr>
			<tr>
				<td><input type="email" name="email" placeholder="Enter Your Email" id="email"></td>
			</tr>
			<tr>
				<td><label for = "phone">Phone Number</label></td>
			</tr>
			<tr>
				<td><input type="text" name="phone" placeholder="Enter Your Phone" id="phone"></td>
			</tr>
			<td>
				<input type="submit" value="Sign Up" name="submit_form">
			</td>
		</form>
<table>
	

	</form>
	</div>

</body>

</html>
	<script>
	$('#signUp').submit(function(){
		var input = $('input').val();
		var name = $('#name').val();
		var pass = $('#pass').val();
		var phone = $('#phone').val();
		
		if(input == null || input == ''){
			alert('Please Don"t Leave Empty Input');
			return false;
		}
		
		if(name.length <= 3 ){
			alert("Please Enter Name more than 3 Letters");
			return false;
		}
		if(pass.length <= 6 ){
			alert("Please Enter Password more than 6 Characters");
			return false;
		}
		if(phone.length < 11){
			alert('Please Enter Valid Number of 11 Number');
			return false;
		}
	});
	</script>