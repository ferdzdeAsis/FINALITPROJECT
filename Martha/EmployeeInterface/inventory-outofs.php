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
                    <a class="nav-link" href="concerns.php">Concerns</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="inventory.php">Inventory</a>
                </li>
            </ul>
        </nav>
        
        <div class="divcontainer align-middle">
            <div class="row">
                        <!-- Sidebar(Left) Navigation -->
                <div class="col-md-1">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="nav-link" href="inventory-supplies.php">Supplies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inventory-history.php">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inventory-outofs.php">Out of Stock</a>
                        </li>
                    </ul>
                </div>
        
        <!-- Table -->
                <div class="col-md-9">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped table-bordered">
                                    <tr class="active">
                                        <td>Item</td>
                                        <td>Tenant Name</td>
                                        <td>Contact</td>
                                        <td>Unit</td>
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
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>       
                      
        <!-- Boostrap for Remove Bill Items(All) -->
        <div class="modal fade" id="ModalEntry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">New Entry:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="form-group">
                            <label class="item" for="Item">ITEM:</label>
                            <input type="Item" class="form-control" id="egInputItem">
                            <label class="brand" for="Brand">BRAND:</label>
                            <input type="Brand" class="form-control" id="egInputBrand">
                            <label class="description" for="Description">DESCRIPTION:</label>
                            <input type="Description" class="form-control" id="egInputDescription">
                            <label class="price" for="Price">PRICE PER UNIT:</label>
                            <input type="Price" class="form-control" id="egInputPrice">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Add</button>
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
        
        <!-- JavaScript code for the multiple Modals -->
        <script type="text/javascript">
            $(document).ready(function (){
                $('#addEntry').click(function(){
                    $('#ModalEntry').modal('show');
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