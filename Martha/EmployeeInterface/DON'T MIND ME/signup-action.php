<?php
include 'database-connection.php';


if(isset($_SESSION['client 
  _id'])){ 
    header("location:index.php");
}else if(isset($_POST['register'])){

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $contact = mysqli_real_escape_string($conn, $_POST['contact']);


    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $client_type = mysqli_real_escape_string($conn, $_POST['client_type']);

    $clientReg = "INSERT INTO client(firstname,lastname,gender,username,password,email,contact,client_type)VALUES ('$firstname','$lastname','$gender','$username','$password','$email','$contact','$client_type')";


    $allClient = mysqli_query($conn,"SELECT username FROM client WHERE username = '$username'");

    if(mysqli_num_rows($allClient) >= 1){
        $message = "Username is existing already.";
        echo "<script type='text/javascript'>alert('$message');

        </script> ";
    }else{
        $registerClient = mysqli_query($conn, $clientReg);  
        echo "<script>
              alert('Success.Thanks for registring us, we will get back to you shortly.!');
              window.location.href='login.php';
              </script>";


    }
    $allClient = mysqli_query($conn,"SELECT firstname,lastname FROM client");

    if(mysqli_num_rows($allClient) >= 1){
         echo "<script>
              alert('Name is existing already.');
              window.location.href='signup.php';
              </script>";
    }else{
        $registerClient = mysqli_query($conn, $clientReg);  
        echo "<script>
              alert('Success.Thanks for registring us, we will get back to you shortly.!');
              window.location.href='login.php';
              </script>";

    }



}

?>