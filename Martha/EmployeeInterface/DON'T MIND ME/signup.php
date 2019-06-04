<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
    <link rel="stylesheet" href="css/style.css"> </head>

<body>
    <div class="container">
        <form class="well form-horizontal" action="signup-action.php" method="post" id="contact_form">
            <fieldset>
                <!-- Form Name -->
                <legend>Register NOW!</legend>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="firstname" placeholder="Enter First Name" class="form-control" type="text" required> </div>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Last Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="lastname" placeholder="Enter Last Name" class="form-control" type="text" required> </div>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="sample@gmail.com" class="form-control" type="text"> </div>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Phone Number</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="contact" placeholder="+6392146692" class="form-control" type="number"> </div>
                    </div>
                </div>
                <!-- Text input-->
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Gender</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="radio">
                            <label>
                                <input type="radio" name=gender id="radio1" value=m> MALE </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name=gender id="radio2" value=f> FEMALE </label>
                        </div>
                    </div>
                </div>
                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Status</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="client_type" class="form-control selectpicker">
                                <option value=" ">Select status </option>
                                <option>Student</option>
                                <option>Non-Student</option>
                                <option>Graduate</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">User Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="username" placeholder="User Name" class="form-control" type="text"> </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="password" placeholder="Password" class="form-control" type="password"> </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="confirmPassword" placeholder="Retype Password" class="form-control" type="password"> </div>
                    </div>
                </div>
                <!-- Text input-->
                <!-- radio checks -->
                <!-- Text area -->
                <!-- Success message -->
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button class="btn btn-warning " type="submit" name="register"><i class="fa fa-lock"></i> REGISTER</button> <span class="glyphicon glyphicon-send"></span> </div>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- /.container -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    <script src="js/index.js"></script>
</body>

</html>