<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/cssslider_files/csss_engine1/style.css">

        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="/css/style.css"> <!-- Gem style -->
    <script src="/js/modernizr.js"></script> <!-- Modernizr -->

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: yellow;
                background-image: url("/img/FONDO-11 _ 16-9 _ 1366px - 768px.jpg");
                color: #636b6f;*/
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 45px;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .aintegral {
                position: absolute;
                left: 3%;
                top: 25%;
            }

            .cultura {
                position: absolute;
                left: 25%;
                top: 25%;
            }

            .deportes {
                position: absolute;
                left: 35%;
                top: 25%;
            }

            .gestion {
                position: absolute;
                left: 58%;
                top: 25%;
            }

            .salud {
                position: absolute;
                left: 85%;
                top: 25%;
            }


.div-img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.div-img .img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
  transform: scale(1);
  -ms-transform: scale(1);
  -moz-transform: scale(1);
  -webkit-transform: scale(1);
  -o-transform: scale(1);
  -webkit-transition: all 500ms ease-in-out;
  -moz-transition: all 500ms ease-in-out;
  -ms-transition: all 500ms ease-in-out;
  -o-transition: all 500ms ease-in-out;
}
.div-img:hover .img {
  transform: scale(0.8);
  -ms-transform: scale(0.8);
  -moz-transform: scale(0.8);
  -webkit-transform: scale(0.8);
  -o-transform: scale(0.8);
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
}


        </style>
    </head>
    <body>


<header role="banner">
        <div id="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a></div>

        <nav class="main-nav">
            <ul>
                <!-- inser more links here -->
                <li><a class="cd-signin" href="#0">Sign in</a></li>
                <li><a class="cd-signup" href="#0">Sign up</a></li>
            </ul>
        </nav>
    </header>

    <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
            <ul class="cd-switcher">
                <li><a href="#0">Sign in</a></li>
                <li><a href="#0">New account</a></li>
            </ul>

            <div id="cd-login"> <!-- log in form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                        <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Remember me</label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width" type="submit" value="Login">
                    </p>
                </form>
                
                <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div> <!-- cd-login -->

            <div id="cd-signup"> <!-- sign up form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Create account">
                    </p>
                </form>

                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div> <!-- cd-signup -->

            <div id="cd-reset-password"> <!-- reset password form -->
                <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="reset-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Reset password">
                    </p>
                </form>

                <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
            </div> <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-user-modal-container -->
    </div> <!-- cd-user-modal -->



        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Iniciar Sesión</a>
                    <a href="{{ url('/register') }}">Registrar</a>
                </div>
            @endif



        <!-- End cssSlider.com -->

            <div class="content">
                <div class="title m-b-md">
                    Sistema de Bienestar Universitario - UN Palmira
                </div>

                -<!--<div class="links">-->
                <div class="aintegral">  <div class="div-img" >    <a href="#"><img class="img" src="/img/aintegral.png" title="" alt="Foto3"></a>  </div></div>

                <div class="cultura">  <div class="div-img" >    <a href="#"><img class="img" src="/img/cultura.png" title="" alt="Foto3"></a>  </div></div>

                <div class="deportes">  <div class="div-img" >    <a href="#"><img class="img" src="/img/deportes.png" title="" alt="Foto3"></a>  </div></div>

                <div class="gestion">  <div class="div-img" >    <a href="#"><img class="img" src="/img/socieconomico.png" title="" alt="Foto3"></a>  </div></div>

                <div class="salud">  <div class="div-img" >    <a href="#"><img class="img" src="/img/salud.png" title="Foto3" alt=""></a>  </div></div>


                <!--<a href="#">Actividad Física y Deportiva</a>
                    <a href="#">Cultura</a>
                    
                    <a href="#">Actividad Física y Deportiva</a>
                    <a href="#">Gestión y Fomento Socioeconómica</a>
                    <a href="#">Salud Estudiantil</a>
                </div>-->


                <br>
                <br>
                            <div class="csslider1 autoplay ">
        <input name="cs_anchor1" id="cs_slide1_0" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_1" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_2" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_3" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_play1" type="radio" class="cs_anchor" checked="">
        <input name="cs_anchor1" id="cs_pause1_0" type="radio" class="cs_anchor pause">
        <input name="cs_anchor1" id="cs_pause1_1" type="radio" class="cs_anchor pause">
        <input name="cs_anchor1" id="cs_pause1_2" type="radio" class="cs_anchor pause">
        <input name="cs_anchor1" id="cs_pause1_3" type="radio" class="cs_anchor pause">
        <ul>
            <li class="cs_skeleton"><img src="cssslider_files/csss_images1/14390788_1754333918151423_7567613530060212223_n.jpg" style="width: 100%;"></li>
            <li class="num0 img slide"> <img src="cssslider_files/csss_images1/14390788_1754333918151423_7567613530060212223_n.jpg" alt="" title=""></li>
            <li class="num1 img slide"> <img src="cssslider_files/csss_images1/14463155_10209779100608400_2922656612206013541_n.jpg" alt="" title=""></li>
            <li class="num2 img slide"> <img src="cssslider_files/csss_images1/14519837_10209778713478722_3499438877621300130_n.jpg" alt="" title=""></li>
            <li class="num3 img slide"> <img src="cssslider_files/csss_images1/fondo1___43___1024px__768px.jpg" alt="" title=""></li>
        </ul><div class="cs_engine"><a href="http://cssslider.com"></a></div>
        <div class="cs_description">
            <label class="num0"></label>
            <label class="num1"></label>
            <label class="num2"></label>
            <label class="num3"></label>
        </div>
        <div class="cs_play_pause">
            <label class="cs_play" for="cs_play1"><span><i></i><b></b></span></label>
            <label class="cs_pause num0" for="cs_pause1_0"><span><i></i><b></b></span></label>
            <label class="cs_pause num1" for="cs_pause1_1"><span><i></i><b></b></span></label>
            <label class="cs_pause num2" for="cs_pause1_2"><span><i></i><b></b></span></label>
            <label class="cs_pause num3" for="cs_pause1_3"><span><i></i><b></b></span></label>
            </div>
        <div class="cs_arrowprev">
            <label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
            <label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
            <label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
            <label class="num3" for="cs_slide1_3"><span><i></i><b></b></span></label>
        </div>
        <div class="cs_arrownext">
            <label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
            <label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
            <label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
            <label class="num3" for="cs_slide1_3"><span><i></i><b></b></span></label>
        </div>
        <div class="cs_bullets">
            <label class="num0" for="cs_slide1_0"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="cssslider_files/csss_tooltips1/14390788_1754333918151423_7567613530060212223_n.jpg" alt="" title=""></span></label>
            <label class="num1" for="cs_slide1_1"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="cssslider_files/csss_tooltips1/14463155_10209779100608400_2922656612206013541_n.jpg" alt="" title=""></span></label>
            <label class="num2" for="cs_slide1_2"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="cssslider_files/csss_tooltips1/14519837_10209778713478722_3499438877621300130_n.jpg" alt="" title=""></span></label>
            <label class="num3" for="cs_slide1_3"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="cssslider_files/csss_tooltips1/fondo1___43___1024px__768px.jpg" alt="" title=""></span></label>
        </div>
        </div>

                
            </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->
    </body>
</html>
