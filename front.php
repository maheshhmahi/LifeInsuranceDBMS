<?php 
$err = "";
$err1="";
if($_GET)
{

  if('error')
  {
    $err = $_GET["error"];  
  }
}

?>
    
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Life Insurance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Life Insurance, insurance,life" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- how it works -->
    <link href="css/timeline.css" type="text/css" rel="stylesheet" media="all">
    <!-- grid hover -->
    <link href="css/hover.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="banner" id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="front.php">
                       Life Insurance
                    </a>
                </h1>
                <!---<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>--->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="front.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#shruu">about</a>
                        </li>
                        <!---<li class="nav-item dropdown mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item scroll" href="#work">our work</a>
                                <a class="dropdown-item scroll" href="#testi">testimonials</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item scroll" href="#more">more</a>
                            </div>
                        </li>--->
                        <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#contact">Contact</a>
                        </li>
                        <li>
                                <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal">client
                                <i class="far fa-user-circle"></i>
                            </button>
                            
                        </li>
                         <li>
							<?php
     						 if($err)
     						 {
      						  ?>
       						 <p style="color:red">Invalid credentials </p>
       						  <button type="button" class="btn  ml-lg-2 w3ls-btn w3-red" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal2"> Try Again </button>

        					<?php
     						 }  else
     						  {
      						?>
								<button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal2">Admin
                                <i class="far fa-user-circle"></i>
                            </button>
							<?php } ?>
                        </li>
                         <center><p style="color: white;font-size: 30px;"> 
                                </p> 
                            </center>  
                    </ul>
                </div>

            </nav>

        </header>
        <!-- //header -->
        <div class="container">
            <div class="banner-text">
                <div class="slider-info">
                               	<p style="color:white"><?php
                                 if($err)
                                    {
                                      echo $err;
                                    }

                                    ?>
                                </p>
                    <h3>protect your family with insurance</h3>

                    <p class="text-white mt-sm-4 mt-2"></p>
                    <p class="text-white mt-sm-4 mt-2"></p>
                    <p class="text-white mt-sm-4 mt-2"></p>
                    <a class="btn btn-primary mt-4 agile-link-bnr scroll" href="#about" role="button">View
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- about -->
    <div class="about-w3sec py-sm-5" id="shruu">
        <div class="container py-5">
            <div class="title-section pb-4">
                <h3 class="main-title-agile">you are in good hands</h3>
                <span class="title-line">
                </span>
            </div>
            <div class="ins-sec1">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="abt-block mb-lg-0 mb-5">
                            <div class="serv_abs serv_bottom">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                            </div>
                            <h3>Term Life Insurance</h3>
                            <p>Term insurance is a life insurance product offered by an insurance company which offers financial coverage to the policy holder for a specific time period.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 my-lg-0 my-md-5">
                        <div class="abt-block">
                            <div class="serv_abs serv_bottom">
                               <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <h3>Whole Life Policy</h3>
                            <p>The policyholder pays regular premiums until his death, upon which the corpus is paid out to the family.</p>
                        </div>
                    </div>
                    <!---<div class="col-lg-4 mt-lg-0 mt-md-5">
                        <div class="abt-block mt-md-0 mt-5">
                            <div class="serv_abs serv_bottom">
                                <i class="fas fa-plane"></i>
                            </div>
                            <h3>travel insurance</h3>
                            <p>Cras ultricies congue rutrum congue leo eget malesuada. Ligula sed magna dictum porta.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-lg-5">
                    <div class="col-lg-8 mx-auto mt-5">
                        <div class="row">
                            <div class="col-lg-6 my-lg-0 my-md-5">
                                <div class="abt-block">
                                    <div class="serv_abs  serv_bottom">
                                        <i class="fas fa-hand-holding-heart"></i>
                                    </div>
                                    <h3>health insurance</h3>
                                    <p>Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum
                                        porta.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-lg-0 mt-5">
                                <div class="abt-block">
                                    <div class="serv_abs  serv_bottom">
                                        <i class="fas fa-hand-holding-usd"></i>
                                    </div>
                                    <h3>Property Insurance</h3>
                                    <p>Rutrum congue donec leo eget malesuada. Cras ultricies ligula sed magna dictum
                                        porta.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--->
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- stats -->
    <section class="agile_stats py-sm-5" id="more">
        <div class="container">
            <div class="py-lg-5 w3-abbottom">
                <div class="row py-5">
                    <div class="counter col-lg-3 col-6">
                        <i class="far fa-smile"></i>
                        <div class="timer count-title count-number mt-2 text-white" data-to="5100" data-speed="1500"></div>
                        <p class="count-text text-capitalize text-white">happy clients</p>
                    </div>

                    <div class="counter col-lg-3 col-6">
                        <i class="fas fa-database"></i>
                        <div class="timer count-title count-number mt-2 text-white" data-to="971" data-speed="1500"></div>
                        <p class="count-text text-capitalize text-white">insurance projects</p>
                    </div>
                    <div class="counter col-lg-3 col-6 mt-lg-0 mt-4">
                        <i class="fas fa-users"></i>
                        <div class="timer count-title count-number mt-2 text-white" data-to="21" data-speed="1500"></div>
                        <p class="count-text text-capitalize text-white">professional agents</p>
                    </div>
                    <!---<div class="counter col-lg-3 col-6 mt-lg-0 mt-4">
                        <i class="fas fa-award"></i>
                        <div class="timer count-title count-number mt-2 text-white" data-to="27" data-speed="1500"></div>
                        <p class="count-text text-capitalize text-white">years of experience</p>
                    </div>--->
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- services -->
    <div class="more-services py-lg-5">
        <div class="container pt-sm-5">
            <div class="title-section py-4">
                <h3 class="main-title-agile">personal and commercial insurance</h3>
                <span class="title-line">
                </span>
            </div>
            <div class="row grid pt-sm-5">
                <div class="col-lg-3 col-6">
                    <figure class="effect-layla">
                        <img src="images/p1.jpg" alt="img" class="img-fluid" />
                        <figcaption>
                            <h4>loyalty</h4>
                            <p>Cras ultricies convallis at tellus ivamus suscipit tortor eget felis.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-6">
                    <figure class="effect-layla">
                        <img src="images/p2.jpg" alt="img" class="img-fluid" />
                        <figcaption>
                            <h4>trustworthiness</h4>
                            <p>Cras ultricies convallis at tellus ivamus suscipit tortor eget felis.</p>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-3 col-6">
                    <figure class="effect-layla">
                        <img src="images/p3.jpg" alt="img" class="img-fluid" />
                        <figcaption>
                            <h4>professionals</h4>
                            <p>Cras ultricies convallis at tellus ivamus suscipit tortor eget felis.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-6">
                    <figure class="effect-layla">
                        <img src="images/p4.jpg" alt="img" class="img-fluid" />
                        <figcaption>
                            <h4>any insurance</h4>
                            <p>Cras ultricies convallis at tellus ivamus suscipit tortor eget felis.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
   
    <div class="contact-wthree" id="contact">
        <div class="container py-sm-5">
            <div class="title-section py-4">
                <h3 class="main-title-agile">contact us</h3>
                <span class="title-line">
                </span>
            </div>
            <div class="row py-lg-5 py-4">
                <div class="col-lg-4">
                    <div class="agile-contact-top">
                        <h4>get in touch </h4>
                        <p>1234k Avenue,Block-4,New York City.</p>
                    </div>
                    <hr>
                    <p>Donec mi nulla, auctor nec sem a, ornare auctor mi. Sed mi tortor, commodo a felis in,
                        fringilla
                        tincidunt
                        nulla. Vestibulum volutpat non eros ut vulpuuctor nec sem </p>
                    <div class="d-sm-flex">
                        
                        <a href="#" role="button" data-toggle="modal" data-target="#exampleModal1" class="btn btn-primary mt-4 ml-3 agile-link-bnr scroll text-white">
                            Register Now</a>
                    </div>

                </div>
                <div class="offset-2"></div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <!-- register form grid -->
                    <div class="register-top1">
                        <form action="contact.php" method="post" class="register-wthree">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            First name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Johnson" name="fname"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Last name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Kc" name="lname" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            Mobile
                                        </label>
                                        <input class="form-control" type="text" placeholder="xxxx xxxxx" name="phone"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Email
                                        </label>
                                        <input class="form-control" type="email" placeholder="example@email.com" name="email"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            Your message
                                        </label>
                                        <textarea placeholder="Type your message here" class="form-control" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-agile btn-block w-100 font-weight-bold text-uppercase">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--  //register form grid ends here -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footerv4-w3ls" id="footer">
        <div class="footerv4-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 footv4-left">
                        <h3>About Us</h3>
                        <h2>
                            <a href="front.php">Insurance</a>
                        </h2>
                        <p class="text-white">Whole Life does two things for you : Protects your family and allows you to save for the Future</p>
                        <div class="footerv4-social">
                            <h3>stay connected</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="fab fa-facebook-f icon_facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fab fa-twitter icon_twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fab fa-dribbble icon_dribbble"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fab fa-google-plus icon_g_plus"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- //footer social -->

                    </div>
                    <div class="col-lg-3 col-sm-6 footv4-content mt-sm-0 mt-4">
                        <h3>featured content</h3>
                        <ul class="v4-content">
                            <li>
                                <a href="front.php">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="scroll">About Us</a>
                            </li>
                            <li>
                                <a href="#work" class="scroll">work</a>
                            </li>
                            <li>
                                <a href="#testi" class="scroll">testimonials</a>
                            </li>
                            <li>
                                <a href="#contact" class="scroll">contact</a>
                            </li>
                        </ul>
                    </div>
                   <!--- <div class="col-lg-3 footv4-left fv4-g3 my-lg-0 my-4">
                        <h3>Latest releases</h3>
                        <ul class="v4-rel">
                            <li>
                                <a href="#">
                                    Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                                </a>
                                <p class="text-white">February 15, 2018</p>
                            </li>
                            <li>
                                <a href="#">
                                    Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                                </a>
                                <p class="text-white">February 18, 2018</p>
                            </li>
                            <li>
                                <a href="#">
                                    Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                                </a>
                                <p class="text-white">February 20, 2018</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 footv4-left">
                        <h3>newsletter</h3>
                        <form action="#" method="post">
                            <input type="text" placeholder="Your name" name="name" required>
                            <input type="email" placeholder="Your Email" name="email" required>
                            <input type="submit" value="Submit">
                        </form>
                    </div>--->
                </div>
            </div>
            <!-- /footerv4-top -->
        </div>
    </div>
   <div class="cpy-right">
        <p>© 2019 Life Insurance. All rights reserved | Design by Shruthi
        </p>
    </div>
    <!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="user.php" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-white">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                               <!--- <a href="#" class="text-white">Forgot Password?</a>--->
                            </div>
                        </div>
                        <p class="text-center dont-do text-white">Don't have an account?
                            <a href="insert.php" data-toggle="modal" data-target="#exampleModal1" class="text-white">
                                Register Now</a>

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- Admin login  -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                	 
                    <form action="admin.php" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-white">
                                    <span></span>Remember me?</label>
                            </div>
                          
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- register -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="insert.php" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder=" " name="ConPassword" id="password2"
                                required="">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-agile">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3 text-white">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // register -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- testimonials  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //testimonials  Responsiveslides -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="js/counter.js"></script>
    <!-- //stats -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>