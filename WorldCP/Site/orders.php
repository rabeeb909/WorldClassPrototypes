<?php $xml=simplexml_load_file("files/order.xml") or die("Error: Cannot create object"); ?>

<!DOCTYPE html>
<html lang="en" class="csstransforms csstransforms3d csstransitions">
<head>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="webthemez">
  <title>Order Page | World Class Prototypes</title>
  <!-- core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="form.css" rel="stylesheet">

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
<div>
  <h4></h4>
</div>

<div class="container">
<div class="orderinfo">

  <?php include("mail_order.php"); ?>

	<div class="section-header">
    <h1 class="section-title wow fadeInDown animated"
        style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">Request a Quote Below!</h1>
	</div>
  <p><strong>
    <?php echo $xml->quote; ?>
  </strong></p>
  <h3>
    <span style="font-size:16pt;"><font color="blue">
      <em>
	<strong>
	 <center> <?php echo $xml->errorMes; ?> </center>
	<strong>
      </em>
    </span></font>
  </h3>
  <center><p><strong> <?php echo $xml->message; ?> </strong></p></center>
  <br><br>
</div>


<div class="col-md-6">
<form id="sfUploadForm" enctype="multipart/form-data" method="post" action="#">
  <div id="uploadFormContainer">
    <div class="userinput">
      <dl>
	<dt>
	  <label>
	    Email:
	    <span class="red">*</span>
	    </label>
	  </dt>
	<dd>
	  <input type="text" name="email">
	  </dd>
	</dl>
      </dl>
<dl>
  <dt>
    <label>
      Company Name:
      <span class="red">*</span>
      </label>
    </dt>
  <dd>
    <input type="text" name="companyName">
    </dd>
  </dl>
<dl>
  <dt>
    <label>
      Contact Name:
      <span class="red">*</span>
      </label>
    </dt>
  <dd>
    <input type="text" name="contactName">
    </dd>
  </dl>
