<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer Service</title>
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
            .modal-backdrop {
                z-index: -1;
            }
            ul {
                list-style-type: square;
                list-style-position: outside;
                list-style-image: none;
            }
            #cviewbuttons
            {
                background-color: #004D40;
                color: white;
                margin-top: 25px;
            }
            #cviewbuttons:hover
            {
                background-color: #009688;
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
                                    <li><a href="#" data-toggle="modal" data-target="#LoginModal">Add a Lease</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#LoginModal">Add a Pawn</a></li>
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



        <!--Customer Service Panel Started-->
        <div class="container" style="margin-top: 80px;display: block;" id="one">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customer Service Information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Customer Details</legend>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Customer Name:</label>
                                            <input type="text" disabled name="fname" id="fname" value="Malinda Senanayake" placeholder="Customer Full Name" id="input-email" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Customer NIC:</label>
                                            <input type="text" disabled name="fname" id="fname" value="931781285V" placeholder="Customer Full Name" id="input-email" class="form-control" required/>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <div id="searchOptionPanel">
                                    <fieldset id="account">
                                        <legend>Service Details</legend>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Search by Service:</label>
                                            <select name="cbopayment" id="cboservice" class="form-control" required onchange="check();">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="bike">TVS Bike Lease</option>
                                                <option value="twheel">Maharagama Land Pawn</option>
                                                <option value="land">Bajaj Bike Lease</option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Search Service:</label>
                                                <input type="text" name="fname" id="fname" value="" placeholder="Enter Service Here" id="input-email" class="form-control" required/>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>


                            <!--Customer Service Loader-->
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="col-sm-6">
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Service No:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Service No" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Service Date:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Service Date" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Service:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Service" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Service Rental:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Service Rental" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Service Period:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Service Period" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Installment:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Installment" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Term No</th>
                                                        <th>Date</th>
                                                        <th>Installment</th>
                                                        <th>Payment</th>
                                                        <th>Customer Due</th>
                                                        <th>Company Due</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>2016/01/10</td>
                                                        <td>2000.00</td>
                                                        <td>2000.00</td>
                                                        <td>00.00</td>
                                                        <td>00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>2016/02/10</td>
                                                        <td>2000.00</td>
                                                        <td>1000.00</td>
                                                        <td>1000.00</td>
                                                        <td>00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>2016/03/10</td>
                                                        <td>2000.00</td>
                                                        <td>3000.00</td>
                                                        <td>00.00</td>
                                                        <td>1000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Payable Rental:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Installment" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Total Paid Installments:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Installment" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Total Customer Due:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Installment" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Total Company Due:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Installment" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Total Payable:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Installment" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-inline">
                                                <div class="form" style="float: right;">

                                                    <button type="submit"  class="btn btn" id="cservicebtn">Add Installment</button>
                                                    <button type="submit"  class="btn btn" id="cservicebtn">Add New Lease</button>
                                                    <button type="submit"  class="btn btn" id="cservicebtn">Add New Pawn</button>
                                                    <button type="submit" class="btn btn" id="cservicebtn">Print Report</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Customer Service Loader-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Customer Service Panel Ended-->


        <!--Popup Pane of Customers-->
        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;
                            </span><span class="sr-only"> Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Choose Customer</h4>
                    </div>
                    <div class="modal-body">
                        <div class="input-inline">
                            <button type="button" id="cviewbuttons" class="btn btn">New Customer</button>
                            <button type="button" id="cviewbuttons" class="btn btn">Exiting Customer</button>
                        </div>
                        <ul>
                            <li><p style="margin-top: 12px;">New Customer Option can be Used to Create new Customer Account</p></li>
                            <li><p>Exiting Customer Option can be used to add services to currently registered customers in the company</p></li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" 
                                class="btn btn-default" data-dismiss="modal">
                            Close</button>
                    </div>
                </div
            </div>
        </div>
    </div>

    <!--Popup Pane of Customers-->



</body>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="http://bootsnipp.com/dist/scripts.min.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style type="text/css">
    #panelheading
    {
        background: #004D40;
        color: white;          
    }
    #cservicebtn
    {
        background-color: #004D40;
        color: white;
        margin-top: 25px;
    }
    #cservicebtn:hover
    {
        background-color: #009688;
    }
</style>
</style>
</html>
