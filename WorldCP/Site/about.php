<?php $xml=simplexml_load_file("files/about.xml") or die("Error: Cannot create object"); ?>
<!DOCTYPE html>
<html lang="en" class="csstransforms csstransforms3d csstransitions">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="webthemez">
  <title>World Class Prototypes</title>
  <!-- core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="">
</head>

<body id="home">

<header id="header">
  <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><span style="color: #FFF;line-height: 1em;font-weight: bold;">World Class Prototypes</span></a>
      </div>

      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="scroll"><a href="index.html">Home</a></li>
          <li class="scroll"><a href="about.html">About</a></li>
          <li class="scroll"><a href="services.html">Services</a></li>
          <li class="scroll"><a href="gallery.html">Gallery</a></li>
          <li class="scroll"><a href="contact.html">Contact Us</a></li>
		  <li class="scroll"><a href="orders.html">Request A Quote!</a></li>
		  
        </ul>
      </div>
    </div>
    <!--/.container-->
  </nav>
  <!--/nav-->
</header>
<!--/header-->

<section id="about">
  <div class="container">

    <div class="section-header">
      <h2 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">About Us</h2>

      <p class="wow fadeInDown animated"
         style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;"><?php echo $xml->title; ?></p>
    </div>

    <div class="row">
      <div class="col-sm-6 wow fadeInLeft animated"
           style="visibility: visible; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
        <img class="img-responsive" src="demo/about.png" alt="">
      </div>

      <div class="col-sm-6 wow fadeInRight animated"
           style="visibility: visible; animation-name: fadeInRight; -webkit-animation-name: fadeInRight;">
        <h3 class="column-title">Our Company</h3>

        <p><?php echo $xml->description; ?></p>


        <a class="btn btn-primary" href="#">Learn More</a>

      </div>
    </div>
  </div>
</section><!--/#about-->


<section id="our-team">
  <div class="container rbg">
    <div class="section-header">
      <h2 class="section-title wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">Our Team</h2>
      <p class="wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;"><?php echo $xml->team; ?></p>
    </div>
    <div class="row text-center">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="0ms"
             style="visibility: visible; animation-duration: 400ms; -webkit-animation-duration: 400ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
          <div class="team-img">
            <img class="img-responsive" src="demo/1.jpg" alt="">
          </div>
          <div class="team-info">
            <h3>Thanh Do</h3>
            <span>Ha noi</span>
          </div>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="100ms"
             style="visibility: visible; animation-duration: 400ms; -webkit-animation-duration: 400ms; animation-delay: 100ms; -webkit-animation-delay: 100ms; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
          <div class="team-img">
            <img class="img-responsive" src="demo/2.jpg" alt="">
          </div>
          <div class="team-info">
            <h3>Thu Minh</h3>
            <span>President</span>
          </div>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="200ms"
             style="visibility: visible; animation-duration: 400ms; -webkit-animation-duration: 400ms; animation-delay: 200ms; -webkit-animation-delay: 200ms; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
          <div class="team-img">
            <img class="img-responsive" src="demo/3.jpg" alt="">
          </div>
          <div class="team-info">
            <h3>Tuan Phong</h3>
            <span>Architect</span>
          </div>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="team-member wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="300ms"
             style="visibility: visible; animation-duration: 400ms; -webkit-animation-duration: 400ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
          <div class="team-img">
            <img class="img-responsive" src="demo/4.jpg" alt="">
          </div>
          <div class="team-info">
            <h3>Hai Chu</h3>
            <span>Manager</span>
          </div>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>
<!--/#our-team-->


<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        © 2015 World Class Prototypes.
      </div>
      <div class="col-sm-6">
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom-scripts.js"></script>

</body>
</html>
