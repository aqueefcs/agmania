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
	#timer1{
		font-size: 40px;
	}
	ul {
		font-size: 20px;
	}
	.page-footer{
		background-color: #203A43;
	}
	#ques{
		<?php
			if($id == 25){
				echo "display: none;";
			}

		?>
	}
	#media25{
		<?php
			if($id == 25){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 26){
				echo "display: none;";
			}

		?>
	}
	#media26{
		<?php
			if($id == 26){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 27){
				echo "display: none;";
			}

		?>
	}
	#media27{
		<?php
			if($id == 27){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 28){
				echo "display: none;";
			}

		?>
	}
	#media28{
		<?php
			if($id == 28){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 29){
				echo "display: none;";
			}

		?>
	}
	#media29{
		<?php
			if($id == 29){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 30){
				echo "display: none;";
			}

		?>
	}
	#media30{
		<?php
			if($id == 30){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 31){
				echo "display: none;";
			}

		?>
	}
	#media31{
		<?php
			if($id == 31){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 32){
				echo "display: none;";
			}

		?>
	}
	#media32{
		<?php
			if($id == 32){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 33){
				echo "display: none;";
			}

		?>
	}
	#media33{
		<?php
			if($id == 33){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 34){
				echo "display: none;";
			}

		?>
	}
	#media34{
		<?php
			if($id == 34){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 35){
				echo "display: none;";
			}

		?>
	}
	#media35{
		<?php
			if($id == 35){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	#ques{
		<?php
			if($id == 36){
				echo "display: none;";
			}

		?>
	}
	#media36{
		<?php
			if($id == 36){
				echo "display: block;";
			}
			else{
				echo "display: none;";
			}
		?>
	}
	.back{
	    <?php
				if($id == 25){
				echo "	
						background:url('../assets/img/juniorimg/rf.jpg');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 26){
				echo "	
						background:url('../assets/img/juniorimg/tendulkar.jpg');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 27){
				echo "	
						background:url('../assets/img/juniorimg/nep.jpg');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 28){
				echo "	
						background:url('../assets/img/juniorimg/sbindia.jpg');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 29){
				echo "	
						background:url('../assets/img/juniorimg/rk.jpg');
						background-size: cover;
						background-repeat: no-repeat;
					";
				}
				if($id == 30){
					echo "	
							background:url('../assets/img/juniorimg/victoria.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 31){
					echo "	
							background:url('../assets/img/juniorimg/dp.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 32){
					echo "	
							background:url('../assets/img/juniorimg/farhan.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 33){
					echo "	
							background:url('../assets/img/juniorimg/armaan.jpeg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 34){
					echo "	
							background:url('../assets/img/juniorimg/jubin.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 35){
					echo "	
							background:url('../assets/img/juniorimg/arijit.jpeg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}
				if($id == 36){
					echo "	
							background:url('../assets/img/juniorimg/neeti.jpg');
							background-size: cover;
							background-repeat: no-repeat;
						";
				}

		?>
	}
</style>
<body>
			<script type="text/javascript">
				var ANSWERED = false
			</script>

				
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
			<!--?php
			   if($id == 1){
			   	echo "hi";
			   	echo '<script type="text/javascript"> document.getElementById("show").style.display = "none"; </script>';
			   }
			?-->

		<div class="container">
			






			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">

								<h1 class="text-dark text-center"><?php echo $row[1];?> </h1>
								<hr class="my-8">
								<div class="row" id="media25" style="margin-bottom: 100px;">
									<?php
										if($id == 25){
											echo "	<div class='card'>
													<img src='../assets/img/redfort.jpg' class='img-fluid mx-auto d-block' alt='Responsive image' width='1200px' height='1200px'>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media26" style="margin-bottom: 100px;">
									<?php
										if($id == 26){
											echo "	<div class='card'>
													<img src='../assets/img/sachin.jpg' class='img-fluid mx-auto d-block' alt='Responsive image' width='100%' height='1200px'>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media27" style="margin-bottom: 100px;">
									<?php
										if($id == 27){
											echo "	<div class='card'>
													<div class='text-center'>
														<img src='../assets/img/Nepal1.png' class='img-fluid mx-auto d-block' alt='Responsive image' width='100%' height='1200px'>
													</div>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media28" style="margin-bottom: 100px;">
									<?php
										if($id == 28){
											echo "	<div class='card'>
													<img src='../assets/img/sbi.jpeg' class='img-fluid mx-auto d-block' alt='Responsive image' width='100%' height='1200px'>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media29" style="margin-bottom: 100px;">
									<?php
										if($id == 29){
											echo "	<div class='card'>
													<img src='../assets/img/ranbir.jpg' class='img-fluid mx-auto d-block' alt='Responsive image' width='1200px' height='1200px'>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media30" style="margin-bottom: 100px;">
									<?php
										if($id == 30){
											echo "	<div class='card'>
													<img src='../assets/img/wb.jpeg' class='img-fluid mx-auto d-block' alt='Responsive image' width='1200px' height='1200px'>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media31" style="margin-bottom: 100px;">
									<?php
										if($id == 31){
											echo "	<div class='card'>
													<div class='text-center'>
														<audio controls>
														 
														  <source src='../assets/vedio/w.mp3' type='audio/mpeg'>
														
														</audio>
													</div>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media32" style="margin-bottom: 100px;">
									<?php
										if($id == 32){
											echo "	<div class='card'>
													<div class='text-center'>
														<video controls width='100%' height='400px'>
															<source src='../assets/vedio/2.mp4' type = 'video/mp4'>
														</video>
													</div>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media33" style="margin-bottom: 100px;">
									<?php
										if($id == 33){
											echo "	<div class='card'>
													<div class='text-center'>
														<audio controls>
														 
														  <source src='../assets/vedio/3.mp3' type='audio/mpeg'>
														
														</audio>
													</div>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media34" style="margin-bottom: 100px;">
									<?php
										if($id == 34){
											echo "	<div class='card'>
													<div class='text-center'>
														<audio controls>
														 
														  <source src='../assets/vedio/4.mp3' type='audio/mpeg'>
														
														</audio>
													</div>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media35" style="margin-bottom: 100px;">
									<?php
										if($id == 35){
											echo "	<div class='card'>
													<div class='text-center'>
														<video controls width='100%' height='400px'>
															<source src='../assets/vedio/51.mp4' type = 'video/mp4'>
														</video>
													</div>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
								<div class="row" id="media36" style="margin-bottom: 100px;">
									<?php
										if($id == 36){
											echo "	<div class='card'>
													<div class='text-center'>
														<video controls width='100%' height='400px'>
															<source src='../assets/vedio/srk.mp4' type = 'video/mp4'>
														</video>
													</div>
													<a type='button' id='show' class='btn btn-success' href='#ques'>Show Question</a>
												</div>";
											}
									?>
								</div>
















					             <div class="card-container manual-flip" id="ques">
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

										    				<h4 class='text-center text-dark font-weight-bold alert-success' style='margin-top: 20px;''><i class='fas fa-check-text-success'></i>".$row[3]."</h4>";

										    			
										    			
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


    
		   document.getElementById("show").onclick = function(){
		    			
		    			document.getElementById("ques").style.display = "block";
		    			document.getElementById("ques").style.marginBottom = "100px";
		    			
		    			
			    		var timeLeft = 20;
						var elem = document.getElementById('timer');
						var timerId = setInterval(countdown, 1000);
						var audio = new Audio('../assets/music/beep.mp3');
						function countdown() {
						    if (timeLeft == -1 && !ANSWERED) {
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
		    			
		    }


   




    function rotateCard(btn){
	ANSWERED = true
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
	    var timerId = setInterval(countdown, 1000);
        } else {
            $card.addClass('hover');
		clearTimeout(timerId);
		var audioans = new Audio('../assets/music/short_sms.mp3');
            	audioans.play();
        }
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
