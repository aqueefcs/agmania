<?php
	/*include('handlers/question-handler.php');*/
	include('../config.php');
	include('handlers/login-handler.php');
		if(!isset($_SESSION['userLoggedIn'])){
			/*die('please fill email and password!');*/
			header('Location:../index.php');
		}
	$id = $_GET['id'];
	$quesQuery = "SELECT * FROM quizjunior WHERE id = '$id'";
	$success = mysqli_query($con,$quesQuery);
	$row = mysqli_fetch_array($success);

?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>QUIZ</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
	<link href='../assets/css/rotating-card.css' rel='stylesheet' />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel = "icon" href = "../assets/img/favicon.ico">

    
</head>
<style type="text/css">
	.navbar {
	font-size: 25px;
	font-weight: bold;
	}
	.row{
		margin-top: 100px;
	}
	
	#timer{
		font-size: 40px;
		
		
	}
	ul {
		font-size: 20px;
	}
	.page-footer{
		background-color: #203A43;
	}
	.back{
		<?php
			if($id == 1){
			echo "	
					background: url('../assets/img/seniorimgans/islamic.jpg');
					background-size: cover;
					background-repeat: no-repeat;
				";
			}
			if($id == 2){
			echo "	
					background: url('../assets/img/seniorimgans/islamic.jpg');
					background-size: cover;
					background-repeat: no-repeat;
				";
			}
			if($id == 3){
			echo "	
					background: url('../assets/img/seniorimgans/islamic.jpg');
					background-size: cover;
					background-repeat: no-repeat;
				";
			}
			if($id == 4){
			echo "	
					background: url('../assets/img/seniorimgans/islamic.jpg');
					background-size: cover;
					background-repeat: no-repeat;
				";
			}
			if($id == 5){
			echo "	
					background: url('../assets/img/seniorimgans/islamic.jpg');
					background-size: cover;
					background-repeat: no-repeat;
				";
			}
			if($id == 6){
			echo "	
					background: url('../assets/img/seniorimgans/islamic.jpg');
					background-size: cover;
					background-repeat: no-repeat;
				";
			}
			if($id == 7){
			echo "	
					background: url('../assets/img/juniorimg/photo.jpg');
					background-size: cover;
					background-repeat: no-repeat;
					
				";
			}
			if($id == 8){
			echo "	
					background:url('../assets/img/juniorimg/k.png');
					background-size: cover;
					background-repeat: no-repeat;
				";
			}
			if($id == 9){
				echo "	
						background:url('../assets/img/juniorimg/iron.png');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 10){
				echo "	
						background:url('../assets/img/juniorimg/mito.jpg');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 11){
				echo "	
						background:url('../assets/img/juniorimg/tele.jfif');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 12){
				echo "	
						background:url('../assets/img/juniorimg/co2.png');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 13){
				echo "	
						background:url('../assets/img/juniorimg/indica.jpg');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 14){
				echo "	
						background:url('../assets/img/juniorimg/kautalya.jfif');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 15){
				echo "	
						background:url('../assets/img/juniorimg/harsh.jpg');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 16){
				echo "	
						background:url('../assets/img/juniorimg/mercury.jpg');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 17){
				echo "	
						background:url('../assets/img/juniorimg/assam.jpg');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 18){
					echo "	
							background:url('../assets/img/juniorimg/victoria.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 19){
					echo "	
							background:url('../assets/img/juniorimg/tendulkar.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 20){
					echo "	
							background:url('../assets/img/juniorimg/president.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 21){
					echo "	
							background:url('../assets/img/juniorimg/virat.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 22){
					echo "	
							background:url('../assets/img/juniorimg/titagarh.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 23){
					echo "	
							background:url('../assets/img/juniorimg/sindhu.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 24){
					echo "	
							background:url('../assets/img/juniorimg/hockey.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}

		?>
	}
	
</style>
<body>

				
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
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">

								<h1 class="text-dark text-center"><?php echo $row[1];?> </h1>
								<hr class="my-8">
					             <div class="card-container manual-flip">
					                <div class="card">
					                    <div class="front">
					                        <!--div class="cover">
					                            <img src="../assets/img/delhi.jfif">
					                        </div-->
					                        
					                        <div class="content">
					                            <div class="main">
					                                <h1 class="name">Question <?php if($id<=6){
					                                								echo $id;
					                                								}
					                                								else{
					                                									$x = $id%6;
					                                									$y = $id%($id-$x);
					                                									if($y == 0){
					                                										$y = 6;
					                                									}
					                                									echo $y;
					                                								}
					                                							?>
					                                	
					                                </h1>
					                                <hr class="my-5">
					                                <!--h3 class="text-center"><i class="fas fa-angle-double-right"></i> WHAT IS THE CAPITAL OF INDIA?</h3-->
					                                <?php
					                                	
										    			echo "

										    		<h1 class='text-center'>".$row[2]."</h1>";

										    			
										    			
										    		?>
										    		
												    <!--h3 class="text-center"><i class="fas fa-angle-double-right"></i> WHAT IS THE CAPITAL OF INDIA?

					                                </h3-->
					                                <hr class="my-8">
					                                <div id="timer" class="d-flex justify-content-center"></div>
					                            </div>
					                            <div class="footer">
					                                <button class="btn btn-success" onclick="rotateCard(this)" id="mybtn">
					                                    <i class=""></i> ANSWER
					                                </button>
					                            </div>
					                        </div>
					                    </div> <!-- end front panel -->
					                    <div class="back">
					                        <div class="cover">
					                            

					                        </div>
					                        <hr class="my-8">
					                        <div class="content">
					                            <div class="main">
					                            	
					                                <!--h4 class="text-center text-dark" style="margin-top: 20px;"><i class="fas fa-check text-success"></i> NEW DELHI</h4-->
					                                <?php
					                                	
										    			echo "

										    			<h1 class='text-center text-dark font-weight-bold alert-success' style='margin-top: 20px;''>".$row[3]."</h1>";										    			
										    			
										    		?>

					                                

					                            </div>
					                        </div>
					                        <div class="footer">
					                            <!--button class="btn btn-success" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
					                                <i class="fa fa-reply"></i> Back
					                            </button-->
					                            <a href="junior-quiz.php" type="button" class="btn btn-success">BACK</a>
					                            
					                        </div>
					                    </div> <!-- end back panel -->
					                </div> <!-- end card -->
					            </div> <!-- end card-container -->
					       
<!--         <div class="col-sm-1"></div> -->
				</div>
				<div class="col-md-2"></div>
				
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















<script type="text/javascript">
   /* $().ready(function(){
        $('[rel="tooltip"]').tooltip();

        $('a.scroll-down').click(function(e){
            e.preventDefault();
            scroll_target = $(this).data('href');
             $('html, body').animate({
                 scrollTop: $(scroll_target).offset().top - 60
             }, 1000);
        });

    });*/
    var audioentry = new Audio('../assets/music/avenger.mp3');
    audioentry.play();

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
	    clearTimeout(timerId);
	    var audioans = new Audio('../assets/music/short_sms.mp3');
            audioans.play();
        }
    }


    		var timeLeft = 20;
			var elem = document.getElementById('timer');
			var timerId = setInterval(countdown, 1000);
			var audio = new Audio('../assets/music/beep.mp3');
			function countdown() {
			    if (timeLeft == -1) {
			    	audio.play();
			        clearTimeout(timerId);
			        
			        
			        doSomething();
			    } else {
			        elem.innerHTML = timeLeft + ' s';
			        timeLeft--;
			    }
			}

			function doSomething() {
			    elem.innerHTML = '<h3 class="text-danger"><i class="fas fa-times"></i> Time out</h3>';
			}


</script>

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
