<!DOCTYPE html>
<html lang="en" class="ie_11_scroll">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="hhhwidth=device-width, initial-scale=1">
        <title>App Landing Page</title>
<!--

App Landing Template

http://www.templatemo.com/tm-474-app-landing

-->
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/landingpage/css/bootstrap.min.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/landingpage/css/font-awesome.min.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/landingpage/css/templatemo_style.css' ?>">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/landingpage/favicon.png' ?>" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Top menu -->
        <!-- <div class="show-menu">
            <a href="#" class="shadow-top-down">+</a>
        </div> -->
        <!-- <nav class="main-menu shadow-top-down">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#templatemo_home" class="scroll_effect">Home</a></li>
                <li><a href="#templatemo_features" class="scroll_effect">Features</a></li>
                <li><a href="#templatemo_download" class="scroll_effect">Download</a></li>
                <li><a href="http://www.facebook.com/templatemo" rel="nofollow" target="_parent">Fan Page</a></li>
                <li><a href="elements.html">Elements</a></li>
                <li><a href="#templatemo_contact" class="scroll_effect">Contact</a></li>
            </ul>
        </nav> -->
        <!-- Home -->
        <section id="templatemo_home">
            <div class="container">
                <div class="templatemo_home_inner_wapper">
                    <h1 class="text-center"><i class="fa fa-mobile-phone"></i> Smart Door</h1>
                </div>
                <div class="templatemo_home_inner_wapper">
                    <h2 class="text-center">Beta</h2>
                    <p class="text-center">
                        <a href="<?php echo base_url() . 'Login' ?>" class="btn col-xs-12">
                            <i class="fa fa-user"></i> Login
                        </a>
                    </p>
                    <p class="text-center">
                        Login To Set Up Your Smart Door
                    </p>
                </div>
                <div class="templatemo_home_inner_wapper btn_wapper" style="justify-content: center;">
                    <div class="col-sm-12">
                        <a href="#templatemo_features" class="btn col-xs-12 scroll_effect shadow-top-down">
                            <i class="fa fa-align-justify"></i> Live
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features -->
        <section id="templatemo_features">
            <div class="container-fluid">
                <header class="template_header">
                    <h1 class="text-center"><span>...</span> Visitors <span>...</span></h1>
                </header>
                <div class="col-sm-12">
                    <div class="col-xs-6 col-lg-6 feature-box">
                        <div class="feature-box-inner">
                            <div class="feature-box-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <h1 style="text-align: center;">Visitors Inside<h1>
                            <h1 style="text-align: center; font-weight: bold;" id="visitor_inside"><?= $in ?><h1>
                        </div>
                    </div>
                    <div class="col-xs-6 col-lg-6 feature-box">
                        <div class="feature-box-inner">
                            <div class="feature-box-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <h1 style="text-align: center;">Capacity Left<h1>
                            <h1 style="text-align: center; font-weight: bold;" id="capacity_left"><?= $left ?><h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Download -->
        <section id="templatemo_download">
            <div class="container">
                <header class="template_header">
                    <h1 class="text-center"><span>...</span> Download <span>...</span></h1>
                </header>
                <div class="templatemo_download_text_wapper">
                    <p>
                        Everyone can download this project from Github by clicking this button.
                    </p>
                </div>
                <div class="col-xs-12">
                    <a href="https://github.com/julioojordan" class="shadow-top-down"><img src="<?php echo base_url() . 'assets/landingpage/images/github.jpg' ?>" width="260" heigh="100"/></a>
                </div>
            </div>
        </section>
        <!-- Contact -->
        <section id="templatemo_contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <header class="template_header">
                            <h1 class="text-center"><span>...</span> Contact <span>...</span></h1>
                        </header>
                        <p class="text-center">
                            <i class="fa fa-envelope"></i> Email: andyanjordan1153@gmail.com<br />
                            <i class="fa fa-phone"></i> Phone: +62 813-2928-4226
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="nav nav-pills social">
                            <li><a href="#" class="shadow-top-down social-facebook"><i class="fa fa-facebook-official"></i></a></li>
                            <li><a href="#" class="shadow-top-down social-twitter"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#" class="shadow-top-down social-youtube"><i class="fa fa-youtube-square"></i></a></li>
                            <li><a href="#" class="shadow-top-down social-instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 footer-copyright">
                        <p>Copyright &copy; 2084 <a href="#" target="_parent">Company Name</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- require plugins -->
        <script src="<?php echo base_url() . 'assets/landingpage/js/jquery.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/landingpage/js/jquery-ui.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/landingpage/js/bootstrap.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/landingpage/js/jquery.parallax.js' ?>"></script>
        <!-- template mo config script -->
        <script src="<?php echo base_url() . 'assets/landingpage/js/templatemo_scripts.js' ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <script>
            $(document).ready(function() {
                setInterval(function(){
                $.ajax({
                    url:"<?php echo base_url();?>index.php/LandingPage/auto_count",
                    dataType : 'json',
                    success:function(data){
                        console.log(data);
                        $.each(data, function(key,val){
                        document.getElementById("visitor_inside").innerHTML = val.in_capacity;
                        $left = parseInt(val.capacity) - parseInt(val.in_capacity)
                        document.getElementById("capacity_left").innerHTML = $left;
                        });
                    }
                });
                }, 1000);
            });
        </script>
    </body>
</html>