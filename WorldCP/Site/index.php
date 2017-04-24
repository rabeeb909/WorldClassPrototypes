<?php $xml=simplexml_load_file("files/index.xml") or die("Error: Cannot create object"); ?>

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
		<a class="navbar-brand" href="index.php"><img src="demo/logo.jpg" height = "70px" class = "img-rounded" style="display: inline-block;"></a>
      </div>

      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="scroll"><a href="index.php">Home</a></li>
          <li class="scroll"><a href="about.php">About</a></li>
          <li class="scroll"><a href="services.php">Services</a></li>
          <li class="scroll"><a href="gallery.php">Gallery</a></li>
          <li class="scroll"><a href="contact.php">Contact Us</a></li>
		  <li class="scroll"><a href="orders.php">Request A Quote!</a></li>
        </ul>
      </div>
    </div>
    <!--/.container-->
  </nav>
  <!--/nav-->
</header>
<!--/header-->

<section id="hero-banner">
  <div class="banner-inner">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
		 <!-- <img src="shop.jpg" alt="" style="width:1200px;height:670px;"> -->
          <h2><span>World Class Prototypes</span></h2>
          <p><span>We will make the prototyping process easy for you!</span></p>
          <a class="btn btn-primary btn-lg" href="about.html"><span>Learn More</span></a>

        </div>
      </div>
    </div>
  </div>
</section>
<!--/#main-slider-->



<section id="slides">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">What We Do For You</h2>

      <p class="wow fadeInDown animated"
         style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;"><?php echo $xml->description; ?></p>
    </div>

	<div class="slideshow-container">
	  <div class="mySlides fade">
	    <div class="numbertext">1 / 3</div>
	    <a href="cnc.html"><img src="demo/CNCPictures/cnc1.jpg" style="width:100%" height="450px"></a>
	    <strong><div class="text">CNC MACHINING</div></strong>
	  </div>

	  <div class="mySlides fade">
	    <div class="numbertext">2 / 3</div>
	    <img src="demo/ProductionNFPictures/ProductionNF6.jpg" style="width:100%" height="450px">
	    <strong><div class="text">PRODUCTION FIXTURES AND NESTS</div></strong>
	  </div>

	  <div class="mySlides fade">
	    <div class="numbertext">3 / 3</div>
	    <img src="demo/RotomoldPictures/Rotomold3.jpg" style="width:100%" height="450px">
	    <strong><div class="text">ROTATIONAL MOLDING</div></strong>
	  </div>

	  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	  <a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span>
	  <span class="dot" onclick="currentSlide(2)"></span>
	  <span class="dot" onclick="currentSlide(3)"></span>
	</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Picture Slider -->



<!--/#bottom-->

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
