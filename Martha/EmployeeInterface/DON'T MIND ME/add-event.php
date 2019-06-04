<?php
include 'inc/session.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>EVENT</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body>

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="admin-home.php" class="logo"><b>OJT PROJECT</b></a>
                <!--logo end-->
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="inc/logout.php">Logout</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                        <h5 class="centered">ADMIN</h5>

                        <li class="mt">
                            <a href="admin-home.php">
                                <i class="fa fa-desktop"></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="speakers.php" >
                                <i class="fa fa-book"></i>
                                <span>Speakers</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="congress-schedules.php" class="active">
                                <i class="fa fa-tasks"></i>
                                <span>Congress List</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="admin-payments.php">
                                <i class="fa fa-th"></i>
                                <span>Payments</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="registered-user.php" >
                                <i class="fa fa-th"></i>
                                <span>Registered User</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="speakers-with-event.php" >
                                <i class="fa fa-th"></i>
                                <span>Assigned Speakers with Event</span>
                            </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper site-min-height">
                    <h3><i class="fa fa-angle-right"></i> Add Event</h3>

                    <!-- BASIC FORM ELELEMNTS -->
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i> EVENT
                                    <ul class="nav pull-right top-menu">
                                        <a type="button" class="btn btn-theme02" a href="congress-schedules.php">BACK</a>
                                    </ul>
                                </h4>

                                <form class="form-horizontal style-form" action="add-event-action.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Event Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="eventname" id="eventname"  required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Venue</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="venue" id="venue" pattern="[a-zA-Z]{1,}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="date" id="date" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Start Time</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="start" id="start" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">End Time</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="end" id="end" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Amount</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="amount" id="amount" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Banner</label>
                                        <div class="col-sm-10">
                                            <input type="hidden" name="size" value="1000000" required>
                                            <div>
                                                <input type="file" name="image" id="file" required>
                                            </div>
                                        </div>
                                    </div>



                                    <script src="jquery.min.js"></script>
                                    <script>
                                        function filePreview(input){
                                            if(input.files && input.files[0]){
                                                var reader = new FileReader();
                                                reader.onload = function(e){
                                                    $('#uploadForm + img').remove();
                                                    $('#uploadForm').after('<img src ="'+e.target.result +' " width = "450" height = "450" />');
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }

                                        $('#file').change(function(){
                                            filePreview(this);
                                        });
                                    </script>


                                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="create">CREATE</button>

                                </form>
                            </div>
                            <form method="post" id="uploadForm" enctype="multipart/form-data" action="#">
                            </form>
                            <?php
                            if(isset($_POST['submit'])){
                                // File upload configuration
                                $targetDir = "uploads/";
                                $allowTypes = array('jpg','png','jpeg','gif', 'PNG');

                                $images_arr = array();
                                foreach($_FILES['images']['name'] as $key=>$val){
                                    $image_name = $_FILES['images']['name'][$key];
                                    $tmp_name   = $_FILES['images']['tmp_name'][$key];
                                    $size       = $_FILES['images']['size'][$key];
                                    $type       = $_FILES['images']['type'][$key];
                                    $error      = $_FILES['images']['error'][$key];

                                    // File upload path
                                    $fileName = basename($_FILES['images']['name'][$key]);
                                    $targetFilePath = $targetDir . $fileName;

                                    // Check whether file type is valid
                                    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                                    if(in_array($fileType, $allowTypes)){    
                                        // Store images on the server
                                        if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$targetFilePath)){
                                            $images_arr[] = $targetFilePath;
                                        }
                                    }
                                }

                                // Generate gallery view of the images
                                if(!empty($images_arr)){ ?>
                            <ul>
                                <?php foreach($images_arr as $image_src){ ?>
                                <li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="<?php echo $image_src; ?>" style="width: 500px; height: 500px" alt=""></li>
                                <?php } ?>
                            </ul>
                            <?php }
                            }
                            ?>
                        </div><!-- col-lg-12-->       
                    </div><!-- /row -->
                </section><! --/wrapper -->

                <!-- display upload status -->
                <div id="uploadStatus"></div>

                <!-- gallery view of uploaded images --> 
                <div class="gallery" id="imagesPreview"></div>


                <script>
                    $(document).ready(function(){
                        $('#uploadForm').ajaxForm({
                            target:'#imagesPreview',
                            beforeSubmit:function(){
                                $('#uploadStatus').html('<img src="uploading.gif"/>');
                            },
                            success:function(){
                                $('#images').val('');
                                $('#uploadStatus').html('');
                            },
                            error:function(){
                                $('#uploadStatus').html('Images upload failed, please try again.');
                            }
                        });
                    });
                </script>
            </section><!-- /MAIN CONTENT -->





            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2018
                    <a href="blank.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="assets/js/common-scripts.js"></script>

        <!--script for this page-->

        <script>
            //custom select box

            $(function(){
                $('select.styled').customSelect();
            });

        </script>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script>

    </body>
</html>