<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email'])){

	  $tempId = $_SESSION['id'];
	  $tempEmail = $_SESSION['email'];

	  include('config.php');

	  $sql2 = "SELECT * FROM client WHERE email = '$tempEmail'";

	  $queryTenant = mysqli_query($conn, $sql2);

	  $sessionTenant = mysqli_num_rows($queryTenant); 

	  $fetchTenant = mysqli_fetch_assoc($queryTenant);

		if($fetchTenant == 1){
		  if (isset($fetchTenant)) {
			header("location: ClientInterface/concerns-client.php");
		  }
		}
}

include "check_login.php";

?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>MARTHA GOSHENLAND</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="content=device-width", initial-scale="1">
        <meta author="John Raphael S. Apostol">
		<link rel="shortcut icon" href = "images/goshen.ico">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        <link href="css/global.css" type="text/css" rel="stylesheet">
        
    </head>
    <body>
        
        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-4 col-sn-4 col-xs-12"></div>
                <div class="col-md-4 col-sn-4 col-xs-12">
                    
                    <!--Form Start-->
                    <form class="form-container">
                    <img class="martha" src="images/martha.jpg">
                        <div class="form-group">
                            <label for="inputUsername">Email Address</label>
                            <input type="username" class="form-control" id="egInputUSername" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="egInputPassword" placeholder="password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <br>
                        <div class="">
                        <fieldset>
                            <legend align="center">Note</legend>
                            <p><center>To register, please proceed to the admin office.</center></p>
                        </fieldset>
                            </div>
                    </form>
                    
                </div>
                <div class="col-md-4 col-sn-4 col-xs-12"></div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLongTitle">Sign-up</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="firstN" for="firstName">First Name:</label>
                            <input type="lastName" class="form-control" id="egInputFirstName">
                            <label class="lastN" for="LastName">Last Name:</label>
                            <input type="lastName" class="form-control" id="egInputLastName">
                            <label class="emailAdd" for="emailAddress">Email Address:</label>
                            <input type="lastName" class="form-control" id="egInputEmail" placeholder="example@marthaservice.com">
                            <label class="mobNum" for="mobileNumber">Mobile Number:</label>
                            <input type="mobileNumber" class="form-control" id="egInputMobileNum">
                            <div class="form-group">
                                <label for="position" class="checkbox-inline font-weight-bold">Position:</label>
                                <select id="position" class="form-control">
                                    <option value="0">Select a Postion</option>
                                    <option value="1">Leasing Officer</option>
                                    <option value="2">Leasing Manager</option>
                                    <option value="3">Maintenance</option>
                                </select>
                            </div>
                            <label class="pass" for="inputPassword">Password:</label>
                            <input type="password" class="form-control" id="egInputPassword">
                            <label class="confPass" for="confirmPassword">Confirm Password:</label>
                            <input type="confirmPassword" class="form-control" id="egInputConfirmPassword">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Register</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- JavaScript Files/Links -->
        <script src="js/bootstrap.min.js"></script>
        
        <!-- JavaScript Links includes Bootstrap -->
        <script src="js/bootstrap.bundle.min.js"></script>
            
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        
        <!-- Modal Popup for Signup -->
        <script type="text/javascript">
            $(document).ready(function (){
                $('#btnShowModal').click(function(){
                    $('#LoginModal').modal('show');
            });
            });
        </script>
    </body>
</html>  