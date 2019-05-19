<?php
include 'config.php';

if(isset($_SESSION['empid'])){ 
    header("location: login-admin.php");
}else if(isset($_POST['register'])){

	$email = mysqli_real_escape_string($conn, $_POST['email']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$position = mysqli_real_escape_string($conn, $POST['position']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $employeeReg = "INSERT INTO employee(firstname,lastname,email,contact,position,password)VALUES ('$firstname','$lastname','$email','$contact','position','$password')";


    $allEmployee = mysqli_query($conn,"SELECT email FROM employee WHERE email = '$email'");

    if(mysqli_num_rows($allEmployee) >= 1){
        $message = "Username is existing already.";
        echo "<script type='text/javascript'>alert('$message');

        </script> ";
    }else{
        $registerEmployee = mysqli_query($conn, $employeeReg);  
        echo "<script>
              alert('Success.Thanks for registering us, we will get back to you shortly.!');
              window.location.href='login-admin.php';
              </script>";
    }
    $allEmployee = mysqli_query($conn,"SELECT firstname,lastname FROM employee");

    if(mysqli_num_rows($allEmployee) >= 1){
         echo "<script>
              alert('Name is existing already.');
              window.location.href='login-admin.php';
              </script>";
    }else{
        $registerEmployee = mysqli_query($conn, $employeeReg);  
        echo "<script>
              alert('Success.Thanks for registering us, we will get back to you shortly.!');
              window.location.href='login-admin.php';
              </script>";

    }
}
?>