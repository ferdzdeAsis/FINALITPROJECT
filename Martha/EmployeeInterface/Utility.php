<?php

?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>MARTHA GOSHENLAND</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="content=device-width", initial-scale="1">
        <meta author="John Raphael S. Apostol">
        <meta author="Jeff Danielle Paswick">
        <link rel="shortcut icon" href = "../images/goshen.ico">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        <!--CSS Date Picker Link -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
        
        <!-- Clickable Table Rows CSS Code -->
        <style>
            tr[data-href]{
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-dark bg-dark">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="Rent.php">Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Utility.php">Utility</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.php">History</a>
                </li>
                <li class="logout">
                    <a class="nav-link" href="../login-admin.php">Logout</a>
                </li>
            </ul>
        </nav>
        
        <div class="divcontainer">
            <div class="row">
                
            <!-- Sidebar(Left) Navigation -->
                    <div class="col-md-1">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Building</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Residents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Concerns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inventory</a>
                        </li>
                    </ul>
                </div>
        
        <!-- Table -->
                <div class="col-xs-7">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-xs-8">
                                <table class="table table-striped table-bordered">
                                    <tr class="active">
                                        <td>Building</td>
                                        <td>Unit</td>
                                        <td>Date</td>
                                        <td>Total Amount Due</td>
                                        <td>Employees</td>
                                    </tr>
                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td><button id="btnUpdatePayment1" type="button" class="btn btn-primary" data-target="#UpdatePayment1">Update</button></td>
                                    </tr>
                                    
                    
                                    <tr>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td><button id="btnUpdatePayment2" type="button" class="btn btn-primary" data-target="#UpdatePayment2">Update</button></td>
                                    </tr>
                    
                                    <tr>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td><button id="btnUpdatePayment3" type="button" class="btn btn-primary" data-target="#UpdatePayment3">Update</button></td>
                                    </tr>
                    
                                    <tr>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td><button id="btnUpdatePayment4" type="button" class="btn btn-primary" data-target="#UpdatePayment4">Update</button></td>
                                    </tr>
                    
                                    <tr>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>                                        
                                        <td>#</td>
                                        <td>#</td>
                                        <td><button id="btnUpdatePayment5" type="button" class="btn btn-primary" data-target="#UpdatePayment5">Update</button></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        
            <!-- Sidebar(Right) Navigation -->
                    <div class="col-md-3">
                        <fieldset>
                            <legend>Utility Bill</legend>
                            <div class="form-group">
                                <label class="electricty" for="Electricity">Electricity:</label>
                                <input type="Electricity" class="form-control" id="egInputElectricity" placeholder="0">
                                
                                <label class="water" for="Water">Water:</label>
                                <input type="Water" class="form-control" id="egInputWater" placeholder="0">
                                
                                <label class="pestControl" for="PestControl">Pest Control:</label>
                                <input type="PestControl" class="form-control" id="egInputPestControl" placeholder="0">
                                
                                <label class="surcharge" for="Surcharge">Surcharge:</label>
                                <input type="Surcharge" class="form-control" id="egInputSucharge" placeholder="0">
                                
                                <label class="unitNo" for="UnitNum">Unit No.:</label>
                                <input type="UnitNum" class="form-control" id="egUnitNum">
                                <br>
                                <div class="form-control">
                                    <label class="radio-inline">
                                        <input type="radio" value="harvard" name="building">Harvard
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="princeton" name="building">Princeton
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="wharton" name="building">Wharton
                                    </label>
                                </div>
                                <br>
                                <button type="button" class="btn btn-success">Generate</button>
                                <button type="button" class="btn btn-primary">Refresh</button>
                            </div>
                        </fieldset>
                </div>
            </div>
        </div>
        
        <!-- Third Modal For "Wharton" -->
                <div class="modal fade" id="UpdatePayment1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Generate Bill</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <form class="dates navbar-left">
                                        <input type="text" autocomplete="off" id="user1" class="fomr-control" placeholder="yyy-mm-dd"/>
                                    </form>
                                <br>
                                <br>
                                <div class="col-md-10">
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <table class="table table-striped table-bordered">
                                                        <tr class="active">
                                                            <td>Building</td>
                                                            <td>Unit</td>
                                                            <td>Total Amount</td>
                                                        </tr>
            
                                                        <tbody>
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <fieldset>
                                                    <label class="recNo" for="ReceiptNo">Receipt No.</label>
                                                    <input type="ReceiptNo" class="form-control" id="egInputReceiptNo">
                                                        <br>
                                                        <label class="recNo" for="ReceiptNo">Mode of Payment</label>
                                                        <div class="form-control">
                                                            <label class="radio-inline">
                                                                <input type="radio" value="harvard" name="building">Harvard
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" value="princeton" name="building">Princeton
                                                            </label>
                                                        </div>
                                                        <br>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" >Done</button>
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
        
        <!--Javascript Date Picker Link -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
        
        <!-- JavaScript code for Payment Modal -->
        <script type="text/javascript">
            $(document).ready(function (){
                $('#btnUpdatePayment1').click(function(){
                    $('#UpdatePayment1').modal('show');
            });
                $('#btnUpdatePayment2').click(function(){
                    $('#UpdatePayment2').modal('show');
            });
                $('#btnUpdatePayment3').click(function(){
                    $('#UpdatePayment3').modal('show');
            });
                $('#btnUpdatePayment4').click(function(){
                    $('#UpdatePayment4').modal('show');
            }); 
                $('#btnUpdatePayment5').click(function(){
                    $('#UpdatePayment5').modal('show');
            });
        });
        </script>
                    
        <!-- JavaScript for Date Picker -->
        <script>
            $(function(){ 
                $('.dates #user1').datepicker({
                    'fomat':'yyyy-mm-dd',
                    'autoclose' :true
                });
            });
        </script>
    </body>
</html>  