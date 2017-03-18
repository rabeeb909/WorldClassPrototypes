
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
        <a class="navbar-brand" href="index.html"><span style="font-size: 35px;color: #FFF;line-height: 1em;font-weight: bold;">World Class Prototypes</span></a>
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
      <h2 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">Contact Us</h2>

      <p class="wow fadeInDown animated"
         style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">We always welcome feedback. Below is our contact information and also a feedback form.<br></p>
    </div>
  </div>
</section>
<h3><?php include "feedback_email.php"?></h3>
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
                <input type="text" name="vname" class="form-control" placeholder="Name" required="">
              </div>
              <div class="form-group">
                <input type="text" name="vemail" class="form-control" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <input type="text" name="sub" class="form-control" placeholder="Subject" required="">
              </div>
              <div class="form-group">
                <textarea name="msg" class="form-control" rows="8" placeholder="Message" required=""></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
            </form>

          </div>
        </div>
      </div>
    </div>
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
