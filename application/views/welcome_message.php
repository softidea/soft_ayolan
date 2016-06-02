<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ayolan|System</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"/>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet"/>
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet"/>
        <link href="../../css/bootstrap.css">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        
        
    <!--Panel-->
    <div class="container">
        <div class="row">
         
        <div class="col-sm-5">
        <div class="card text-xs-center">
            <div class="card-header default-color">
                <h3 style="color: white;">Ayolan Invesments</h3>
            </div>
            <p>Management System</p>
            <div class="card-block">
                
                <!--<h4 class="card-title">Username</h4>-->
                <div class="md-form">
                    <input type="text" id="form1" class="form-control">
                    <label for="form1" class="">Username</label>
                </div>
                <div class="md-form">
                    <input type="password" id="form1" class="form-control">
                    <label for="form1" class="">Password</label>
                </div>
                
                <button type="button" class="btn btn-default">Login Here</button>
            </div>
            <div class="card-footer text-muted default-color">
                
                <a href="#">
                    <img style="width: 25px;height: 25px;" src="https://www.polymer-project.org/images/logos/p-logo.svg">
                </a>
                <p style="font-size: 13px;">
                    Developing by :  
                    <a style="color: white;text-decoration: none;font-size: 13px;"href="http://www.fsczone.com" target="_blank">
                        Softidea Solution
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!--/.Panel-->
        
        
        
        
        
        
        
        

        <!-- Login Form End -->

        <!-- Login javascript start        -->

        <script type="text/javascript">
            $(window, document, undefined).ready(function () {

                $('input').blur(function () {
                    var $this = $(this);
                    if ($this.val())
                        $this.addClass('used');
                    else
                        $this.removeClass('used');
                });

                var $ripples = $('.ripples');

                $ripples.on('click.Ripples', function (e) {

                    var $this = $(this);
                    var $offset = $this.parent().offset();
                    var $circle = $this.find('.ripplesCircle');

                    var x = e.pageX - $offset.left;
                    var y = e.pageY - $offset.top;

                    $circle.css({
                        top: y + 'px',
                        left: x + 'px'
                    });

                    $this.addClass('is-active');

                });

                $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function (e) {
                    $(this).removeClass('is-active');
                });

            });
        </script>

        <!-- Login javascript End        -->

        <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
        
    </body>
</html>