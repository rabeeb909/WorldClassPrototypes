<?php $xml=simplexml_load_file("files/gallery.xml") or die("Error: Cannot create object"); ?>

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

<section id="portfolio">
  <div class="container">
    <div class="section-header">
      <h1 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">Our Gallery</h1>

      <p class="wow fadeInDown animated"
         style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">
         <?php echo $xml->description; ?>
       </p>
    </div>

    <div class="portfolio-items isotope" style="position: relative; overflow: hidden; height: 400px;">
      <div class="portfolio-item designing isotope-item"
           style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
        <div class="portfolio-item-inner">
          <img class="img-responsive" src="demo/CNCPictures/cnc1.jpg" alt="">

          <div class="portfolio-info">
            <h3><font color="white">CNC Project</font></h3>
            Old CNC Project part
            <a class="preview" href="project1.html" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->

      <div class="portfolio-item mobile development isotope-item"
           style="position: absolute; left: 0px; top: 0px; transform: translate3d(291px, 0px, 0px);">
        <div class="portfolio-item-inner">
          <img class="img-responsive" src="demo/FoamPictures/foam1.jpg" alt="">

          <div class="portfolio-info">
            <h3><font color="white">Foam Project</font></h3>
            Foam Project
            <a class="preview" href="demo/FoamPictures/foam1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->

      <div class="portfolio-item designing isotope-item"
           style="position: absolute; left: 0px; top: 0px; transform: translate3d(582px, 0px, 0px);">
        <div class="portfolio-item-inner">
          <img class="img-responsive" src="demo/RapidPrototypesPictures/rapid1.jpg" alt="">

          <div class="portfolio-info">
            <h3><font color="white">Rapid Prototype</font></h3>
            Rapid Prototyping Dinasour Project
            <a class="preview" href="demo/ProductionNFPictures/ProductionNF3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->

      <div class="portfolio-item mobile isotope-item"
           style="position: absolute; left: 0px; top: 0px; transform: translate3d(873px, 0px, 0px);">
        <div class="portfolio-item-inner">
          <img class="img-responsive" src="demo/VaccumPictures/vacuum3.jpg" alt="">

          <div class="portfolio-info">
            <h3><font color="white">Vacuum Project</font></h3>
            Vacuum Project
            <a class="preview" href="demo/04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->

      <div class="portfolio-item designing development isotope-item"
           style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 200px, 0px);">
        <div class="portfolio-item-inner">
          <img class="img-responsive" src="demo/ProductionNFPictures/ProductionNF1.jpg" alt="">

          <div class="portfolio-info">
            <h3><font color="white">Nests and Fixtures</font></h3>
            Nests and Fixtures Picture
            <a class="preview" href="demo/05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->

      <div class="portfolio-item mobile isotope-item"
           style="position: absolute; left: 0px; top: 0px; transform: translate3d(291px, 200px, 0px);">
        <div class="portfolio-item-inner">
          <img class="img-responsive" src="demo/RotomoldPictures/Rotomold3.jpg" alt="">

          <div class="portfolio-info">
            <h3><font color="white">Rotational Mold Project</font></h3>
            Rotational Mold Picture
            <a class="preview" href="demo/06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->

      <div class="portfolio-item designing development isotope-item"
           style="position: absolute; left: 0px; top: 0px; transform: translate3d(582px, 200px, 0px);">
        <div class="portfolio-item-inner">
          <img class="img-responsive" src="demo/RapidPrototypesPictures/rapid2.jpg" alt="">

          <div class="portfolio-info">
            <h3><font color="white">Rapid Prototypes</font></h3>
            Rapid Prototype Picture
            <a class="preview" href="demo/" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->

      <div class="portfolio-item mobile isotope-item"
           style="position: absolute; left: 0px; top: 0px; transform: translate3d(873px, 200px, 0px);">
        <div class="portfolio-item-inner">
          <img class="img-responsive" src="demo/ModelingPictures/Model4.jpg" alt="">

          <div class="portfolio-info">
            <h3><font color="white">Modeling Project</font></h3>
            Modeling Pictures
            <a class="preview" href="demo/08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->
    </div>
  </div>
  <!--/.container-->
</section>
<!--/#portfolio-->



<!--/#footer-->
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
