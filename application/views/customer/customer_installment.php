<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer|Installment</title>
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
        //
        <div class="container">
            <div class="row header" style="text-align:center;color:green">
                <h3>Bootstrap popups (Responsive)</h3>
            </div>
            <div class="row header" style="text-align:center;margin-top:40px;">
                <a href="#" data-toggle="modal" 
                   data-target="#PostCommentsModal">Post Comments</a></br></br>
                <a href="#" data-toggle="modal" data-target="#LoginModal">Login</a>
            </div>
            <div class="modal fade" id="PostCommentsModal" tabindex="-1" 
                 role="dialog" aria-labelledby="helpModalLabel"     aria-hidden="true">
                <div class="modal-dialog">      
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" 
                                    data-dismiss="modal">
                                <span aria-hidden="true">&times;
                                </span><span class="sr-only">
                                    Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                Post Comment</h4>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" 
                                       placeholder="Your Name" />
                            </div>
                            <p>
                            </p>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" 
                                       placeholder="Your Email" />
                            </div>
                            <p>
                            </p>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <textarea rows="4" cols="50" 
                                          class="form-control" placeholder="Your Message">
                                </textarea>
                            </div>
                            <p>
                            </p>
                            <button type="button" class="btn-primary">
                                Send</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" 
                                    class="btn btn-default" data-dismiss="modal">
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>

            //
            //This is the code for the Login popup
            //
            <div class="modal fade" id="LoginModal" tabindex="-1" 
                 role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;
                                </span><span class="sr-only">
                                    Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                Login</h4>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Email" />
                            </div>
                            <p>
                            </p>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Password" />
                            </div>
                            <p>
                            </p>  
                            <button type="button" class="btn-primary">
                                SignIn</button>
                            <button type="button" class="btn-primary">
                                SignUp</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" 
                                    class="btn btn-default" data-dismiss="modal">
                                Close</button>
                        </div>
                    </div
                </div>
            </div>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
