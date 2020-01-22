<?php

	include('../config.php');
	include('handlers/login-handler.php');
		if(!isset($_SESSION['userLoggedIn'])){
			/*die('please fill email and password!');*/
			header('Location:../index.php');
		}
	$quesQuery = "SELECT * FROM quizjunior";
	$success = mysqli_query($con,$quesQuery);
	$row = mysqli_fetch_array($success);
	$p_count = mysqli_num_rows($success);



?>








<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Junior Quiz || AGMANIA</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One|Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<style type="text/css">
	.info{
		transform: translate(0px,70px);
	}
	.num {
		border-radius: 20px;
		background: #c31432;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #240b36, #c31432);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #240b36, #c31432); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		color: #fff;
		font-weight: bold;

	}
	.num:hover{
		background-color: #c471ed;
	}
	#answer {
		display: none;
	}
	.btn{
		padding-left: 20px;
	}
	ul {
		font-size: 20px;
	}
	.page-footer{
		background-color: #203A43;
	}
	.bg {
  /* The image used */
  background-image: url("../assets/img/bg2.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="bg">

				<!--Navbar -->
			<nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
			  	<a class="navbar-brand" href="../index.php" style="color: #c31432; font-size: 30px;">AGMANIA</a>
						  	<!-- Collapse button -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
			    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="basicExampleNav">
			  	<ul class="navbar-nav mr-auto">
			      	<li class="nav-item active">
			        	<a class="nav-link" href="../index.php">Home
			          	<span class="sr-only">(current)</span>
			        	</a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="#">Admin</a>
			      	</li>
		    	</ul>
		       </div>
			  
			</nav>
			<!--/.Navbar -->


			<div class="container">
				<div>
					<section class="px-md-5 mx-md-5">
						<h3 class="text-dark text-center font-weight-bold" style="margin-top: 40px; font-family: 'Pacifico', cursive;"><i class="fas fa-quote-left" style="color: #c31432"></i> JUNIOR QUIZ <i class="fas fa-quote-right" style="color: #c31432"></i></h3>

						<h3 style="margin-top: 50px;" class="info font-weight-bold">ISLAMIC ROUND</h3>

						<div class="row">

							
							
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=1' type='button' class='btn btn-lg btn-block text-white num mb-3'>1</a> ";
										?>
									</div>
									
									<div class="col-md-2 col-sm-2">
										<?php echo"<a href='question1.php?id=2' type='button' class='btn btn-lg btn-block text-white num mb-3'>2</a> ";
										?>
										
									</div>
									<div class="col-md-2">
										<?php echo"<a href='question1.php?id=3' type='button' class='btn btn-lg btn-block text-white num mb-3'>3</a> ";
										?>
									</div>
									<div class=" col-md-2">
										<?php echo"<a href='question1.php?id=4' type='button' class='btn btn-lg btn-block text-white num mb-3'>4</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=5' type='button' class='btn btn-lg btn-block text-white num mb-3'>5</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=6' type='button' class='btn btn-lg btn-block text-white num mb-3'>6</a> ";
										?>
									</div>
							
							
						</div>
						<hr class="my-10">

						<h3 class="info font-weight-bold">GENERAL SCIENCE ROUND</h3>
						<div class="row">
							
							<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=7' type='button' class='btn btn-lg btn-block text-white num mb-3'>1</a> ";
										?>
									</div>
									
									<div class="col-md-2">
										<?php echo"<a href='question1.php?id=8' type='button' class='btn btn-lg btn-block text-white num mb-3'>2</a> ";
										?>
										
									</div>
									<div class="col-md-2">
										<?php echo"<a href='question1.php?id=9' type='button' class='btn btn-lg btn-block text-white num mb-3'>3</a> ";
										?>
									</div>
									<div class=" col-md-2">
										<?php echo"<a href='question1.php?id=10' type='button' class='btn btn-lg btn-block text-white num mb-3'>4</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=11' type='button' class='btn btn-lg btn-block text-white num mb-3'>5</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=12' type='button' class='btn btn-lg btn-block text-white num mb-3'>6</a> ";
										?>
									</div>
							
						</div>
						<hr class="my-10">

						<h3 class="info font-weight-bold">SOCIAL SCIENCE ROUND</h3>
						<div class="row">
							
							<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=13' type='button' class='btn btn-lg btn-block text-white num mb-3'>1</a> ";
										?>
									</div>
									
									<div class="col-md-2">
										<?php echo"<a href='question1.php?id=14' type='button' class='btn btn-lg btn-block text-white num mb-3'>2</a> ";
										?>
										
									</div>
									<div class="col-md-2">
										<?php echo"<a href='question1.php?id=15' type='button' class='btn btn-lg btn-block text-white num mb-3'>3</a> ";
										?>
									</div>
									<div class=" col-md-2">
										<?php echo"<a href='question1.php?id=16' type='button' class='btn btn-lg btn-block text-white num mb-3'>4</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=17' type='button' class='btn btn-lg btn-block text-white num mb-3'>5</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=18' type='button' class='btn btn-lg btn-block text-white num mb-3'>6</a> ";
										?>
									</div>
							
						</div>


					<hr class="my-10">



							<h3 class="info font-weight-bold">CURRENT AFFAIRS ROUND</h3>
								<div class="row">
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=19' type='button' class='btn btn-lg btn-block text-white num mb-3'>1</a> ";
										?>
									</div>
									
									<div class="col-md-2">
										<?php echo"<a href='question1.php?id=20' type='button' class='btn btn-lg btn-block text-white num mb-3'>2</a> ";
										?>
										
									</div>
									<div class="col-md-2">
										<?php echo"<a href='question1.php?id=21' type='button' class='btn btn-lg btn-block text-white num mb-3'>3</a> ";
										?>
									</div>
									<div class=" col-md-2">
										<?php echo"<a href='question1.php?id=22' type='button' class='btn btn-lg btn-block text-white num mb-3'>4</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=23' type='button' class='btn btn-lg btn-block text-white num mb-3'>5</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=24' type='button' class='btn btn-lg btn-block text-white num mb-3'>6</a> ";
										?>
									</div>
							</div>



							<hr class="my-10">



							<h3 class="info font-weight-bold">IDENTIFY ROUND</h3>
								<div class="row">
									<div class="col-md-2">
										
										<?php echo"<a href='mediajunior.php?id=25' type='button' class='btn btn-lg btn-block text-white num mb-3'>1</a> ";
										?>
										
									</div>
									
									<div class="col-md-2">
										<?php echo"<a href='mediajunior.php?id=26' type='button' class='btn btn-lg btn-block text-white num mb-3'>2</a> ";
										?>
										
									</div>
									<div class="col-md-2">
										<?php echo"<a href='mediajunior.php?id=27' type='button' class='btn btn-lg btn-block text-white num mb-3'>3</a> ";
										?>
									</div>
									<div class=" col-md-2">
										<?php echo"<a href='mediajunior.php?id=28' type='button' class='btn btn-lg btn-block text-white num mb-3'>4</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='mediajunior.php?id=29' type='button' class='btn btn-lg btn-block text-white num mb-3'>5</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='mediajunior.php?id=30' type='button' class='btn btn-lg btn-block text-white num mb-3'>6</a> ";
										?>
									</div>
								</div>
								<hr class="my-10">

								<h3 class="info font-weight-bold">VISUAL ROUND</h3>
								<div class="row">
									<div class="col-md-2">
										
										<?php echo"<a href='mediajunior.php?id=31' type='button' class='btn btn-lg btn-block text-white num mb-3'>1</a> ";
										?>
									</div>
									
									<div class="col-md-2">
										<?php echo"<a href='mediajunior.php?id=32' type='button' class='btn btn-lg btn-block text-white num mb-3'>2</a> ";
										?>
										
									</div>
									<div class="col-md-2">
										<?php echo"<a href='mediajunior.php?id=33' type='button' class='btn btn-lg btn-block text-white num mb-3'>3</a> ";
										?>
									</div>
									<div class=" col-md-2">
										<?php echo"<a href='mediajunior.php?id=34' type='button' class='btn btn-lg btn-block text-white num mb-3'>4</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='mediajunior.php?id=35' type='button' class='btn btn-lg btn-block text-white num mb-3'>5</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='mediajunior.php?id=36' type='button' class='btn btn-lg btn-block text-white num mb-3'>6</a> ";
										?>
									</div>
								</div>
								<hr class="my-10">

								<h3 class="info font-weight-bold">TIE-BREAKER ROUND</h3>
								<div class="row">
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=37' type='button' class='btn btn-lg btn-block text-white num mb-3'>1</a> ";
										?>
									</div>
									
									<div class="col-md-2">
										<?php echo"<a href='question1.php?id=38' type='button' class='btn btn-lg btn-block text-white num mb-3'>2</a> ";
										?>
										
									</div>
									<div class="col-md-2">
										<?php echo"<a href='question1.php?id=39' type='button' class='btn btn-lg btn-block text-white num mb-3'>3</a> ";
										?>
									</div>
									<div class=" col-md-2">
										<?php echo"<a href='question1.php?id=40' type='button' class='btn btn-lg btn-block text-white num mb-3'>4</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=41' type='button' class='btn btn-lg btn-block text-white num mb-3'>5</a> ";
										?>
									</div>
									<div class="col-md-2">
										
										<?php echo"<a href='question1.php?id=42' type='button' class='btn btn-lg btn-block text-white num mb-3'>6</a> ";
										?>
									</div>
								</div>
								<hr class="my-10">



						
					</section>
				</div>
				
			</div>

































			<!-- Footer -->
				<footer class="page-footer font-small">

				  <!-- Copyright -->
				  <div class="footer-copyright text-center py-3">Powered by Aqueef Alim Ansari © 2020 Copyright:
				    <a href="#"> AGMANIA</a>
				  </div>
				  <!-- Copyright -->

				</footer>
				<!-- Footer -->









			<!-- JQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</body>
</html>