<dl>
  <dt>
    <label>
      Phone:
      <span class="red">*</span>
      </label>
    </dt>
  <dd>
    <input type="text" name="phone">
    </dd>
  </dl>
  <div class="ccms_form_element cfdiv_custom" id="style_container_div">
  <label>Process: </label><select size="1" id="Rank" class=" validate['required']" title="" type="select" name="process" value="-Select Your Rank-">
      <optgroup label="-Select Process-">
      <option value="rapid">Rapid Prototypes</option>
      <option value="casting">Rapids Casting</option>
      <option value="rotational">Rotational Modeling</option>
      <option value="vacuum">Vacuum Forming</option>
      <option value="fiber">Fiber Reinforced Composites</option>
      <option value="nests">Production Nests and Fixtures</option>
      <option value="injection">Injection Molding</option>
      <option value="cnc">CNC Machining</option>
      <option value="model">Modeling</option>
      <option value="other">Unsure-please recommend</option>
   </optgroup>
  </select><div class="clear"></div><div id="error-message-style"></div></div>

  <div id="rapid"  class="style-sub-1"  style="display: none;" name="material" onchange="ChangeDropdowns(this.value)">
    <label>Material: </label>
      <select id="Rapid Prototypes" name="Rapid Prototypes">
        <option value="">-Choose A Material-</option>
        <option value="rapid prototypes">Rapid Prototypes 1</option>
        <option value="rapid prototypes">Rapid Prototypes 2</option>
        <option value="rapid prototypes">Rapid Prototypes 3</option>
        <option value="rapid prototypes">Rapid Prototypes 4</option>
        <option value="rapid prototypes">Rapid Prototypes 5</option>
          </select>
    </div>
    <div id="casting"  class="style-sub-1"  style="display: none;" name="material" onchange="ChangeDropdowns(this.value)">
      <label>Material: </label>
        <select id="Rapids Casting" name="material">
          <option value="">-Choose A Material</option>
          <option value="rapid casting">Rapids Casting 1</option>
          <option value="rapid casting">Rapids Casting 2</option>
          <option value="rapid casting">Rapids Casting 3</option>
          <option value="rapid casting">Rapids Casting 4</option>
          <option value="rapid casting">Rapids Casting 5</option>
  	  </select>
      </div>
    <div id="rotational"  class="style-sub-1"  style="display: none;" name="material" onchange="ChangeDropdowns(this.value)">
        <label>Material: </label>
            <select id="Rotational Modeling" name="material">
  	          <option value="">-Choose A Material</option>
  		        <option value="Basic Ore Miner - Level 1a">Rotational Modeling 1</option>
  			      <option value="Basic Ore Miner - Level 2a">Rotational Modeling 2</option>
  			            <option value="Basic Ore Miner - Level 3a">Rotational Modeling 3</option>
  				          <option value="Basic Ore Miner - Level 4a">Rotational Modeling 4</option>
  					        <option value="Basic Ore Miner - Level 5a">Rotational Modeling 5</option>
  						  </select>
  	    </div>
      <div id="vacuum"  class="style-sub-1"  style="display: none;" name="material" onchange="ChangeDropdowns(this.value)">
            <label>Material: </label>
  	        <select id="Vacuum Forming" name="material">
  		          <option value="">-Choose A Material</option>
  			          <option value="Basic Ore Miner - Level 1a">Vacuum Forming 1</option>
  				          <option value="Basic Ore Miner - Level 2a">Vacuum Forming 2</option>
  					          <option value="Basic Ore Miner - Level 3a">Vacuum Forming 3</option>
  						          <option value="Basic Ore Miner - Level 4a">Vacuum Forming 4</option>
  							          <option value="Basic Ore Miner - Level 5a">Vacuum Forming 5</option>
  								    </select>
  		    </div>
      <div id="fiber"  class="style-sub-1"  style="display: none;" name="material" onchange="ChangeDropdowns(this.value)">
          <label>Material: </label>
  	    <select id="Fiber Reinforced Composites" name="material">
  	            <option value="">-Choose A Material</option>
  		          <option value="Basic Ore Miner - Level 1a">Fiber Reinforced Composites 1</option>
  			        <option value="Basic Ore Miner - Level 2a">Fiber Reinforced Composites 2</option>
  				      <option value="Basic Ore Miner - Level 3a">Fiber Reinforced Composites 3</option>
  				            <option value="Basic Ore Miner - Level 4a">Fiber Reinforced Composites 4</option>
  					          <option value="Basic Ore Miner - Level 5a">Fiber Reinforced Composites 5</option>
  						    </select>
  	      </div>
        <div id="nests"  class="style-sub-1"  style="display: none;" name="material" onchange="ChangeDropdowns(this.value)">
  	    <label>Material: </label>
  	          <select id="Production Nests and Fixtures" name="material">
  		            <option value="">-Choose A Material</option>
  			            <option value="Basic Ore Miner - Level 1a">Production Nests and Fixtures 1</option>
  				            <option value="Basic Ore Miner - Level 2a">Production Nests and Fixtures 2</option>
  					            <option value="Basic Ore Miner - Level 3a">Production Nests and Fixtures 3</option>
  						            <option value="Basic Ore Miner - Level 4a">Production Nests and Fixtures 4</option>
  							            <option value="Basic Ore Miner - Level 5a">Production Nests and Fixtures 5</option>
  								      </select>
  		      </div>
        <div id="injection"  class="style-sub-1"  style="display: none;" name="material" onchange="ChangeDropdowns(this.value)">
  	  <label>Material: </label>
  	      <select id="Injection Molding" name="material">
  		      <option value="">-Choose A Material</option>
  		            <option value="Basic Ore Miner - Level 1a">Injection Molding 1</option>
  			          <option value="Basic Ore Miner - Level 2a">Injection Molding 2</option>
  				        <option value="Basic Ore Miner - Level 3a">Injection Molding 3</option>
  					      <option value="Basic Ore Miner - Level 4a">Injection Molding 4</option>
  					            <option value="Basic Ore Miner - Level 5a">Injection Molding 5</option>
  						      </select>
  	        </div>
          <div id="cnc"  class="style-sub-1"  style="display: none;" name="material" onchange="ChangeDropdowns(this.value)">
  	      <label>Material: </label>
  	            <select id="CNC Machining" name="material">
  		              <option value="">-Choose A Material</option>
  			              <option value="Basic Ore Miner - Level 1a">CNC Machining 1</option>
  				              <option value="Basic Ore Miner - Level 2a">CNC Machining 2</option>
  					              <option value="Basic Ore Miner - Level 3a">CNC Machining 3</option>
  						              <option value="Basic Ore Miner - Level 4a">CNC Machining 4</option>
  							              <option value="Basic Ore Miner - Level 5a">CNC Machining 5</option>
  								        </select>
  		        </div>
  	<div id="model"  class="style-sub-1"  style="display: none;" name="material" onchange="ChangeDropdowns(this.value)">
  	    <label>Material: </label>
  	        <select id="Modeling" name="material">
  		        <option value="">-Choose A Material</option>
  			      <option value="Basic Ore Miner - Level 1a">Modeling 1</option>
  			            <option value="Basic Ore Miner - Level 2a">Modeling 2</option>
  				          <option value="Basic Ore Miner - Level 3a">Modeling 3</option>
  					        <option value="Basic Ore Miner - Level 4a">Modeling 4</option>
  						      <option value="Basic Ore Miner - Level 5a">Modeling 5</option>
  						        </select>
  		  </div>
          <div class="clear"></div><div id="error-message-style-sub-1"></div>
