<?php
include 'inc/connection.php';
session_start();

if(isset($_POST['create'])){

    $eventname = mysqli_real_escape_string($connect, $_POST['eventname']);
    $venue = mysqli_real_escape_string($connect, $_POST['venue']);
    $date = mysqli_real_escape_string($connect, $_POST['date']);
    $start = mysqli_real_escape_string($connect, $_POST['start']);
    $end = mysqli_real_escape_string($connect, $_POST['end']);
    $amount = mysqli_real_escape_string($connect, $_POST['amount']);
    $image = $_FILES['image']['name'];
    $target = "images/";

    $eventReg = "INSERT INTO event (eventname,venue,date,start,end,amount,image) values ('$eventname','$venue','$date','$start','$end', '$amount','$image')";

    $allEvent = mysqli_query($connect,"SELECT eventname FROM event WHERE eventname = '$eventname'");

    if(mysqli_num_rows($allEvent) >= 1){

        echo "<div class='alert'>"; 
        echo "Event Name already taken! Please Try Again.";
        echo "</div>";
    }else{
        $registerEvent = mysqli_query($connect, $eventReg);   
        move_uploaded_file($_FILES['image']['tmp_name'], $target.$image);
        echo "<div class='alertsuccess'>"; 
        echo "Event Creation Successful!";
        echo "</div>"; 
        header("location:congress-schedules.php");
    }
}
?>