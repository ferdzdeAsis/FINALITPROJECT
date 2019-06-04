<?php

if(isset($_POST['submit'])){
	if(!empty($_POST['username']) || !empty($_POST['password'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	ob_start();   // output buffer.
	include ('connection.php'); //dbase connect.

	//remove slashes('/') of the string. 
	$username = stripslashes($username);
	$password = stripslashes($password);
	//escapes special characters in the string for use in SQL.
	$username = mysqli_real_escape_string($connect, $username);
	$password = mysqli_real_escape_string($connect, $password);


	//select from dbase.
//===========================================================================

	//check if acount is approved client
	$sqlCheck1 = "SELECT * FROM client WHERE (username = '$username' AND password = '$password')";
	$sqlCheckQuery2 = mysqli_query($connect, $sqlCheck1);
	$sqlCountResult3 = mysqli_num_rows($sqlCheckQuery2);

//===========================================================================

	$sqlClient = "SELECT * FROM client WHERE username = '$username' AND password = '$password'";

	$sqlAdmin =  "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

	//query from dbase.
	$resultClient = mysqli_query($connect, $sqlClient);
	$resultAdmin = mysqli_query($connect, $sqlAdmin);

	//count rows. if == 1 then it exist.
	$countClient = mysqli_num_rows($resultClient);
	$countAdmin = mysqli_num_rows($resultAdmin);

	if ( $countClient == 1){

			if ( $sqlCountResult3 >= 1) {
				$rowsClient = mysqli_fetch_array($resultClient);
				$_SESSION['user_id'] = $rowsClient['client_id'];
				$_SESSION['user_name'] = $rowsClient['username'];
			
			header("location:client-home.php");
			}
	

	}else if($countAdmin >= 1){

			$rowsAdmin= mysqli_fetch_array($resultAdmin);
			$_SESSION['user_id'] = $rowsAdmin['id'];
			$_SESSION['user_name'] = $rowsAdmin['username'];

			header("location:admin-home.php"); 
	
	}else{
              echo "<script>
              alert('Incorrect Username or Password, Please ty again.');
              window.location.href='login.php';
              </script>"; 
	}


	mysqli_close($connect);
	ob_end_flush(); //clear buffer.

	}else{
		//header("location:index.php");
	}


}