<dl>
  <dt>
    <label>
      Quantity per Part <br> (File Name)
      </label>
    </dt>
  <dd>
    <b>
      <input type="text" name="quantity"><br>
      </b>
    <span>
      Please specify below if the quantities of" <br> "each part are different.
      </span>
    </dd>
  </dl>
  <fieldset>
    <p>
      <label>Finish Level: </label>
      <select id = "myList1" name="finishLevel">
        <option value = "level1">Level 1</option>
        <option value = "level2">Level 2</option>
        <option value = "level3">Level 3</option>
        <option value = "level4">Level 4</option>
        <option value = "unsure">Unsure</option>
      </select>
    </p>
  </fieldset>
<dl>
  <dt>
    <label>Additional Information: </label>
    </dt>
  <dd>
    <textarea id="additionalInfo" name="additionalInfo" cols="50" rows="5"></textarea>
    </dd>
  </dl>
<br><br><br><br>
    </div> <!--userinput-->

<div class="info-box"> Files cannot exceed 2 GB<br></div>
<div id="fileupload">
  <label>File1:</label>
  <input type="file" name="attachFile">
  <br>
   <label>File2:</label>
  <input type="file" name="attachFile2">
  <br>
 <label>File3:</label>
  <input type="file" name="attachFile3">
  <br>
 <label>File4:</label>
  <input type="file" name="attachFile4">
  <br>
 <label>File5:</label>
  <input type="file" name="attachFile5">
  <br>
  <input type="submit" name="submit" value="Upload files">
  </div> <!--fileupload-->
  </div><br>
</form>
</div><!--col 1 form-->




<section id="order">
<div class="col-md-6">
  <div id="textCol2">
    <h2>Helpful Information Below:</h2>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              PREFERRED FILE FORMATS
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            <strong>.stl<br>  .sldprt<br>  iges(.igs)<br>  .step(.stp)</strong><br>

          </div>
        </div>
      </div>


      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              SLS MATERIALS
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            <strong>Polyamide--PA:</strong> low moisture absorption, white, nylon<br>

            <strong>Glass Filled--GF:</strong> temperature resistance, grey, 30% glass-filled nylon<br>

            <strong>Alulon:</strong> machinable, metallic grey, PA & aluminum powder blend<br>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              SLA FINISH LEVELS
            </a>
          </h4>
        </div>

        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <strong>Level 1 --</strong> Supports removed, sanded & light bead blast of support faces<br>

            <strong>Level 2 --</strong> Supports removed, sanded & bead blast entire part<br>

            <strong>Level 2 + --</strong> Sand to remove layer lines, sand with 180, bead blast entire part<br>

            <strong>Level 3 --</strong> Sand to 320 removing all accessible layer lines so it's ready to prime/paint<br>

            <strong>Level 4 --</strong> Sand to 600 wet. Required when parts are to be plated or to enhance transparency (Accura 60).
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            SLA MATERIALS
          </a>
        </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">
          <strong>Accura® 25:</strong> durable, off-white, PP-like<br>

          <strong>Accura® 60:</strong> rigid, transparent, PC-like<br>

          <strong>Accura® Xtreme:</strong> durable, gray, ABS/PP-like<br>

          <strong>Accura® Xtreme White 200:</strong> durable, white, ABS-like<br>

          <strong>Accura® Bluestone:</strong> Exceptional stiffness, high temperature and humidity resistance; blue-ish<br>

          <strong>Somos® 8120:</strong> semi-flexible, milky white, PE-like<br>

          <strong>Somos® PerFORM:</strong> Exceptional stiffness, high temperature and humidity resistance; white<br>
        </div>
      </div>
    </div>


  </div><!--testCol2-->
</div><!--column--->
<!--container-->
</section>
</div>





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
