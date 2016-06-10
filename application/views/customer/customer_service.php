<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Service Temp For Customer Search</title>
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
            body
            {
                font-family: 'Source Sans Pro', sans-serif;
            }
        </style>
    </head>
    <body>
        <!--Customer Navigation Bar-->
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Customer Information</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Register</a></li>
                            <li><a href="#">Update</a></li>
                            <li><a href="#">View</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Add a Lease</a></li>
                                    <li><a href="#">Add a Pawn</a></li>
                                    <li><a href="#">Pay Installment</a></li>
                                    <li><a href="#">View Service Report</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Account</a></li>
                        </ul>
                        <div class="col-sm-3 col-md-3 pull-right">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="q">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>        
                    </div>
                </nav>
            </div>
        </div>
        <!--Customer Navigation Bar-->

        <!--Customer Panel Section-->
        <div class="container" style="margin-top: 80px;display: block;" id="one">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customer Information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Search Option</legend>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Select Search Option:</label>
                                        <select name="cbopayment" id="input-region" class="form-control" required onchange="check();">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="bike">Search by Customer Id</option>
                                            <option value="twheel">Search by NIC</option>
                                            <option value="land">Search by Customer Id</option>
                                        </select>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
        #panelheading
        {
            background: #004D40;
            color: white;          
        }
        #custcontinue
        {
            background-color: #004D40;
            color: white;
            float: right;
        }
        #custcontinue:hover
        {
            background-color: #009688;
        }
        //.thcaption{text-align: center;}
        #backregister
        {
            background-color: #004D40;
            color: white;
            float: right;
            margin-right: 12px;
        }
        #backregister:hover
        {
            background-color: #009688;
        }
        </html>
