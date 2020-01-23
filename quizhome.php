<?php
		include('config.php');
		include('includes/handlers/login-handler.php');
		if(!isset($_SESSION['userLoggedIn'])){
			/*die('please fill email and password!');*/
			header('Location:index.php');
		}
		
?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Agmania Quiz</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel = "icon" href = "assets/img/favicon.ico">

</head>
<style type="text/css">
	.page-footer{
		background-color: #203A43;
	}
	.bg {
  /* The image used */
  background-image: url("assets/img/bg4.jpg");

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
			  	<a class="navbar-brand" href="#" style="color: #c31432; font-size: 30px;">AGMANIA</a>
						  	<!-- Collapse button -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
			    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="basicExampleNav">
			  	<ul class="navbar-nav mr-auto">
			      	<li class="nav-item active">
			        	<a class="nav-link" href="#">Home
			          	<span class="sr-only">(current)</span>
			        	</a>
			      	</li>
			      	
		    	</ul>
		    	<form class="form-inline my-2 my-lg-0 ml-auto">
				    
				    <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit" name="log-out" href="includes/logout.php?logout">Logout <i class="fas fa-sign-out-alt"></i></a>
  				</form>
		       </div>
		       
			  
			</nav>
			<!--/.Navbar -->



			


			<div class="container">
				<div class="row" style="margin-bottom: 50px;">
					
					<div class=" card col-md-4 senior mb-4">
						<!-- Card image -->
						  <div class="view overlay">
						    <img class="card-img-top" src="assets/img/ind.jpg" alt="Card image cap">
						    <a>
						      <div class="mask rgba-white-slight"></div>
						    </a>
						  </div>

						  <!-- Card content -->
						  <div class="card-body brown darken-2 white-text rounded-bottom">

						    <!-- Social shares button -->
						    <a class="activator waves-effect mr-4"><i class="fas fa-user-edit white-text"></i></a>
						    <!-- Title -->
						    <h4 class="card-title">Senior</h4>
						    <hr class="hr-light">
						    <!-- Text -->
						    <p class="card-text white-text mb-4">Quiz for Seniors.</p>
						    <!-- Link -->
						    <a href="includes/senior-quiz.php" class="white-text d-flex justify-content-end"><h5>Start Quiz<i class="fas fa-angle-double-right"></i></h5></a>

						  </div>
					</div>
					<div class="col-md-2">
						
					</div>
					<div class="col-md-2">
						
					</div>
					<div class="card col-md-4 junior mb-4">

						<!-- Card image -->
						  <div class="view overlay">
						    <img class="card-img-top" src="assets/img/ind.jpg" alt="Card image cap">
						    <a>
						      <div class="mask rgba-white-slight"></div>
						    </a>
						  </div>

						  <!-- Card content -->
						  <div class="card-body teal darken-4 white-text rounded-bottom">

						    <!-- Social shares button -->
						    <a class="activator waves-effect mr-4"><i class="fas fa-user-edit white-text"></i></a>
						    <!-- Title -->
						    <h4 class="card-title">Junior</h4>
						    <hr class="hr-light">
						    <!-- Text -->
						    <p class="card-text white-text mb-4">Quiz for juniors.</p>
						    <!-- Link -->
						    <a href="includes/junior-quiz.php" class="white-text d-flex justify-content-end"><h5>Start Quiz <i class="fas fa-angle-double-right"></i></h5></a>

						  </div>
					</div>
					
					
				</div>
				
			</div>


			<!-- Footer -->
				<footer class="page-footer font-small fixed-bottom">

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
