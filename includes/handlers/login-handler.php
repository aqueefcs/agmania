<?php

	
		
		
		if(isset($_POST['submit'])){
			$uname = $_POST['name'];
			$uemail = $_POST['email'];
			$upass = $_POST['password'];



		$loginQuery = "SELECT * FROM login WHERE email = '$uemail' AND password = '$upass' "; //select from the existing database
		$success = mysqli_query($con, $loginQuery);
		if(mysqli_num_rows($success) != 1 ){
			$errorArray['invalidLogin'] = "Login not Authorised";

			

		}
		else{
			$row = mysqli_fetch_array($success);//fetching the column of database table and storing it in array.
			//echo "Hi ".$row[1];//printing the second element in the array
			$_SESSION['currentUserId'] = $row[0];
			$_SESSION['currentUserName'] = $row[1];
			$_SESSION['userLoggedIn'] = True;
			header('Location:quizhome.php');
		}
	}

		

?>