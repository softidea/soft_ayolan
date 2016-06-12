<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Services View</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Optional theme -->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <style type="text/css">
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
                background-color: #009688;
                color: white;

            }
            #cviewbuttons:hover
            {
                background-color: #004D40;
            }
            #panelheading
            {
                background: #009688;
                color: white;          
            }
            #cservicebtn
            {
                background-color: #009688;
                color: white;
            }
            #cservicebtn:hover
            {
                background-color: #004D40;
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

        <!--Service View Main Panel-->
        <div class="container" style="margin-top: 80px;display: block;" id="one">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customer Service Information</h3>
                        </div>
                        <div class="panel-body" style="background-color: #FAFAFA;">
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Customer Details</legend>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Customer NIC:</label>
                                            <input type="text"  name="customersearch" id="fname" value="" placeholder="Customer NIC" id="input-email" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Customer Name:</label>
                                            <input type="text"  name="customersearch" id="fname" value="" placeholder="Customer Name" id="input-email" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Customer TP:</label>
                                            <input type="text"  name="customersearch" id="fname" value="" placeholder="Customer Telephone" id="input-email" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Start Date:</label>
                                            <input type="text"  name="customersearch" id="fname" value="" placeholder="2016-10-20" id="input-email" class="form-control" required/>
                                        </div
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <div id="searchOptionPanel">
                                    <fieldset id="account">
                                        <legend>Service Details</legend>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Service No:</label>
                                                <input type="text" name="fname" id="fname" value="" placeholder="Service No" id="input-email" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Loan Payment:</label>
                                                <input type="text" name="fname" id="fname" value="" placeholder="Loan Payment" id="input-email" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Installment:</label>
                                                <input type="text" name="fname" id="fname" value="5736.00" placeholder="Installment" id="input-email" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">End Date:</label>
                                                <input type="text" name="fname" id="fname" value="2016-10-20" placeholder="End Date" id="input-email" class="form-control" required/>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!--Service View Main Panel-->

                            <!--Customer Service Loader-->
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Installment</th>
                                                        <th>Date</th>
                                                        <th>Paid Date</th>
                                                        <th>Payment</th>
                                                        <th>Customer Due</th>
                                                        <th>Company Due</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>2016/01/10</td>
                                                        <td>2016-10-12</td>
                                                        <td>6000.00</td>
                                                        <td>00.00</td>
                                                        <td>264.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>2016/02/10</td>
                                                        <td>2016-10-12</td>
                                                        <td>5000.00</td>
                                                        <td>736.00</td>
                                                        <td>00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
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
                                                    <tr>
                                                        <th scope="row">7</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">8</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">9</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr><tr>
                                                        <th scope="row">10</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr><tr>
                                                        <th scope="row">11</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">12</th>
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
                                            <div class="container">
                                                <ul class="nav nav-tabs" style="width: 1000px;">
                                                    <li class="active"><a data-toggle="tab" href="#home">Add New</a></li>
                                                    <li><a data-toggle="tab" href="#menu1">Edit</a></li>
                                                    <li><a data-toggle="tab" href="#menu2">View</a></li>
                                                    <li><a data-toggle="tab" href="#menu3">Settlement</a></li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="home" class="tab-pane fade in active">
                                                        <h3>Add New Installment Here</h3>
                                                        <p>New Installment available for the current service , Please add new installment</p>
                                                        <div class="col-sm-4">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Payable Installment:</label>
                                                                    <input type="text" name="fname" id="fname" value="5736.00" placeholder="Payable Installment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <button type="submit"  class="btn btn" id="cservicebtn">Add Installment</button>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Payment:</label>
                                                                    <input type="text" name="fname" id="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="menu1" class="tab-pane fade">
                                                        <h3>Edit Installments Here</h3>
                                                        <p>You can edit the last installment of the above service</p>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Payable Installment:</label>
                                                                    <input type="text" disabled name="fname" id="fname" value="5736.00" placeholder="Payable Installment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Paid Installment:</label>
                                                                    <input type="text" disabled name="fname" id="fname" value="5780.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Payment:</label>
                                                                    <input type="text" name="fname" id="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                                <button type="submit"  class="btn btn" id="cservicebtn">Update Installment</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="menu2" class="tab-pane fade">
                                                        <h3>View Installment Information Here</h3>
                                                        <p>Total Service Installments ad due payments available here</p>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Installment:</label>
                                                                    <input type="text" name="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Next Installment Date:</label>
                                                                    <input type="text" name="fname" value="2016-10-10" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Total Customer Due:</label>
                                                                    <input type="text" name="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Next Installment:</label>
                                                                    <input type="text" name="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Total Company Due:</label>
                                                                    <input type="text" name="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Total Payable:</label>
                                                                    <input type="text" name="fname" value="35000.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div id="menu3" class="tab-pane fade">
                                                        <h3>Settlement of the Loan Payment</h3>
                                                        <p>Service Settlement can be use minimum more than 5 installments(months) available</p>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Total Payable Installments:</label>
                                                                    <input type="text" disabled name="fname" value="10" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Total Payable:</label>
                                                                    <input type="text" disabled name="fname" value="35000.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Payment:</label>
                                                                    <input type="text" name="fname" value="35000.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <button type="submit"  class="btn btn" id="cservicebtn">Settle Loan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Customer Service Loader-->


    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
