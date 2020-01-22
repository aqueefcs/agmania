
<?php

  include('config.php');
  include('includes/handlers/login-handler.php');


      if(isset($_SESSION['userLoggedIn']))
          header('Location:quizhome.php');




?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>AGMANIA 2020</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One|Righteous&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	html,
body,
header,
.view {
  height: 100%;
}


@media (max-width: 740px) {
  html,
  body,
  header,
  .view {
    height: 1000px;
  }
}

@media (min-width: 800px) and (max-width: 850px) {
  html,
  body,
  header,
  .view {
    height: 650px;
  }
}
@media (min-width: 800px) and (max-width: 850px) {
  .navbar:not(.top-nav-collapse) {
     background: #1C2331!important;
  }
}
/* Navbar animation */
.navbar {
  background-color: rgba(0, 0, 0, 0.3); }

.top-nav-collapse {
  background-color: #1C2331; }

/* Adding color to the Navbar on mobile */
@media only screen and (max-width: 768px) {
  .navbar {
    background-color: #1C2331; } }

/* Footer color for sake of consistency with Navbar */
.page-footer {
  background-color: #1C2331; }

.head {
	color: #6DD5FA;
	font-family: 'Fredoka One', cursive;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}
.closebtn:hover {
  color: black;
}

@media (max-width: 600px){
      .mera-img{
        width: 200px;
        height: 200px;
        transform: translate(100px,0px);
      }
      .head{
        font-size: 40px;
      }
      
      .culture{
        font-size: 20px;
      }
      
}
body {
  background-color:#fceabb;
}

</style>
<body>






	<!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="">
        <strong class="font-weight-bold" style="color: #38ef7d; font-size: 30px;">AGM</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><span style="color:#38ef7d; ">H</span>ome
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span style="color:#38ef7d; ">A</span>bout</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#"><span style="color:#38ef7d; ">C</span>ONTACT</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/TitagarhAGM/" class="nav-link" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" target="_blank">
              <i class="fab fa-google-plus"></i>
            </a>
          </li>
          
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  															<!--https://mdbootstrap.com/img/Photos/Others/images/78.jpg-->
  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('assets/img/agm.png'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">




      		<div class="row">
      			<div class="col-md-4"></div>
      			<div class="col-md-4 mera-img"><img src="assets/img/agmlogo.png" class="img-fluid d-block mx-auto" alt="responsive-image"></div>
      			<div class="col-md-4"></div>
      		</div>
        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center">

            <h1 class="display-4 font-weight-bold head">TITAGARH AGM HIGH SCHOOL</h1>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
          				<h1 style="font-size:60px; font-weight: bolder; color: #6DD5FA; margin-left: 40px;" class="urdu">
			              ٹیٹاگڑھ انجمن غریب المسلمین ہائ اسکول
			            </h1> 
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->
        <div class="text-center">
        	<p class="mb-4 d-none d-md-block text-white culture" >
              <strong style="font-size: 50px; font-weight: bold; color: #00f260;font-family: 'Acme', sans-serif;"> CULTURAL PROGRAMME </strong>
          </p>

            <h2 class="font-weight-bold" style="color: #FDC830; font-family: 'Acme', sans-serif;"><i class="fas fa-star"></i> AGMANIA-2020</h2>
        	
        </div>

   </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <hr class="my-10">
  <h1 class=" text-center font-weight-bold" style="color: #c31432; font-family: 'Pacifico', cursive;"><span>G</span>allery</h1>
  <hr class="my-5">
  
<div class="row login" style="margin-bottom: 60px; ">

	<div class="col-md-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 img-fluid" src="assets/img/1a.jpg"
                alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="assets/img/2a.jpg"
                alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="assets/img/3a.jpg"
                alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="assets/img/4a.jpg"
                alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="assets/img/5a.jpg"
                alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="assets/img/6a.jpg"
                alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="assets/img/7a.jpg"
                alt="Third slide">
            </div>
            <div class="carousel-item"> 
              <img class="d-block w-100 img-fluid" src="assets/img/8a.jpg"
                alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="assets/img/9a.jpg"
                alt="Third slide">
            </div>
            <!--div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="assets/img/10a.jpg"
                alt="Third slide">
            </div-->
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="assets/img/11a.jpg"
                alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="assets/img/12a.jpg"
                alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          </div>
	
	
</div>
<hr class="my-5">
<h1 class=" text-center font-weight-bold" style="color: #c31432; font-family: 'Pacifico', cursive;"><span>Admin</span> Login</h1>
  <hr class="my-5">
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    
    <div class="card" style="box-shadow: 10px #000;">

            
              <div class="card-body">

                
                <form method="post">
                        


                  
                  <h3 class="dark-grey-text text-center" id="login">
                    <strong><span style="color:#38ef7d; ">Log</span>-in</strong>
                  
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class="fas fa-user prefix text-dark"></i>
                    <input type="text" id="form3" class="form-control" name="name" required>
                    <label for="form3">Name</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-envelope prefix text-dark"></i>
                    <input type="text" id="form2" class="form-control" name="email" required>
                    <label for="form2">Email</label>
                  </div>

                  <div class="md-form">
                    <i class="fas fa-lock prefix text-dark"></i>
                    <input type="password" id="form8" class="form-control" name="password" required>
                    <label for="form8">Password</label>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-lg btn-success" type="submit" name="submit">LOGIN <i class="fas fa-sign-in-alt"></i></button>
                    <hr>
                    
                  </div>

                </form>
               

              </div>

            </div>
           
  </div>
  
  
  <div class="col-md-3"></div>
  
</div>
<hr class="my-5">
<h1 class=" text-center" style="color:#c31432; font-family: 'Pacifico', cursive;">Contact</h1>
<hr class="my-5">
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
      <!-- Card -->
      <div class="card">

        <!-- Card image -->
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

        <!-- Card content -->
        <div class="card-body">

          <!-- Title -->
          <h4 class="card-title text-dark font-weight-bold"><a>JAVED IQBAL</a></h4>
          <!-- Text -->
          <p class="card-text text-dark">HEAD-MASTER,TITAGARH AGM HIGH SCHOOL</p>
          <p class="card-text text-dark"><i class="fas fa-envelope"></i> Email: blblb@gmail.com</p>
          <p class="card-text text-dark"><i class="fas fa-mobile"></i> Contact: 1234567890</p> 
          

        </div>

      </div>
      <!-- Card -->
  </div>
      <div class="col-md-4"></div>
      </div>
      <hr class="my-10">




  
<!-- Footer -->
				<footer class="page-footer font-small">

				  <!-- Copyright -->
				  <div class="footer-copyright text-center py-3">Powered by Aqueef Alim Ansari © 2020 Copyright:
				    <a href="#"><span style="color:#38ef7d; ">AGMANIA</span></a>
				  </div>
				  <!-- Copyright -->

				</footer>
				<!-- Footer -->














            <script type="text/javascript">        
                if (window.location.protocol != "https:") {
                   window.location.protocol = "https";
                }
          </script>


		 


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
