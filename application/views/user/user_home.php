<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>User|Home</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <style type="text/css">
<?php include 'assets/css/home.css'; ?>
        </style>

    </head>
    <body>

        <nav id="top">
            <div class="container">
                <div id="top-links" class="nav pull-right">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-earphone"></i>
                            </a>
                            <span class="hidden-xs hidden-sm hidden-md">+94714 339 339</span>
                        </li>
                        <li><a href="my_account.php" id="wishlist-total" title="My Account"><i class="glyphicon glyphicon-user"></i> <span class="hidden-xs hidden-sm hidden-md">My Account</span></a></li>
                        <li><a href="login-register.php" id="wishlist-total" title="Register"><i class="glyphicon glyphicon-user"></i> <span class="hidden-xs hidden-sm hidden-md">Register</span></a></li>	
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <nav class="navbar navbar-default"  style="background: #009688;color: white;" >
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color: white;">Home</a>
                    <a class="navbar-brand" href="#" style="color: white;">Reports</a>

                </div>


                <div class="collapse navbar-collapse js-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">Collection<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>

                            <ul class="dropdown-menu mega-dropdown-menu row" style="background-color: #F5F5F5;">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header" style="color: #004D40;">Leasing Services</li>                            
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="http://www.motorbikeslk.com/sites/default/files/bajaj-discover-125.jpg" class="img-responsive" alt="product 1"></a>
                                                    <h4 style="color: #004D40;"><small>Motor Bikes</small></h4>                                        
                                                    <button id="btnhov" class="btn btn" style="background-color: #004D40;color: white;" type="button">Lease Now</button> 
                                                    <button href="#" class="btn btn" style="background-color: #004D40;color: white;"type="button">View Leased</button> 
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="http://www.dpmco.com/image/data/newrered.jpg" class="img-responsive" alt="product 2"></a>
                                                    <h4 style="color: #004D40;"><small>Three Wheels</small></h4>                                        
                                                    <button class="btn btn" style="background-color: #004D40;color: white;" type="button">Lease Now</button> 
                                                    <button href="#" class="btn btn" style="background-color: #004D40;color: white;"type="button">View Leased</button>        
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="http://www.araliyalandsandhomes.lk/upload_images/property/property_1372848223-Land-pic-03.jpg" class="img-responsive" alt="product 3"></a>
                                                    <h4 style="color: #004D40;"><small>Lands</small></h4>                                        
                                                    <button class="btn btn" style="background-color: #004D40;color: white;"type="button">Pawn Now</button> <button href="#" class="btn btn" style="background-color: #004D40;color: white;" type="button">View Pawned</button>      
                                                </div><!-- End Item -->                                
                                            </div><!-- End Carousel Inner -->
                                        </div><!-- /.carousel -->

                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header" style="color: #004D40;">Customer</li>
                                        <li><a href="#">Registration</a></li>
                                        <li><a href="#">Update Customer</a></li>
                                        <li><a href="#">View Customers</a></li>
                                        <li><a href="#">Add new Installments</a></li>
                                        <li><a href="#">Add a Lease</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header" style="color: #004D40;">Motor Bikes</li>
                                        <li><a href="#">New Lease</a></li>
                                        <li><a href="#">View Leases</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header" style="color: #004D40;">Three Wheels</li>
                                        <li><a href="#">Add new Lease</a></li>
                                        <li><a href="#">View Leases</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header" style="color: #004D40;">Lands</li>
                                        <li><a href="#">New Pawn</a></li>
                                        <li><a href="#">Update Land Pawn</a></li>
                                        <li><a href="#">View Land Pawns</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header" style="color: #004D40;">Services</li>
                                        <li><a href="#">Add new Lease</a></li>
                                        <li><a href="#">Add new Pawn</a></li>
                                        <li><a href="#">Pay Installment</a></li>							
                                        <li class="divider"></li>
                                        <li class="dropdown-header" style="color: #004D40;">Search Customers</li>
                                        <form class="form" role="form">
                                            <div class="form-group">
                                                <label class="sr-only" for="email">Name | ID</label>
                                                <input type="email" class="form-control" id="email" placeholder="Name | ID | Service No">                                                              
                                            </div>
                                            <button type="submit" class="btn btn btn-block" style="background-color: #004D40;color: white;">Search</button>
                                        </form>                                                       
                                    </ul>
                                </li>
                            </ul>

                        </li>
                    </ul> 
                </div><!-- /.nav-collapse -->
            </nav>

            <!--Process Div Panel Set-->
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customers</h3>
                        </div>
                        <div class="panel-body">
                            <img class="panelimage"src="<?php echo base_url("assets/images/home/customer.png"); ?>"/>
                        </div>
                        <div class="list-group">
                            <button type="button" class="list-group-item">New Registration</button>
                            <button type="button" class="list-group-item">Update Customers</button>
                            <button type="button" class="list-group-item">Search Customers</button>
                            <button type="button" class="list-group-item">Add a Vehicle Lease</button>
                            <button type="button" class="list-group-item">Add a Land Pawn</button>
                            <button type="button" class="list-group-item">Add Installment</button>
                        </div>
                        <div class="panel-footer"><div style="height: 15px;"></div></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Services</h3>
                        </div>
                        <div class="panel-body">
                            <img class="panelimage" src="<?php echo base_url("assets/images/home/servicee.png"); ?>"/>
                        </div>
                        <div class="list-group">
                            <button type="button" class="list-group-item">Add Vehicle Lease</button>
                            <button type="button" class="list-group-item">Add Land Pawn</button>
                            <button type="button" class="list-group-item">Search Leases</button>
                            <button type="button" class="list-group-item">View Vehicles</button>
                            <button type="button" class="list-group-item">View Pawns</button>
                            <button type="button" class="list-group-item">View Lands</button>
                        </div>
                        <div class="panel-footer"><div style="height: 15px;"></div></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Reports</h3>
                        </div>
                        <div class="panel-body">
                            <img class="panelimage" style="width: 130px;margin-left: 60px;"src="<?php echo base_url("assets/images/home/reportt.png"); ?>"/>
                        </div>
                        <div class="list-group">
                            <button type="button" class="list-group-item">Lease Reports</button>
                            <button type="button" class="list-group-item">Pawn Reports</button>
                            <button type="button" class="list-group-item">Vehicle Reports</button>
                            <button type="button" class="list-group-item">Land Reports</button>
                            <button type="button" class="list-group-item">Customer Reports</button>
                            <button type="button" class="list-group-item">Account Reports</button>
                        </div>
                        <div class="panel-footer"><div style="height: 15px;"></div></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Settings</h3>
                        </div>
                        <div class="panel-body">
                            <img class="panelimage" style="width: 100px;margin-left: 70px;"src="<?php echo base_url("assets/images/home/settingss.png"); ?>"/>
                        </div>
                        <div class="list-group">
                            <button type="button" class="list-group-item">Setting 01</button>
                            <button type="button" class="list-group-item">Setting 02</button>
                            <button type="button" class="list-group-item">Setting 03</button>
                            <button type="button" class="list-group-item">Setting 04</button>
                            <button type="button" class="list-group-item">Setting 05</button>
                            <button type="button" class="list-group-item">Setting 06</button>
                        </div>
                        <div class="panel-footer"><div style="height: 15px;"></div></div>
                    </div>
                </div>
            </div>
            <!--Process Div Panel Set-->


        </div>
        <footer class="navbar-default navbar-fixed-bottom">
            <div class="container-fluid" style="text-align: center;">
                <span>Copyright © <a href="#" id="footer-caption">Softidea Solutions - 2016</a></span>
            </div>
        </footer>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>

    </style>
</html>