<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
include_once('header.php');
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Employee</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
             
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Employee
                        </div>
                        <div class="panel-body">
							<div class="form-group">
                                            <label>Enter Name</label>
                                            <input type="text" class="form-control">
                                         
                            </div>
                            <hr>
                            <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control">

                                        </div>
                            <hr>
                           
                           
							
							<div class="form-group">
								<input type="submit" class="btn btn-primary">           
                            </div>
							
							
                            </div>
                        </div>
                            </div>
      

        </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <?php
include_once('footer.php');
?>
</body>
</html>
