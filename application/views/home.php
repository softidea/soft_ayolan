<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <style>

            @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
            body {
                font-family: 'Open Sans', 'sans-serif';
                background:#f0f0f0;
            }
            .navbar-nav>li>.dropdown-menu {
                margin-top:20px;
                border-top-left-radius:4px;
                border-top-right-radius:4px;
            }
            .navbar-default .navbar-nav>li>a {
                width:200px;
                font-weight:bold;
            }
            .mega-dropdown {
                position: static !important;
                width:100%;
            }
            .mega-dropdown-menu {
                padding: 20px 0px;
                width: 100%;
                box-shadow: none;
                -webkit-box-shadow: none;
            }
            .mega-dropdown-menu:before {
                content: "";
                border-bottom: 15px solid #fff;
                border-right: 17px solid transparent;
                border-left: 17px solid transparent;
                position: absolute;
                top: -15px;
                left: 285px;
                z-index: 10;
            }
            .mega-dropdown-menu:after {
                content: "";
                border-bottom: 17px solid #ccc;
                border-right: 19px solid transparent;
                border-left: 19px solid transparent;
                position: absolute;
                top: -17px;
                left: 283px;
                z-index: 8;
            }
            .mega-dropdown-menu > li > ul {
                padding: 0;
                margin: 0;
            }
            .mega-dropdown-menu > li > ul > li {
                list-style: none;
            }
            .mega-dropdown-menu > li > ul > li > a {
                display: block;
                padding: 3px 20px;
                clear: both;
                font-weight: normal;
                line-height: 1.428571429;
                color: #999;
                white-space: normal;
            }
            .mega-dropdown-menu > li ul > li > a:hover,
            .mega-dropdown-menu > li ul > li > a:focus {
                text-decoration: none;
                color: #444;
                background-color: #f5f5f5;
            }
            .mega-dropdown-menu .dropdown-header {
                color: #428bca;
                font-size: 18px;
                font-weight:bold;
            }
            .mega-dropdown-menu form {
                margin:3px 20px;
            }
            .mega-dropdown-menu .form-group {
                margin-bottom: 3px;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default" style="background: #004D40;color: white;" >
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>

                            <ul class="dropdown-menu mega-dropdown-menu row">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Leasing Services</li>                            
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="http://www.motorbikeslk.com/sites/default/files/bajaj-discover-125.jpg" class="img-responsive" alt="product 1"></a>
                                                    <h4><small>Motor Bikes</small></h4>                                        
                                                    <button class="btn btn-primary" type="button">Lease Now</button> <button href="#" class="btn btn-default" type="button">View Leased</button>       
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="http://www.dpmco.com/image/data/newrered.jpg" class="img-responsive" alt="product 2"></a>
                                                    <h4><small>Three Wheels</small></h4>                                        
                                                    <button class="btn btn-primary" type="button">Lease Now</button> <button href="#" class="btn btn-default" type="button">View Leased</button>        
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="http://www.araliyalandsandhomes.lk/upload_images/property/property_1372848223-Land-pic-03.jpg" class="img-responsive" alt="product 3"></a>
                                                    <h4><small>Lands</small></h4>                                        
                                                    <button class="btn btn-primary" type="button">Pawn Now</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span>View Pawned</button>      
                                                </div><!-- End Item -->                                
                                            </div><!-- End Carousel Inner -->
                                        </div><!-- /.carousel -->
                                        <li class="divider"></li>
                                        <li><a href="#">View all Leases<span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Customer</li>
                                        <li><a href="#">Registration</a></li>
                                        <li><a href="#">Update Customer</a></li>
                                        <li><a href="#">View Customers</a></li>
                                        <li><a href="#">Add new Installments</a></li>
                                        <li><a href="#">Add a Lease</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Motor Bikes</li>
                                        <li><a href="#">New Lease</a></li>
                                        <li><a href="#">View Leases</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Three Wheels</li>
                                        <li><a href="#">Add new Lease</a></li>
                                        <li><a href="#">View Leases</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Lands</li>
                                        <li><a href="#">New Pawn</a></li>
                                        <li><a href="#">Update Land Pawn</a></li>
                                        <li><a href="#">View Land Pawns</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Services</li>
                                        <li><a href="#">Add new Lease</a></li>
                                        <li><a href="#">Add new Pawn</a></li>
                                        <li><a href="#">Pay Installment</a></li>							
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Search Customers</li>
                                        <form class="form" role="form">
                                            <div class="form-group">
                                                <label class="sr-only" for="email">Name | ID</label>
                                                <input type="email" class="form-control" id="email" placeholder="Name | ID | Service No">                                                              
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block">Search</button>
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

                        </div>
                        <div class="list-group">
                            <button type="button" class="list-group-item">New Registration</button>
                            <button type="button" class="list-group-item">Update Customers</button>
                            <button type="button" class="list-group-item">Search Customers</button>
                            <button type="button" class="list-group-item">Add a Vehicle Lease</button>
                            <button type="button" class="list-group-item">Add a Land Pawn</button>
                            <button type="button" class="list-group-item">Add Installment</button>
                            <button type="button" class="list-group-item">View Installment</button>
                            <button type="button" class="list-group-item">Morbi leo risus</button>
                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                        </div>
                        <div class="panel-footer">Panel footer</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Services</h3>
                        </div>
                        <div class="panel-body">

                        </div>
                        <div class="list-group">
                            <button type="button" class="list-group-item">Add Vehicle Lease</button>
                            <button type="button" class="list-group-item">Add Land Pawn</button>
                            <button type="button" class="list-group-item">Search Leases</button>
                            <button type="button" class="list-group-item">View Vehicles</button>
                            <button type="button" class="list-group-item">View Pawns</button>
                            <button type="button" class="list-group-item">View Lands</button>
                            <button type="button" class="list-group-item">Search Installments</button>
                            <button type="button" class="list-group-item">Morbi leo risus</button>
                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                        </div>
                        <div class="panel-footer">Panel footer</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Reports</h3>
                        </div>
                        <div class="panel-body">

                        </div>
                        <div class="list-group">
                            <button type="button" class="list-group-item">Lease Reports</button>
                            <button type="button" class="list-group-item">Pawn Reports</button>
                            <button type="button" class="list-group-item">Vehicle Reports</button>
                            <button type="button" class="list-group-item">Land Reports</button>
                            <button type="button" class="list-group-item">Customer Reports</button>
                            <button type="button" class="list-group-item">Account Reports</button>
                            <button type="button" class="list-group-item">Custom Reports</button>
                            <button type="button" class="list-group-item">Morbi leo risus</button>
                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                        </div>
                        <div class="panel-footer">Panel footer</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Settings</h3>
                        </div>
                        <div class="panel-body">

                        </div>
                        <div class="list-group">
                            <button type="button" class="list-group-item">Cras justo odio</button>
                            <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                            <button type="button" class="list-group-item">Morbi leo risus</button>
                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                            <button type="button" class="list-group-item">Cras justo odio</button>
                            <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                            <button type="button" class="list-group-item">Morbi leo risus</button>
                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                        </div>
                        <div class="panel-footer">Panel footer</div>
                    </div>
                </div>
            </div>
            <!--Process Div Panel Set-->
            <footer style="background: #004D40;margin-top: 10px;text-align: center;color: white;">
                <div id="footer">
                    Copyright © <a href="#" id="footer-caption">Softidea Solutions - 2016</a>
                </div>
            </footer>
        </div>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style type="text/css">
        body
        {
            font-family: 'Source Sans Pro', sans-serif;
        }
        #panelheading
        {
            background: #004D40;
            color: white;
            text-align: center;
        }
        .panel-footer
        {
            background: #004D40;
            color: white;
            text-align: center; 
        }

    </style>
</html>