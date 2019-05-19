<?php

if(isset($_POST['submit'])){
	if(!empty($_POST['emailAdd']) || !empty($_POST['password'])){

	$emailAdd = $_POST['emailAdd'];
	$password = $_POST['password'];

	ob_start();   // output buffer.
	include ('config.php'); //dbase connect.

	//remove slashes('/') of the string. 
	$emailAdd = stripslashes($emailAdd);
	$password = stripslashes($password);
	//escapes special characters in the string for use in SQL.
	$emailAdd = mysqli_real_escape_string($conn, $emailAdd);
	$password = mysqli_real_escape_string($conn, $password);


	//select from dbase.
//===========================================================================

	//check if acount is approved client
	$sqlCheck1 = "SELECT * FROM tenant WHERE (email = '$username' AND password = '$password')";
	$sqlCheckQuery2 = mysqli_query($conn, $sqlCheck1);
	$sqlCountResult3 = mysqli_num_rows($sqlCheckQuery2);

//===========================================================================

	$sqlTenant = "SELECT * FROM tenant WHERE email = '$username' AND password = '$password'";

	$sqlEmployee =  "SELECT * FROM employee WHERE email = '$username' AND password = '$password'";

	//query from dbase.
	$resultTenant = mysqli_query($conn, $sqlTenant);
	$resultEmployee = mysqli_query($conn, $sqlEmployee);

	//count rows. if == 1 then it exist.
	$countTenant = mysqli_num_rows($resultTenant);
	$countEmployee = mysqli_num_rows($resultEmployee);

	if ( $countTenant == 1){

			if ( $sqlCountResult3 >= 1) {
				$rowsTenant = mysqli_fetch_array($resultTenant);
				$_SESSION['id'] = $rowsTenant['id'];
				$_SESSION['emailAdd'] = $rowsTenant['emailAdd'];
			
			header("location: concern-client.php");
			}
	

	}else if($countAdmin >= 1){

			$rowsAdmin= mysqli_fetch_array($resultAdmin);
			$_SESSION['empid'] = $rowsAdmin['empid'];
			$_SESSION['emailAdd'] = $rowsAdmin['emailAdd'];

			header("location: admin-home.php"); 
	
	}else{
              echo "<script>
              alert('Incorrect Username or Password, Please try again.');
              window.location.href='login-admin.php';
              </script>"; 
	}


	mysqli_close($conn);
	ob_end_flush(); //clear buffer.

	}else{
		//header("location:index.php");
	}


}