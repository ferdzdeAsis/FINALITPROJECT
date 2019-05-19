<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>MARTHA GOSHENLAND</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="content=device-width", initial-scale="1">
        <meta author="John Raphael S. Apostol">
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
                    <a class="nav-link" href="#">Resident</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="concerns.php">Concerns</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inventory-supplies.php">Inventory</a>
                </li>
            </ul>
        </nav>
        
        <div class="divcontainer align-middle">
            <div class="row">
                <div class="col-md-1">
                </div>
        
        <!-- Table -->
                <fieldset>
                   <legend align="center">Concerns</legend> 
                <div class="col-md-9">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped table-bordered">
                                    <tr class="active">
                                        <td>Concern ID</td>
                                        <td>Tenant Name</td>
                                        <td>Contact</td>
                                        <td>Unit</td>
                                        <td>Report</td>
                                        <td>Description</td>
                                        <td>Total Amount Due</td>
                                        <td>Status</td>
                                        <td>Time Available</td>
                                        <td>Date Available</td>
                                        <td>Action</td>
                                    </tr>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>James</td>
                                    <td>09854655928</td>
                                        <td>2RE-A</td>
                                        <td>Backed Up Toilet</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                    </tr>
                    
                                    <tr>
                                        <td>02</td>
                                        <td>Clara</td>
                                        <td>09472583694</td>
                                        <td>5LM-B</td>
                                        <td>Broken Door</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                    </tr>
                    
                                    <tr>
                                        <td>03</td>
                                        <td>Amelia</td>
                                        <td>09884567892</td>
                                        <td>4LF-W</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                    </tr>
                    
                                    <tr>
                                        <td>04</td>
                                        <td>River</td>
                                        <td>09789457284</td>
                                        <td>3LC-E</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                    </tr>
                    
                                    <tr>
                                        <td>05</td>
                                        <td>Song</td>
                                        <td>09526487295</td>
                                        <td>4RS-E</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    </fieldset>
                    
                
                <!-- First Modal For "All" -->
                    <div class="modal fade" id="ModalAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <form class="navbar-form navbar-right">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                        </form>
                                    <div class="col-md-9">
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <table class="table table-striped table-bordered">
                                                        <tr class="active">
                                                            <td>Building</td>
                                                            <td>Unit</td>
                                                            <td>Total Amount</td>
                                                            <td> </td>
                                                        </tr >
                                                        
                                                    <tbody>
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="addRent" type="button" class="btn btn-success" data-target="#AddRent"><a class="nav-link" href="#">Add Rent</a></button>
                                    
                                    <button id="addInternet" type="button" class="btn btn-success" data-target="#AddInternet"><a class="nav-link" href="#">Add Internet Bill</a></button>
                                    
                                    <button id="removeBillAll" type="button" class="btn btn-success" data-target="#RemoveBillAll"><a class="nav-link" href="#">Remove Bill</a></button>
                                        
                                    <button id="removeInternetAll" type="button" class="btn btn-success" data-target="#RemoveInternetAll"><a class="nav-link" href="#">Remove Internet Bill</a></button>
                                        
                                    <button type="button" class="btn btn-secondary">Done</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                </div>
        
            <!-- Second Modal For "Harvard" -->
                <div class="modal fade" id="HarvardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <form class="navbar-form navbar-right">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                        </form>
                                    <div class="col-md-9">
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <table class="table table-striped table-bordered">
                                                        <tr class="active">
                                                            <td>Building</td>
                                                            <td>Unit</td>
                                                            <td>Total Amount</td>
                                                            <td> </td>
                                                        </tr>
                                                        
                                                        <tbody>
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="addRentHarvard" type="button" class="btn btn-success" data-target="#AddRentHarvard"><a class="nav-link" href="#">Add Rent</a></button>
                                    
                                    <button id="addInternet1" type="button" class="btn btn-success" data-target="#AddInternetHarvard"><a class="nav-link" href="#">Add Internet Bill</a></button>
                                    
                                    <button id="removeBillHarvard" type="button" class="btn btn-success" data-target="#RemoveBillHarvard"><a class="nav-link" href="#">Remove Bill</a></button>
                                    
                                    <button id="removeInternetHarvard" type="button" class="btn btn-success" data-target="#RemoveInternetHarvard"><a class="nav-link" href="#">Remove Internet Bill</a></button>
                                    
                                    <button type="button" class="btn btn-secondary" >Done</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                        </div>
                    </div>
                </div>
                
        
        <!-- Third Modal For "Princeton" -->
                <div class="modal fade" id="PrincetonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <form class="navbar-form navbar-right">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                        </form>
                                    <div class="col-md-9">
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <table class="table table-striped table-bordered">
                                                        <tr class="active">
                                                            <td>Building</td>
                                                            <td>Unit</td>
                                                            <td>Total Amount</td>
                                                            <td> </td>
                                                        </tr>
                                                        
                                                        <tbody>
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="addRentPrinceton" type="button" class="btn btn-success" data-target="#AddRentPrinceton"><a class="nav-link" href="#">Add Rent</a></button>
                                    
                                    <button id="addInternet2" type="button" class="btn btn-success" data-target="#AddInternetPrinceton"><a class="nav-link" href="#">Add Internet Bill</a></button>
                                    
                                    <button id="removeBillPrinceton" type="button" class="btn btn-success" data-target="#RemoveBillPrinceton"><a class="nav-link" href="#">Remove Bill</a></button>
                                    
                                    <button id="removeInternetPrinceton" type="button" class="btn btn-success" data-target="#RemoveInternetPrinceton"><a class="nav-link" href="#">Remove Internet Bill</a></button>
                                    
                                    <button type="button" class="btn btn-secondary" >Done</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                        </div>
                    </div>
                </div>
        
        <!-- Third Modal For "Princeton" -->
                <div class="modal fade" id="WhartonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <form class="navbar-form navbar-right">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                        </form>
                                    <div class="col-md-9">
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <table class="table table-striped table-bordered">
                                                        <tr class="active">
                                                            <td>Building</td>
                                                            <td>Unit</td>
                                                            <td>Total Amount</td>
                                                            <td> </td>
                                                        </tr>
            
                                                        <tbody>
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                            <td>#</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="addRentWharton" type="button" class="btn btn-success" data-target="#AddRentWharton"><a class="nav-link" href="#">Add Rent</a></button>
                                    
                                    <button id="addInternet3" type="button" class="btn btn-success" data-target="#AddInternetWharton"><a class="nav-link" href="#">Add Internet Bill</a></button>
                                    
                                    <button id="removeBillWharton" type="button" class="btn btn-success" data-target="#RemoveBillWharton"><a class="nav-link" href="#">Remove Bill</a></button>
                                    
                                    <button id="removeInternetWharton" type="button" class="btn btn-success" data-target="#RemoveInternetWharton"><a class="nav-link" href="#">Remove Internet Bill</a></button>
                                    
                                    <button type="button" class="btn btn-secondary" >Done</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Boostrap for Remove Bill Items(All) -->
        <div class="modal fade" id="RemoveBillAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Remove Bill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to permanently remove this bill in the list?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Boostrap for Remove Bill Items(Harvard) -->
        <div class="modal fade" id="RemoveBillHarvard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Remove Bill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to permanently remove this bill in the list?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Boostrap for Remove Bill Items(Princeton) -->
        <div class="modal fade" id="RemoveBillPrinceton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Remove Bill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to permanently remove this bill in the list?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Boostrap for Remove Bill Items(Wharton) -->
        <div class="modal fade" id="RemoveBillWharton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Remove Bill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to permanently remove this bill in the list?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Boostrap for Remove Internet Bill(All) -->
        <div class="modal fade" id="RemoveInternetAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Remove Bill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to permanently remove this internet bill in the list?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Boostrap for Remove Internet Bill(Harvard) -->
        <div class="modal fade" id="RemoveInternetHarvard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Remove Bill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to permanently remove this internet bill in the list?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Boostrap for Remove Internet Bill(Princeton) -->
        <div class="modal fade" id="RemoveInternetPrinceton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Remove Bill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to permanently remove this internet bill in the list?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Boostrap for Remove Internet Bill(Wharton) -->
        <div class="modal fade" id="RemoveInternetWharton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Remove Bill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to permanently remove this internet bill in the list?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap for Add Rent(All) Module -->
        <div class="modal fade" id="AddRentAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Internet Fee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to automatically add rent base on their building?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap for Add Rent(Harvard) Module -->
        <div class="modal fade" id="AddRentHarvard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Internet Fee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to automatically add rent base on their building?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap for Add Rent(Princeton) Module -->
        <div class="modal fade" id="AddRentPrinceton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Internet Fee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to automatically add rent base on their building?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap for Add Rent(Wharton) Module -->
        <div class="modal fade" id="AddRentWharton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Internet Fee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <h3 for="form1">Are you sure you want to automatically add rent base on their building?</h3>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap for AddInternet(All) Module -->
        <div class="modal fade" id="AddInternetAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Internet Fee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <!-- Selection of items (Query) -->
                        <h4 for="form1">Units Selected</h4>
                        
                        <div class="md-form">
                              <label for="form2">Enter Amout</label>
                            <input type="text" id="form1" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap for AddInternet(Harvard) Module -->
        <div class="modal fade" id="AddInternetHarvard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Internet Fee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <!-- Selection of items (Query) -->
                        <h4 for="form1">Units Selected</h4>
                        
                        <div class="md-form">
                              <label for="form2">Enter Amout</label>
                            <input type="text" id="form1" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap for AddInternet(Princeton) Module -->
        <div class="modal fade" id="AddInternetPrinceton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Internet Fee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <!-- Selection of items (Query) -->
                        <h4 for="form1">Units Selected</h4>
                        
                        <div class="md-form">
                              <label for="form2">Enter Amout</label>
                            <input type="text" id="form1" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap for AddInternet(Wharton) Module -->
        <div class="modal fade" id="AddInternetWharton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Internet Fee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <!-- Selection of items (Query) -->
                        <h4 for="form1">Units Selected</h4>
                        
                        <div class="md-form">
                              <label for="form2">Enter Amout</label>
                            <input type="text" id="form1" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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
        
        <!-- JavaScript code for the multiple Modals -->
        <script type="text/javascript">
            $(document).ready(function (){
                $('#btnShowModal').click(function(){
                    $('#ModalAll').modal('show');
            });
                $('#btnShowModal1').click(function(){
                    $('#HarvardModal').modal('show');
            });
                $('#btnShowModal2').click(function(){
                    $('#PrincetonModal').modal('show');
            });
                $('#btnShowModal3').click(function(){
                    $('#WhartonModal').modal('show');
            });
                
                $('#addInternet').click(function(){
                    $('#AddInternetAll').modal('show');
            });
                $('#addInternet1').click(function(){
                    $('#AddInternetHarvard').modal('show');
            });
                $('#addInternet2').click(function(){
                    $('#AddInternetPrinceton').modal('show');
            });
                $('#addInternet3').click(function(){
                    $('#AddInternetWharton').modal('show');
            });
                
                $('#addRent').click(function(){
                    $('#AddRentAll').modal('show');
            });
                $('#addRentHarvard').click(function(){
                    $('#AddRentHarvard').modal('show');
            });
                $('#addRentPrinceton').click(function(){
                    $('#AddRentPrinceton').modal('show');
            });
                $('#addRentWharton').click(function(){
                    $('#AddRentWharton').modal('show');
            });

                $('#removeBillAll').click(function(){
                    $('#RemoveBillAll').modal('show');
            });
                $('#removeBillHarvard').click(function(){
                    $('#RemoveBillHarvard').modal('show');
            });
                $('#removeBillPrinceton').click(function(){
                    $('#RemoveBillPrinceton').modal('show');
            });
                $('#removeBillWharton').click(function(){
                    $('#RemoveBillWharton').modal('show');
            });
                
                $('#removeInternetAll').click(function(){
                    $('#RemoveInternetAll').modal('show');
            });
                $('#removeInternetHarvard').click(function(){
                    $('#RemoveInternetHarvard').modal('show');
            });
                $('#removeInternetPrinceton').click(function(){
                    $('#RemoveInternetPrinceton').modal('show');
            });
                $('#removeInternetWharton').click(function(){
                    $('#RemoveInternetWharton').modal('show');
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
        
        <!-- Clickable Table Rows JQuery Code -->
        <script>
            document.addEventListener("DOMContentLoaded", () =>{
                const rows = document.querySelectorAll("tr[data-href]");
                
                rows.forEach(row => {
                    row.addEventListener("click", () =>{
                        window.location.href = row.dataset.href;
                    });
                });
            });
        </script>
    </body>
</html>  