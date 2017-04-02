<?php $xml=simplexml_load_file("contact.xml") or die("Error: Cannot create object"); ?>
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
		<a class="navbar-brand" href="index.html"><img src="demo/logo.jpg" class = "img-rounded" style="display: inline-block;"></a>
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


<!--/#contact-us-->

<section id="contact-us">
  <div class="container">
    <div class="section-header">
      <h1 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">Contact Us</h1>

      <p class="wow fadeInDown animated"
<<<<<<< HEAD:WorldCP/contact.php
         style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;"><?php echo $xml->title; ?><br></p>
=======
         style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">Please fill out the form below if you have any questions or concerns for us and we will get back to you as soon as we can!  And if you would like to place an order click the "Request A Quote!" tab near the top right of the page! Have a great day!</p>
>>>>>>> b6ad46b2d0bfaae9ba08d02e9ea1d6d6f7dd21d1:WorldCP/Site/contact.html
    </div>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBNVLOeDktpd5jW1bfUdsW__zMNKOjUBK8'></script><div style='overflow:hidden;height:285px;width:722px;'><div id='gmap_canvas' style='height:285px;width:722px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://www.embedmap.net/'>google map embed</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=32e22ebb5eaa6f0046faeb6e4d0a426494d7c42e'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(42.804221,-86.10038350000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(42.804221,-86.10038350000002)});infowindow = new google.maps.InfoWindow({content:'<strong>World Class Prototypes, Inc.</strong><br>243 129th Avenue<br>49424 Holland<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
  </div>
</section>
<!-- <h3><?php include "feedback_email.php"?></h3>
-->
<section id="contact">

  <div class="container">
    <div class="container contact-info">
      <div class="row">
        <div class="col-sm-4 col-md-4">
          <div class="contact-form">

            <address>
              <strong>World Class Prototypes, Inc.</strong><br>
              243 129th Avenue<br>
              Holland, MI 49424<br>
              <abbr title="Phone">Phone:</abbr> (616)355-0200
			  <abbr title="Phone">Fax:</abbr> (616)-355-2010
            </address>
          </div>
        </div>
        <div class="col-sm-8 col-md-8">
          <div class="contact-form">

            <form id="main-contact-form" name="contact-form" method="post" action="#">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required="">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required="">
              </div>
              <div class="form-group">
                <textarea name="message" class="form-control" rows="8" placeholder="Message" required=""></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
            </form>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	       <script src='google-sheet.js'></script>
          </div>
		  
        </div>
      </div>
    </div>
	
<center><div id="map" style="width:600px;height:400px;"></center>
  <script>
  function myMap() {
      var mapCanvas = document.getElementById("map");
      var mapOptions = {
          center: new google.maps.LatLng(51.5, -0.2),
          zoom: 10
      };
      var map = new google.maps.Map(mapCanvas, mapOptions);
  }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

  </div>
</section>
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
