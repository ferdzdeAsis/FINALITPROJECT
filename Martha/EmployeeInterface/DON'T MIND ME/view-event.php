<?php

// Check existence of id parameter before processing further
if(isset($_GET["eventid"]) && !empty(trim($_GET["eventid"]))){
    // Include config file
    include 'inc/connection.php';

    // Prepare a select statement
    $sql = "SELECT 
                event.eventname,event.venue,event.date,TIME_FORMAT(start, '%H:%i %p') AS start,
                                TIME_FORMAT(end, '%H:%i %p') AS end,client.firstname,client.lastname,client.client_type
            FROM
                event
            JOIN
                payment ON event.eventid = payment.eventid
            JOIN
                client ON client.client_id = payment.client_id WHERE event.eventid = ?";

    if($stmt = mysqli_prepare($connect, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_GET["eventid"]);

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Retrieve individual field value
                $eventname = $row["eventname"];
                $venue = $row["venue"];
                $date = $row["date"];
                $start = $row["start"];
                $end = $row["end"];
                $firstname = $row["firstname"];
                $lastname = $row["lastname"];
                $client_type = $row["client_type"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }

        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($connect);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>View Record</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            .wrapper{
                width: 500px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>View Record</h1>
                        </div>
                        <div class="form-group">
                            <label>Event Name</label>
                            <p class="form-control-static"><?php echo $row["eventname"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Venue</label>
                            <p class="form-control-static"><?php echo $row["venue"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <p class="form-control-static"><?php echo $row["date"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Time Start</label>
                            <p class="form-control-static"><?php echo $row["start"]; ?></p>
                        </div>
                         <div class="form-group">
                            <label>Time End</label>
                            <p class="form-control-static"><?php echo $row["end"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Client First Name</label>
                            <p class="form-control-static"><?php echo $row["firstname"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Client Last Name</label>
                            <p class="form-control-static"><?php echo $row["lastname"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Client Type</label>
                            <p class="form-control-static"><?php echo $row["client_type"]; ?></p>
                        </div>
                        <p><a href="congress-schedules.php" class="btn btn-primary">Back</a></p>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>