<?php $xml=simplexml_load_file("files/contact.xml") or die("Error: Cannot create object"); ?>

<!DOCTYPE html>
<html>
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


<!--/#contact-us-->
<section id="contact-us">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">Contact Us</h2>

          <p class="wow fadeInDown animated"
             style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;"><?php echo $xml->title; ?></p>
    </div>
  </div>

    <section id="contact">
      <div class="container">
        <div class="container contact-info">

              <div class="contact-form">
                <center>
                <?php include('feedback_email.php'); ?>
                <link rel="stylesheet" href="form.css" type="text/css">
                <div class="container">
                  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    <fieldset>
                      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
                      <span class="error"><?= $name_error ?></span>
                    </fieldset>
                    <fieldset>
                      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
                      <span class="error"><?= $email_error ?></span>
                    </fieldset>
                    <fieldset>
                      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
                      <span class="error"><?= $phone_error ?></span>
                    </fieldset>
                    <fieldset>
                      <textarea value="<?= $message ?>" placeholder="Message" name="message" tabindex="5">
                      </textarea>
                    </fieldset>
                    <fieldset>
                      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                    <div class="success"><?= $success ?></div>
                  </form>
                </div></center>




            </div>
          </div>

          <h3><center>Locate both of our shops by using the maps below!</center></h3><br><br>

          <div class="row">
            <div class="col-sm-6">

                <address>
                  <center><strong>World Class Prototypes, Inc.</strong><br><br>
                  915 East 32nd Street, Dock 13<br>
                  Holland, MI 49424<br><br>
                  <abbr title="Phone">Phone:</abbr> (616)355-0200<br>
                  <abbr title="Phone">Fax:</abbr> (616)-355-2010</center>
                </address>
              </div>
    			   <div class="col-sm-6">
               <address>
                 <center><strong>World Class Prototypes, Inc.</strong><br><br>
                 243 129th Avenue<br>
                 Holland, MI 49424<br><br>
                 <abbr title="Phone">Phone:</abbr> (616)355-0200<br>
                <abbr title="Phone">Fax:</abbr> (616)-355-2010</center>
               </address>
              </div>
            </div>

        </div>

    </div>
    </section>
    <!--/#bottom-->


      <div class="container">
        <div class"row">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCSnkABOjFtctcXVyw0DYXJQ0dz08RBJyE">
</script>
<script type="text/javascript">
</script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDsjE7f0XVaRhy6bh3Bar3UhJZasbJ6xUQ">
</script>
<script type="text/javascript">
</script>

<body onload="initialize()">
<div class="col-sm-6">
<title>WCP Location 1</title>
<div id="map_canvas" style="top: 10px; left: 25px; width:410px; height:375px; float: center"></div>
</div>
<div class="col-sm-6">
<title>WCP Location 2</title>
<div id="map_canvas_2" style="top: 10px; left: 75px; width:410px; height:375px"></div>
</div>
</body>
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
