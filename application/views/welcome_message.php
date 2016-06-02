<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ayolan|System</title>

        <style type="text/css">

            .cssload-thecube {
                width: 73px;
                height: 73px;
                margin: 0 auto;
                margin-top: 49px;
                position: relative;
                transform: rotateZ(45deg);
                -o-transform: rotateZ(45deg);
                -ms-transform: rotateZ(45deg);
                -webkit-transform: rotateZ(45deg);
                -moz-transform: rotateZ(45deg);
            }
            .cssload-thecube .cssload-cube {
                position: relative;
                transform: rotateZ(45deg);
                -o-transform: rotateZ(45deg);
                -ms-transform: rotateZ(45deg);
                -webkit-transform: rotateZ(45deg);
                -moz-transform: rotateZ(45deg);
            }
            .cssload-thecube .cssload-cube {
                float: left;
                width: 50%;
                height: 50%;
                position: relative;
                transform: scale(1.1);
                -o-transform: scale(1.1);
                -ms-transform: scale(1.1);
                -webkit-transform: scale(1.1);
                -moz-transform: scale(1.1);
            }
            .cssload-thecube .cssload-cube:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgb(43,160,199);
                animation: cssload-fold-thecube 2.76s infinite linear both;
                -o-animation: cssload-fold-thecube 2.76s infinite linear both;
                -ms-animation: cssload-fold-thecube 2.76s infinite linear both;
                -webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
                -moz-animation: cssload-fold-thecube 2.76s infinite linear both;
                transform-origin: 100% 100%;
                -o-transform-origin: 100% 100%;
                -ms-transform-origin: 100% 100%;
                -webkit-transform-origin: 100% 100%;
                -moz-transform-origin: 100% 100%;
            }
            .cssload-thecube .cssload-c2 {
                transform: scale(1.1) rotateZ(90deg);
                -o-transform: scale(1.1) rotateZ(90deg);
                -ms-transform: scale(1.1) rotateZ(90deg);
                -webkit-transform: scale(1.1) rotateZ(90deg);
                -moz-transform: scale(1.1) rotateZ(90deg);
            }
            .cssload-thecube .cssload-c3 {
                transform: scale(1.1) rotateZ(180deg);
                -o-transform: scale(1.1) rotateZ(180deg);
                -ms-transform: scale(1.1) rotateZ(180deg);
                -webkit-transform: scale(1.1) rotateZ(180deg);
                -moz-transform: scale(1.1) rotateZ(180deg);
            }
            .cssload-thecube .cssload-c4 {
                transform: scale(1.1) rotateZ(270deg);
                -o-transform: scale(1.1) rotateZ(270deg);
                -ms-transform: scale(1.1) rotateZ(270deg);
                -webkit-transform: scale(1.1) rotateZ(270deg);
                -moz-transform: scale(1.1) rotateZ(270deg);
            }
            .cssload-thecube .cssload-c2:before {
                animation-delay: 0.35s;
                -o-animation-delay: 0.35s;
                -ms-animation-delay: 0.35s;
                -webkit-animation-delay: 0.35s;
                -moz-animation-delay: 0.35s;
            }
            .cssload-thecube .cssload-c3:before {
                animation-delay: 0.69s;
                -o-animation-delay: 0.69s;
                -ms-animation-delay: 0.69s;
                -webkit-animation-delay: 0.69s;
                -moz-animation-delay: 0.69s;
            }
            .cssload-thecube .cssload-c4:before {
                animation-delay: 1.04s;
                -o-animation-delay: 1.04s;
                -ms-animation-delay: 1.04s;
                -webkit-animation-delay: 1.04s;
                -moz-animation-delay: 1.04s;
            }



            @keyframes cssload-fold-thecube {
                0%, 10% {
                    transform: perspective(136px) rotateX(-180deg);
                    opacity: 0;
                }
                25%,
                75% {
                    transform: perspective(136px) rotateX(0deg);
                    opacity: 1;
                }
                90%,
                100% {
                    transform: perspective(136px) rotateY(180deg);
                    opacity: 0;
                }
            }

            @-o-keyframes cssload-fold-thecube {
                0%, 10% {
                    -o-transform: perspective(136px) rotateX(-180deg);
                    opacity: 0;
                }
                25%,
                75% {
                    -o-transform: perspective(136px) rotateX(0deg);
                    opacity: 1;
                }
                90%,
                100% {
                    -o-transform: perspective(136px) rotateY(180deg);
                    opacity: 0;
                }
            }

            @-ms-keyframes cssload-fold-thecube {
                0%, 10% {
                    -ms-transform: perspective(136px) rotateX(-180deg);
                    opacity: 0;
                }
                25%,
                75% {
                    -ms-transform: perspective(136px) rotateX(0deg);
                    opacity: 1;
                }
                90%,
                100% {
                    -ms-transform: perspective(136px) rotateY(180deg);
                    opacity: 0;
                }
            }

            @-webkit-keyframes cssload-fold-thecube {
                0%, 10% {
                    -webkit-transform: perspective(136px) rotateX(-180deg);
                    opacity: 0;
                }
                25%,
                75% {
                    -webkit-transform: perspective(136px) rotateX(0deg);
                    opacity: 1;
                }
                90%,
                100% {
                    -webkit-transform: perspective(136px) rotateY(180deg);
                    opacity: 0;
                }
            }

            @-moz-keyframes cssload-fold-thecube {
                0%, 10% {
                    -moz-transform: perspective(136px) rotateX(-180deg);
                    opacity: 0;
                }
                25%,
                75% {
                    -moz-transform: perspective(136px) rotateX(0deg);
                    opacity: 1;
                }
                90%,
                100% {
                    -moz-transform: perspective(136px) rotateY(180deg);
                    opacity: 0;
                }
            }

        </style>
        <style type="text/css">

            * { box-sizing:border-box; }

            body {
                font-family: Helvetica;
                background: #eee;
                -webkit-font-smoothing: antialiased;
            }

            hgroup { 
                text-align:center;
                margin-top: 4em;
            }

            h1, h3 { font-weight: 300; }

            h1 { color: #636363; }

            h3 { color: #4a89dc; }

            form {
                width: 380px;
                margin: 4em auto;
                padding: 3em 2em 2em 2em;
                background: #fafafa;
                border: 1px solid #ebebeb;
                box-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
            }

            .group { 
                position: relative; 
                margin-bottom: 45px; 
            }

            input {
                font-size: 18px;
                padding: 10px 10px 10px 5px;
                -webkit-appearance: none;
                display: block;
                background: #fafafa;
                color: #636363;
                width: 100%;
                border: none;
                border-radius: 0;
                border-bottom: 1px solid #757575;
            }

            input:focus { outline: none; }


            /* Label */

            label {
                color: #999; 
                font-size: 18px;
                font-weight: normal;
                position: absolute;
                pointer-events: none;
                left: 5px;
                top: 10px;
                transition: all 0.2s ease;
            }


            /* active */

            input:focus ~ label, input.used ~ label {
                top: -20px;
                transform: scale(.75); left: -2px;
                /* font-size: 14px; */
                color: #4a89dc;
            }


            /* Underline */

            .bar {
                position: relative;
                display: block;
                width: 100%;
            }

            .bar:before, .bar:after {
                content: '';
                height: 2px; 
                width: 0;
                bottom: 1px; 
                position: absolute;
                background: #4a89dc; 
                transition: all 0.2s ease;
            }

            .bar:before { left: 50%; }

            .bar:after { right: 50%; }


            /* active */

            input:focus ~ .bar:before, input:focus ~ .bar:after { width: 50%; }


            /* Highlight */

            .highlight {
                position: absolute;
                height: 60%; 
                width: 100px; 
                top: 25%; 
                left: 0;
                pointer-events: none;
                opacity: 0.5;
            }


            /* active */

            input:focus ~ .highlight {
                animation: inputHighlighter 0.3s ease;
            }


            /* Animations */

            @keyframes inputHighlighter {
                from { background: #4a89dc; }
                to 	{ width: 0; background: transparent; }
            }


            /* Button */

            .button {
                position: relative;
                display: inline-block;
                padding: 12px 24px;
                margin: .3em 0 1em 0;
                width: 100%;
                vertical-align: middle;
                color: #fff;
                font-size: 16px;
                line-height: 20px;
                -webkit-font-smoothing: antialiased;
                text-align: center;
                letter-spacing: 1px;
                background: transparent;
                border: 0;
                border-bottom: 2px solid #3160B6;
                cursor: pointer;
                transition: all 0.15s ease;
            }
            .button:focus { outline: 0; }


            /* Button modifiers */

            .buttonBlue {
                background: #4a89dc;
                text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);
            }

            .buttonBlue:hover { background: #357bd8; }


            /* Ripples container */

            .ripples {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
                background: transparent;
            }


            /* Ripples circle */

            .ripplesCircle {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                opacity: 0;
                width: 0;
                height: 0;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.25);
            }

            .ripples.is-active .ripplesCircle {
                animation: ripples .4s ease-in;
            }


            /* Ripples animation */

            @keyframes ripples {
                0% { opacity: 0; }

                25% { opacity: 1; }

                100% {
                    width: 200%;
                    padding-bottom: 200%;
                    opacity: 0;
                }
            }

            footer { text-align: center; }

            footer p {
                color: #888;
                font-size: 13px;
                letter-spacing: .4px;
            }

            footer a {
                color: #4a89dc;
                text-decoration: none;
                transition: all .2s ease;
            }

            footer a:hover {
                color: #666;
                text-decoration: underline;
            }

            footer img {
                width: 80px;
                transition: all .2s ease;
            }

            footer img:hover { opacity: .83; }

            footer img:focus , footer a:focus { outline: none; }


        </style>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>


        <!-- Login Form Start -->

        <form style="padding-top: 0px">
            <hgroup>
                <h1>Ayolan Invesments</h1>
                <h3>Managment System</h3>
            </hgroup>
            <div class="group">
                <input type="text"><span class="highlight"></span><span class="bar"></span>
                <label>Name</label>
            </div>
            <div class="group">
                <input type="email"><span class="highlight"></span><span class="bar"></span>
                <label>Email</label>
            </div>
            <button type="button" class="button buttonBlue">
                Login Here
                <div class="ripples buttonRipples">
                    <span class="ripplesCircle"></span>
                </div>
            </button>
        </form>
        <footer>
            <a href="#">
                <img src="https://www.polymer-project.org/images/logos/p-logo.svg">
            </a>
            <p>
                Developing by  
                <a href="http://www.fsczone.com" target="_blank">
                    Softidea Solution
                </a>
            </p>
        </footer>
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

    </body>
</html>