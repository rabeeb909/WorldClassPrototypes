<?php $xml=simplexml_load_file("files/services.xml") or die("Error: Cannot create object"); ?>

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

<section id="features">
  <div class="container">
    <div class="section-header">
      <h1 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">What We Do</h1>

      <p class="wow fadeInDown animated"
         style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">
         <?php echo $xml->top; ?>
       </p>
    </div>




<!-- First row -->
		<div class="container">
		<div class="row">
        <a name="modeling">
			<div class="col-md-6">
			<!-- First box -->
				<div class="section-header">
					<h2 class="section-title wow fadeInDown animated"><a href="modeling.html">Modeling</h2></a>

							<!-- Services -->

					<p class="wow fadeInDown animated">
            <?php echo $xml->modeling; ?>
					</p>
					<!-- ><img src="demo/ModelingPictures/Model1.jpg" height="175px" width="175px"> -->

					<!-- navbar-right-->
					</div>
				<!-- Container -->
				</div>
				</a>



		<a name="rapidcasting">
			<div class="col-md-6">
			<!-- Second box -->
			<div class="section-header">
				<h2 class="section-title wow fadeInDown animated"><a href="rapidcasting.html">Rapid Casting</h2></a>

				<p class="wow fadeInDown animated">
          <?php echo $xml->rapidC; ?>
				</p>

				<!-- <img src="demo/RapidPrototypesPictures/rapid4.jpg" height="175px" width="175px"> -->

			</div>
		</div>
  </div>
</div>
</a>


<!-- Second row -->
	<div class="container">
		<div class="row">
        <a name = "rapidprototypes">
					<div class="col-sm-6">
			<!-- First box -->
			<div class="section-header">
				<h2 class="section-title wow fadeInDown animated"><a href="rapidproto.html">Rapid Prototypes</h2></a>

          <p class="wow fadeInDown animated">
            <?php echo $xml->rapidP; ?>
			 </p>
			</div>
			</div>
	</a>


		<div class="col-sm-6">
			<a name="cncmachining">

			<!-- Second box -->
			<div class="section-header">
				<h2 class="section-title wow fadeInDown animated"><a href="cnc.html">CNC Machining</h2></a>

				<p class="wow fadeInDown animated">
          <?php echo $xml->cnc; ?>
			</p>
		</div>
		</div>
		</a>
		</div>
	</div>
	</a>
	</div>

	<!-- Third row -->
		<div class="container">
			<div class="row">
	        <a name = "rotomold">
				<div class="col-sm-6">
				<!-- First box -->
				<div class="section-header">
					<h2 class="section-title wow fadeInDown animated"><a href="rotational.html">Rotational Molding</h2></a>

          <p class="wow fadeInDown animated">
            <?php echo $xml->rotational; ?>
				</p>
			</div>
		</div>
	</a>

			<div class="col-sm-6">
				<a name="vacform">

				<!-- Second box -->
				<div class="section-header">
					<h2 class="section-title wow fadeInDown animated"><a href="vacuum.html">Vacuum Forming</h2></a>

					<p class="wow fadeInDown animated"
					 style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">
           <?php echo $xml->vacuum; ?>
				</p>
			</div>
			</div>
			</a>
			</div>
		</div>
		</a>



		<!-- Fourth row -->
			<div class="container">
				<div class="row">
		        <a name = "rotomold">
					<div class="col-sm-6">
					<!-- First box -->
					<div class="section-header">
						<h2 class="section-title wow fadeInDown animated"><a href="fiber.html">Fiber Composites</h2></a>

            <p class="wow fadeInDown animated">
              <?php echo $xml->fiber; ?>
					</p>
				</div>
				</div>
			</a>

				<div class="col-sm-6">
					<a name="vacform">

					<!-- Second box -->
					<div class="section-header">
						<h2 class="section-title wow fadeInDown animated"><a href="injection.html">Injection Molding</h2></a>

						<p class="wow fadeInDown animated"
						 style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">
             <?php echo $xml->injection; ?>
					</p><br>
				</div>
				</div>
				</a>
				</div>
			</div>
			</a>



		<!-- Fifth row -->
			<div class="container">
				<div class="row">
		        <a name = "rotomold">
					<div class="col-sm-6">
					<!-- First box -->
					<div class="section-header">
						<h2 class="section-title wow fadeInDown animated"><a href="nestsandfixtures.html">Production Nests And Fixtures</h2></a>

            <p class="wow fadeInDown animated">
              <?php echo $xml->nests; ?>
					</p>
				</div>
			</div>
		</a>
	</div>
</div>
</div>
</section>


<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        © 2015 World Class Prototypes.
      </div>
      <div class="col-sm-6">
        <ul class="social-icons">
          <li><a href="https://www.google.com"><i class="fa fa-facebook"></i></a></li>
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
