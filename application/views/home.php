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


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6"'>
                    <div>
                        <img class="log-wap"src="http://fourgenius.com/ayolan_src/images/login/Logo500x500_transpernt.png">
                    </div>
                </div>
                <aside id="column-right" class="col-sm-6">

                    <div class="panel">
                        <div class="panel-heading" style="background-color: #004D40;">
                            <h3 class="panel-title"><h2 style="color: white;">AYOLAN INVESTMENTS</h2></h3>
                            <p class="sub_topic">Finance Management System</p>
                        </div>
                        <div class="panel-body">

                            <form action="login-register.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label" for="input-email">E-Mail Address :</label>
                                    <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-password">Password :</label>
                                    <input type="password" name="password" placeholder="Password" id="input-password" class="form-control" required/>
                                    <a href="#"><p id="para_forget">Did you forgot your password?</p></a></div>
                                <input type="submit" name="login_process" value="Login Here" class="btn" id='btn_login'/>
                            </form>
                        </div>
                        <div class="panel-footer">Powered by : <a href="#">Softidea Solutions</a></div>
                    </div>
                </aside>
            </div>
        </div>


        <!--Footer Section Opened-->
        <!--Footer Section Opened-->
        <div id="footer">
            Copyright © <a href="#" id="footer-caption">Softidea Solutions - 2016</a>
        </div>
        <!--Footer section closed--><!--Footer section closed-->



    </body>
    <style>
        #para_forget
        {
            text-decoration: none;
            color:#004D40;
            margin-top: 8px;
            font-size: 12px;  
        }
        .panel-footer
        {
            background-color: #004D40;
            color: #CFD8DC;
            font-weight: 500;
            font-size: 12px;
            text-align: center;
        }
        .sub_topic
        {
            color: white;
            font-size:14px;
        }
        #btn_login
        {
            background-color: #004D40;
            color: white;
        }
        #btn_login:hover
        {
            background-color: #009688;
        }

        body
        {font-family: 'Source Sans Pro', sans-serif;background-image: url('http://fourgenius.com/ayolan_src/images/login/back.jpg');background-repeat: none;}
        .panel{border:1px solid #004D40;}
        #column-right
        {
            float: right;
            margin-top: 90px;
        }
        .log-wap
        {
            width: 350px;
            height: 350px;
            margin-top: 85px;
            margin-left: 130px;
        }
        #footer
        {
            background-color:#004D40;
            color:white;
            clear:both;
            text-align:center;
            padding:5px;
            margin-top: 112px;
        }
        #footer-caption
        {
            color: white;
            text-decoration: none;
        }
        #footer-caption:hover
        {
            color: #002166;
        }
    </style>
</html>